<?php

namespace App\Http\Controllers;

use App\Models\ServiceUser;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ServiceController extends Controller
{
    //
    public function showServiceForm(){
        return view('service-form');
    }

    public function showServiceView(){

        $serviceusers = DB::table('serviceuser')->orderBy('created_at', 'desc')->get();
        // dd($serviceusers);
        return view('services-view',compact('serviceusers'));
    }

    public function showServiceEdit($id){
        $user = ServiceUser::findOrFail($id);
        return view('service-edit',compact('user'));
    }

    public function servicestore(Request $request){
        // Validate the request data
        $request->validate([
            'name' => 'required|string|regex:/^[\p{Thai}\p{L}\p{N}\s]+$/u',
            'itemrepair' => 'required',
            'detailrepair' => 'required',
            'location' => 'required',
            'date' => 'required|date|after_or_equal:today',
            // Add more validation rules as needed
        ],
        [
            'name.required' => 'กรุณาใส่ชื่อผู้แจ้งซ่อม',
            'itemrepair.required' => 'กรุณาใส่ชื่อสิ่งที่ต้องการซ่อม',
            'detailrepair.required' => 'กรุณาใส่รายละเอียดการพัง',
            'location.required' => 'กรุณาแจ้งสถานที่',
            'date.required' => 'กรุณาแจ้งวันส่งงาน',
            'date.after_or_equal' => 'โปรดตรวจเช็ควันที่ในฟอร์ม',
            'name.regex' => 'โปรดตรวจสอบชื่อของคุณว่ามีอักษรพิเศษหรือไม่'
        ]
    );

        // Store the service data in the database
        ServiceUser::create([
            'name' => $request->name,
            'itemrepair' => $request->itemrepair,
            'detailrepair' => $request->detailrepair,
            'location' => $request->location,
            'date' => $request->date,
        ]);
        // You can use a model to save the data to the database

        Notification::create([
            'message' => "{$request->name} ได้ทำการแจ้งซ่อม {$request->itemrepair}",
        ]);

        return redirect()->route('service-form')->with('success', 'Sent form successfully.');
    }

    public function serviceupdate(Request $request, $id){
        // Validate the request data
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z0-9]+$/',
            'itemrepair' => 'required',
            'detailrepair' => 'required',
            'location' => 'required',
            'date' => 'required|date|after_or_equal:today',
            // Add more validation rules as needed
        ],
        [
            'name.required' => 'กรุณาใส่ชื่อผู้แจ้งซ่อม',
            'itemrepair.required' => 'กรุณาใส่ชื่อสิ่งที่ต้องการซ่อม',
            'detailrepair.required' => 'กรุณาใส่รายละเอียดการพัง',
            'location.required' => 'กรุณาแจ้งสถานที่',
            'date.required' => 'กรุณาแจ้งวันส่งงาน',
            'date.after_or_equal' => 'โปรดตรวจเช็ควันที่ในฟอร์ม',
            'name.regex' => 'โปรดตรวจสอบชื่อของคุณว่ามีอักษรพิเศษหรือไม่'
        ]
        );


        $user = ServiceUser::findorFail($id);
        // Check if the user exists
        if (!$user) {
            return redirect()->route('service-view')->with('error', 'Service not found.');
        }
        // Update the user data
        $data = [
            'name' => $request->name,
            'itemrepair' => $request->itemrepair,
            'detailrepair' => $request->detailrepair,
            'location' => $request->location,
            'date' => $request->date,
        ];
        // Update the user in the database

        $user->update($data);


        return redirect()->route('service-view')->with('success', 'Service updated successfully.');
    }

    public function servicedestroy($id){

        $serviceuser = ServiceUser::find($id);

        if ($serviceuser) {

            $serviceuser->delete();

            return redirect()->route('service-view')->with('success', 'Service delete successfully.');
        }
    return redirect()->route('service-view')->with('error', 'Cant find data to delete.');
    }

    public function toggle(Request $request, $id){
        $serviceUser = ServiceUser::findOrFail($id);
        $serviceUser->status = (int) $request->input('status');
        $saved = $serviceUser->save();
        
        \Log::info('Toggle request มาแล้วจ้า', [
        'id' => $id,
        'status' => $request->input('status')
    ]);

        return response()->json([
            'success' => true,
            'new_status' => $serviceUser->status
        ]);
    }

    public function exportExcel(Request $request){
        
            $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = $request->start_date . ' 00:00:00';
        $endDate = $request->end_date . ' 23:59:59';

        $data = ServiceUser::whereBetween('date', [$request->start_date, $request->end_date])->get();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // หัวตาราง
        $sheet->fromArray([
            ['Name', 'Item Repair', 'Detail Repair', 'Location', 'Date']
        ], null, 'A1');

        // ข้อมูลทีละแถว
        $row = 2;
        foreach ($data as $item) {
            $sheet->setCellValue("A{$row}", $item->name);
            $sheet->setCellValue("B{$row}", $item->itemrepair);
            $sheet->setCellValue("C{$row}", $item->detailrepair);
            $sheet->setCellValue("D{$row}", $item->location);
            $sheet->setCellValue("E{$row}", $item->date);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);

        $filename = 'ServiceUser_'.date('Ymd_His').'.xlsx';

        return response()->streamDownload(function() use ($writer) {
            $writer->save('php://output');
        }, $filename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
}
