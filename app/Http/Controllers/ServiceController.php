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
            'name' => 'required|string',
            'itemrepair' => 'required',
            'detailrepair' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            // Add more validation rules as needed
        ],
        [
            'name.required' => 'กรุณาใส่ชื่อผู้แจ้งซ่อม',
            'itemrepair.required' => 'กรุณาใส่ชื่อสิ่งที่ต้องการซ่อม',
            'detailrepair.required' => 'กรุณาใส่รายละเอียดการพัง',
            'location.required' => 'กรุณาแจ้งสถานที่',
            'date.required' => 'กรุณาแจ้งวันส่งงาน',
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
            'name' => 'required|string',
            'itemrepair' => 'required',
            'detailrepair' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            // Add more validation rules as needed
        ],
        [
            'name.required' => 'กรุณาใส่ชื่อผู้แจ้งซ่อม',
            'itemrepair.required' => 'กรุณาใส่ชื่อสิ่งที่ต้องการซ่อม',
            'detailrepair.required' => 'กรุณาใส่รายละเอียดการพัง',
            'location.required' => 'กรุณาแจ้งสถานที่',
            'date.required' => 'กรุณาแจ้งวันส่งงาน',
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

}
