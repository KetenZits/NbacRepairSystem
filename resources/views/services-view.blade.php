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
                <tr>
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
                <!-- row 1 -->
                <tr>
                  <th>1</th>
                  <td>Cy Ganderton</td>
                  <td>Quality</td>
                  <td>Blue</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</div>
@endsection