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
                  <th>ลบข้อมูล</th>
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
                  <td><button class="btn btn-error text-white"><a href="{{ route('service-destroy', $serviceuser->id) }}">Delete</a></button></td>
                </tr>
                @endforeach  
              </tbody>
            </table>
          </div>
    </div>
        {{-- ตัวแจ้งเตือนหากบันทึกข้อมูลสำเร็จ --}}
    @if(session('success'))
  <dialog id="success_modal" class="modal">
    <div class="modal-box border-l-4 border-green-500">
      <h3 class="font-bold text-lg text-green-600">ลบข้อมูลสำเร็จ!</h3>
      <p class="py-2">{{ session('success') }}</p>
      <div class="modal-action">
        <form method="dialog">
          <button class="btn btn-success">ตกลง</button>
        </form>
      </div>
    </div>
  </dialog>
  <script>
    window.addEventListener('DOMContentLoaded', function () {
      const modal = document.getElementById('success_modal');
      if(modal) modal.showModal();
    });
  </script>
@endif
{{-- ตัวแจ้งเตือนหากบันทึกข้อมูลสำเร็จ --}}
</div>
@endsection