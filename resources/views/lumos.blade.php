@extends('layout')
@section('title')
Magic city Gateway
@endsection
{{-- aos --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- aos --}}
@section('content')
    <div class="container mx-auto px-4 py-8 min-h-screen flex flex-col justify-center items-center">
    <h1 class="text-center text-5xl font-bold text-blue-400 mb-8 animate-bounce" data-aos="fade-down">
        Hogwarts Gate Login
    </h1>

    @if ($errors->any())
        <p class="text-red-500 font-medium animate-pulse mb-4">{{ $errors->first() }}</p>
    @endif

    <div class="card h-[350px] bg-white/80 backdrop-blur-lg shadow-xl w-[350px] lg:w-[400px] rounded-2xl border border-blue-200 transition-all duration-300 hover:shadow-2xl">
        <div class="card-body items-center">
            <h2 class="card-title text-3xl font-bold text-blue-500 mb-4">Auth Login</h2>

            <form method="POST" action="{{ route('login.attempt') }}" class="w-full space-y-4">
                @csrf

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text text-blue-400 font-medium">Username</span>
                    </div>
                    <input type="text" name="name" placeholder="กรอกชื่อผู้ใช้" class="input input-bordered w-full focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200 my-2" />
                </label>

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text text-blue-400 font-medium my-2">Password</span>
                    </div>
                    <input type="password" name="password" placeholder="กรอกรหัสผ่าน" class="input input-bordered w-full focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200" />
                </label>

                <div class="flex justify-center pt-4">
                    <button type="submit" class="btn btn-info text-white w-full transition duration-200 hover:scale-105 hover:shadow-md">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- Import aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection