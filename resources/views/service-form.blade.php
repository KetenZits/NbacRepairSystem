@extends('layout')
@section('title')
Services Form
@endsection
{{-- datepicker --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
{{-- datepicker --}}
<style>
/*datepicker*/
.flatpickr-calendar {
  background-color: #ffffff;
  border-radius: 10px;
  font-family: 'Prompt', sans-serif;
}
.flatpickr-day:hover {
  background-color: #0084ff;
  color: white;
}
/* วันที่ถูกเลือก */
.flatpickr-day.selected {
  background-color: #007BFF;
  color: white;
}
/*datepicker*/
</style>
@section('content')
<div class="container mx-auto px-4 py-8">
  <div>
    <h1 class="text-center text-5xl font-bold text-blue-400 my-10">Services Form</h1>
</div>
    <form method="POST" action="{{ route('service-store') }}">
        @csrf
        <fieldset class="fieldset">
            <legend class="fieldset-legend">ชื่อ</legend>
            <input type="text" class="input w-full" placeholder="โปรดใส่ชื่อ" name="name"/>
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">สิ่งที่ต้องการจะซ่อม</legend>
            <input type="text" class="input w-full" placeholder="ชื่อสิ่งของ" name="itemrepair"/>
            @error('itemrepair')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">รายละเอียดการพัง</legend>
            <textarea class="textarea w-full h-[350px]" placeholder="เช่น จอไม่ติด เปิดไม่ติด" name="detailrepair"></textarea>
            @error('detailrepair')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">สถานที่</legend>
            <input type="text" class="input w-full" placeholder="เช่น ห้องคอม 2" name="location"/>
            @error('location')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">วันกำหนดส่งงาน</legend>
            <input type="text" id="datepicker" placeholder="เลือกวันที่" class="input w-full" name="date"/>
            {{-- <input type="date" class="input w-full" name="date"/> --}}
            @error('date')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </fieldset>
        <input type="submit" class="btn btn-info justify-center items-center mt-3 text-white" value="บันทึกข้อมูล"/>
    </form>
    {{-- ตัวแจ้งเตือนหากบันทึกข้อมูลสำเร็จ --}}
    @if(session('success'))
  <dialog id="success_modal" class="modal">
    <div class="modal-box border-l-4 border-green-500">
      <h3 class="font-bold text-lg text-green-600">ส่งคำขอสำเร็จ!</h3>
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
{{-- datepicker --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
{{-- datepicker --}}
<script>
    //date picker
    flatpickr("#datepicker", {
      dateFormat: "Y-m-d", // รูปแบบวันที่ เช่น 2025-04-18
    });
    //date picker
</script>
@endsection