<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function showServiceForm()
    {
        return view('service-form');
    }
    public function showServiceView()
    {
        return view('services-view');
    }
    public function showServiceEdit()
    {
        return view('service-edit');
    }
    public function servicestore(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
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
        // You can use a model to save the data to the database

        return redirect()->route('service-form')->with('success', 'Service created successfully.');
    }
    public function serviceupdate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string',
            'service_price' => 'required|numeric',
            // Add more validation rules as needed
        ]);

        // Update the service data in the database
        // You can use a model to update the data in the database

        return redirect()->route('service-view')->with('success', 'Service updated successfully.');
    }
}
