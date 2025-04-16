@extends('layout')
@section('title')
Lumos EXE
@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div>
            <h1 class="text-center text-5xl font-bold text-blue-400 my-10">Lumos login</h1>
        </div>
        <div class="flex flex-col justify-center items-center mt-10 h-[60vh]">
            @if ($errors->any())
            <p style="color: red;">{{ $errors->first() }}</p>
        @endif
            <div class="card card-side bg-base-100 shadow-md h-[250px] w-[350px] lg:h-[350px] flex flex-col items-center justify-center px-3">
                <div class="card-title text-3xl font-bold text-blue-400">Login</div>
                <form method="POST" action="{{ route('login.attempt') }}" class="w-full">
                    @csrf
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Username</legend>
                        <input type="text" class="input w-full" placeholder="โปรดใส่ชื่อ" name="name"/>
                    </fieldset>
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Password</legend>
                        <input type="text" class="input w-full" placeholder="โปรดใส่ชื่อ" name="password"/>
                    </fieldset>
                    <div class="flex justify-center h-[75px] items-center">
                        <button type="submit" class="btn btn-info justify-center items-center mt-3 text-white">เข้าสู่ระบบ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection