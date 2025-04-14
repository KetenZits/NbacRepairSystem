@extends('layout')
@section('title')
Services Form
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <form action="POST">
        @csrf
        <fieldset class="fieldset">
            <legend class="fieldset-legend">ชื่อ</legend>
            <input type="text" class="input w-full" placeholder="โปรดใส่ชื่อ" name="name"/>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">สิ่งที่ต้องการจะซ่อม</legend>
            <input type="text" class="input w-full" placeholder="ชื่อสิ่งของ" name="itemrepair"/>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">รายละเอียดการพัง</legend>
            <textarea class="textarea w-full h-[350px]" placeholder="เช่น จอไม่ติด เปิดไม่ติด" name="detailrepair"></textarea>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">สถานที่</legend>
            <input type="text" class="input w-full" placeholder="เช่น ห้องคอม 2" name="location"/>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">วันกำหนดส่งงาน</legend>
            <input type="text" class="input w-full" placeholder="โปรดใส่วันกำหนดส่งงาน" name="date"/>
        </fieldset>
    </form>
</div>
@endsection