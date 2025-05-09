@extends('layout')
@section('title')
Services DMS
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <div>
        <h1 class="text-center text-5xl font-bold text-blue-400 my-10">Services View</h1>
    </div>
    <div>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table">
              <!-- head -->
              <thead>
                <tr class="text-center">
                  <th>ชื่อผู้แจ้งซ่อม</th>
                  <th>สิ่งที่ต้องซ่อม</th>
                  <th>รายละเอียด</th>
                  <th>สถานที่</th>
                  <th>วันกำหนดส่งงาน</th>
                  <th>วันส่งคำขอแจ้งซ่อม</th>
                  <th>แก้ไขข้อมูล</th>
                </tr>
              </thead>
              <tbody>
                <!-- row -->
                @foreach ($serviceusers as $serviceuser)
                <tr class="text-center">
                  <td>{{$serviceuser->name}}</td>
                  <td>{{$serviceuser->itemrepair}}</td>
                  <td>{{$serviceuser->detailrepair}}</td>
                  <td>{{$serviceuser->location}}</td>
                  <td>{{$serviceuser->date}}</td>
                  <td>{{\Carbon\Carbon::parse($serviceuser->created_at)->format('Y-m-d')}}</td>
                  <td><button class="btn btn-info text-white"><a href="{{ route('service-edit', $serviceuser->id) }}">Edit</a></button></td>
                </tr>
                @endforeach  
              </tbody>
            </table>
          </div>
    </div>
</div>
@endsection