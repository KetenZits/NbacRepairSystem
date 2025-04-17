@extends('layout')
@section('title')
Services Form
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
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
            <input type="text" class="input w-full" placeholder="เลือกวันกำหนดส่งงาน" name="date"/>
            @error('date')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </fieldset>
        <input type="submit" class="btn btn-info justify-center items-center mt-3 text-white" value="บันทึกข้อมูล"/>
    </form>
</div>
<script type="module" src="https://cdn.jsdelivr.net/npm/@measured/puck@latest/dist/puck.min.js"></script>
@endsection