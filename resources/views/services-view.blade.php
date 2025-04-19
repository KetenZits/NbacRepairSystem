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
        <div class="overflow-x-auto">
            <table class="table">
              <!-- head -->
              <thead>
                <tr class="text-center">
                  <th>No.</th>
                  <th>ชื่อผู้แจ้งซ่อม</th>
                  <th>สิ่งที่ต้องซ่อม</th>
                  <th>รายละเอียด</th>
                  <th>สถานที่</th>
                  <th>วันกำหนดส่งงาน</th>
                  <th>วันส่งคำขอแจ้งซ่อม</th>
                </tr>
              </thead>
              <tbody>
                <!-- row -->
                @foreach ($serviceusers as $serviceuser)
                <tr class="text-center">
                  <th>{{$serviceuser->id}}</th>
                  <td>{{$serviceuser->name}}</td>
                  <td>{{$serviceuser->itemrepair}}</td>
                  <td>{{$serviceuser->detailrepair}}</td>
                  <td>{{$serviceuser->location}}</td>
                  <td>{{$serviceuser->date}}</td>
                  <td>{{\Carbon\Carbon::parse($serviceuser->created_at)->format('Y-m-d')}}</td>
                </tr>
                @endforeach  
              </tbody>
            </table>
          </div>
    </div>
</div>
@endsection