@extends('layout')
@section('title')
Services Form Edit
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <form action="{{ route('service-update', $user->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <fieldset class="fieldset">
            <legend class="fieldset-legend">ชื่อ</legend>
            <input type="text" class="input w-full" placeholder="โปรดใส่ชื่อ" name="name" value="{{ old('name', $user->name) }}"/>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">สิ่งที่ต้องการจะซ่อม</legend>
            <input type="text" class="input w-full" placeholder="ชื่อสิ่งของ" name="itemrepair" value="{{ old('itemrepair', $user->itemrepair) }}" />
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">รายละเอียดการพัง</legend>
            <textarea class="textarea w-full h-[350px]" placeholder="เช่น จอไม่ติด เปิดไม่ติด" name="detailrepair">{{ old('detailrepair', $user->detailrepair) }}</textarea>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">สถานที่</legend>
            <input type="text" class="input w-full" placeholder="เช่น ห้องคอม 2" name="location" value="{{ old('location', $user->location) }}"/>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">วันกำหนดส่งงาน</legend>
            <input type="text" class="input w-full" placeholder="โปรดใส่วันกำหนดส่งงาน" name="date" value="{{ old('date', $user->date) }}"/>
        </fieldset>
        <div class="mt-4">
            <button type="submit" class="btn btn-info text-white">อัปเดตข้อมูล</button>
        </div>
    </form>
</div>
@endsection