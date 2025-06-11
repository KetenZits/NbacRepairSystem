@extends('layout')
@section('title')
About Us
@endsection
{{-- aos --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- aos --}}
<script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
        <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .modern-shadow {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
        }
    </style>
@section('content')
<div class="container mx-auto px-4 py-8">
    <div>
        <h1 class="text-center text-5xl font-bold text-blue-400 my-10" data-aos="fade-down" data-aos-duration="1000">About US</h1>
    </div>
    <li class="text-left font-semibold text-gray-700 lg:text-4xl mt-10 list-none underline" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">Hellooo!!</li>
    <p class="text-left font-semibold text-gray-500 lg:text-2xl mt-5 ml-13" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">🚨 อาโหลลลสวัสดีจ้าา พวกเราคือ <span class="text-gray-700 font-bold">Dek Training 2024</span> หรือก็คือ IT Support นั่นเอง โดยปกติแล้วเนี่ยพวกเราก็ทำเกี่ยวกับการซ่อมคอม 
    ลงโปรแกรม ดูแลรักษาคอมพิวเตอร์หรือแก้ไขปัญหาอุปกรณ์อิเล็กทรอนิกส์ต่างๆภายใน วิทยาลัยเทคโนโลยีนาคประสิทธิ์บริหารธุรกิจ ให้พร้อมใช้งานอยู่เสมอ โดยส่วนใหญ่แล้วเราจะทำงานกันหลายคนโดยมีทั้งหมด 5 คนประมานนี้เลยยย</p>
    <div class="flex flex-row flex-wrap justify-center items-center mt-10 gap-10">
      <!-- card -->
      <div class="card md:card-side bg-base-100/95 glass-card modern-shadow hover-lift transition-all duration-500 w-full max-w-4xl h-auto lg:h-80 group animate-float">
        <!-- Image Section -->
        <figure class="w-full lg:w-2/5 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 to-purple-500/30 z-10"></div>
            <img
                src="/picture/cardpicture/Ven.jpg"
                alt="Ven Profile"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            />
        </figure>
        <!-- Content Section -->
        <div class="card-body bg-gradient-to-br from-slate-50 to-blue-50/50 flex-1 p-6 lg:p-8 justify-between">
            <!-- Header Info -->
            <div class="space-y-4">
                <div class="space-y-2">
                    <h2 class="card-title text-2xl lg:text-3xl font-bold gradient-text leading-tight">
                        นายศิริภูมิ เลาหจารุรัตน์
                    </h2>
                    <div class="badge badge-primary badge-lg font-semibold shadow-lg">
                        <i class="fas fa-user mr-2"></i>
                        Public Relations
                    </div>
                </div>
                <div class="space-y-3">
                    <p class="text-slate-700 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-tag text-blue-500"></i>
                        <span class="font-bold text-blue-600">Nickname:</span> 
                        <span class="text-purple-600">Ven</span>
                    </p>
                    <div class="flex items-center gap-2 text-slate-600">
                        <i class="fas fa-envelope text-purple-500 animate-bounce"></i>
                        <span class="font-medium">Get Contact Me Below!! 🚀</span>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="card-actions justify-center lg:justify-end mt-6">
                <div class="flex gap-4">
                    <!-- Instagram Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-pink-500 to-orange-400 hover:from-pink-600 hover:to-orange-500 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleInstagram()">
                        <i class="fab fa-instagram text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Instagram</span>
                    </button>
                    <!-- Facebook Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleFacebook()">
                        <i class="fab fa-facebook text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Facebook</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- card -->
          <div class="card md:card-side bg-base-100/95 glass-card modern-shadow hover-lift transition-all duration-500 w-full max-w-4xl h-auto lg:h-80 group animate-float">
        <!-- Image Section -->
        <figure class="w-full lg:w-2/5 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 to-purple-500/30 z-10"></div>
            <img
                src="/picture/cardpicture/tonmai.jpg"
                alt="Ven Profile"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            />
        </figure>
        <!-- Content Section -->
        <div class="card-body bg-gradient-to-br from-slate-50 to-blue-50/50 flex-1 p-6 lg:p-8 justify-between">
            <!-- Header Info -->
            <div class="space-y-4">
                <div class="space-y-2">
                    <h2 class="card-title text-2xl lg:text-3xl font-bold gradient-text leading-tight">
                        นายธนันธรณ์ ประดับธรรม
                    </h2>
                    <div class="badge badge-primary badge-lg font-semibold shadow-lg">
                        <i class="fas fa-user mr-2"></i>
                        Hardware, Network
                    </div>
                </div>
                <div class="space-y-3">
                    <p class="text-slate-700 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-tag text-blue-500"></i>
                        <span class="font-bold text-blue-600">Nickname:</span> 
                        <span class="text-purple-600">Tonmai</span>
                    </p>
                    <div class="flex items-center gap-2 text-slate-600">
                        <i class="fas fa-envelope text-purple-500 animate-bounce"></i>
                        <span class="font-medium">Get Contact Me Below!! 🚀</span>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="card-actions justify-center lg:justify-end mt-6">
                <div class="flex gap-4">
                    <!-- Instagram Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-pink-500 to-orange-400 hover:from-pink-600 hover:to-orange-500 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleInstagram()">
                        <i class="fab fa-instagram text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Instagram</span>
                    </button>
                    <!-- Facebook Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleFacebook()">
                        <i class="fab fa-facebook text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Facebook</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
          <!-- card -->
          <div class="card md:card-side bg-base-100/95 glass-card modern-shadow hover-lift transition-all duration-500 w-full max-w-4xl h-auto lg:h-80 group animate-float">
        <!-- Image Section -->
        <figure class="w-full lg:w-2/5 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 to-purple-500/30 z-10"></div>
            <img
                src="/picture/cardpicture/first2.jpg"
                alt="Ven Profile"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            />
        </figure>
        <!-- Content Section -->
        <div class="card-body bg-gradient-to-br from-slate-50 to-blue-50/50 flex-1 p-6 lg:p-8 justify-between">
            <!-- Header Info -->
            <div class="space-y-4">
                <div class="space-y-2">
                    <h2 class="card-title text-2xl lg:text-3xl font-bold gradient-text leading-tight">
                        นายธนพนธ์ แก้วคุ้มครอง
                    </h2>
                    <div class="badge badge-primary badge-lg font-semibold shadow-lg">
                        <i class="fas fa-user mr-2"></i>
                        Full Stack Developer
                    </div>
                </div>
                <div class="space-y-3">
                    <p class="text-slate-700 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-tag text-blue-500"></i>
                        <span class="font-bold text-blue-600">Nickname:</span> 
                        <span class="text-purple-600">First</span>
                    </p>
                    <div class="flex items-center gap-2 text-slate-600">
                        <i class="fas fa-envelope text-purple-500 animate-bounce"></i>
                        <span class="font-medium">Get Contact Me Below!! 🚀</span>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="card-actions justify-center lg:justify-end mt-6">
                <div class="flex gap-4">
                    <!-- Instagram Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-pink-500 to-orange-400 hover:from-pink-600 hover:to-orange-500 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleInstagram()">
                        <i class="fab fa-instagram text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Instagram</span>
                    </button>
                    <!-- Facebook Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleFacebook()">
                        <i class="fab fa-facebook text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Facebook</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
          <!-- card -->
          <div class="card md:card-side bg-base-100/95 glass-card modern-shadow hover-lift transition-all duration-500 w-full max-w-4xl h-auto lg:h-80 group animate-float">
        <!-- Image Section -->
        <figure class="w-full lg:w-2/5 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 to-purple-500/30 z-10"></div>
            <img
                src="/picture/cardpicture/ohm2.jpg"
                alt="Ven Profile"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            />
        </figure>
        <!-- Content Section -->
        <div class="card-body bg-gradient-to-br from-slate-50 to-blue-50/50 flex-1 p-6 lg:p-8 justify-between">
            <!-- Header Info -->
            <div class="space-y-4">
                <div class="space-y-2">
                    <h2 class="card-title text-2xl lg:text-3xl font-bold gradient-text leading-tight">
                        นายธีรภัทร์ สวยบำรุง
                    </h2>
                    <div class="badge badge-primary badge-lg font-semibold shadow-lg">
                        <i class="fas fa-user mr-2"></i>
                        Hardware, Network
                    </div>
                </div>
                <div class="space-y-3">
                    <p class="text-slate-700 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-tag text-blue-500"></i>
                        <span class="font-bold text-blue-600">Nickname:</span> 
                        <span class="text-purple-600">Ohm</span>
                    </p>
                    <div class="flex items-center gap-2 text-slate-600">
                        <i class="fas fa-envelope text-purple-500 animate-bounce"></i>
                        <span class="font-medium">Get Contact Me Below!! 🚀</span>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="card-actions justify-center lg:justify-end mt-6">
                <div class="flex gap-4">
                    <!-- Instagram Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-pink-500 to-orange-400 hover:from-pink-600 hover:to-orange-500 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleInstagram()">
                        <i class="fab fa-instagram text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Instagram</span>
                    </button>
                    <!-- Facebook Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleFacebook()">
                        <i class="fab fa-facebook text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Facebook</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
          <!-- card -->
          <div class="card md:card-side bg-base-100/95 glass-card modern-shadow hover-lift transition-all duration-500 w-full max-w-4xl h-auto lg:h-80 group animate-float">
        <!-- Image Section -->
        <figure class="w-full lg:w-2/5 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 to-purple-500/30 z-10"></div>
            <img
                src="/picture/cardpicture/atit.jpg"
                alt="Ven Profile"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            />
        </figure>
        <!-- Content Section -->
        <div class="card-body bg-gradient-to-br from-slate-50 to-blue-50/50 flex-1 p-6 lg:p-8 justify-between">
            <!-- Header Info -->
            <div class="space-y-4">
                <div class="space-y-2">
                    <h2 class="card-title text-2xl lg:text-3xl font-bold gradient-text leading-tight">
                        นายอาทิตย์ ปืนกันภัย
                    </h2>
                    <div class="badge badge-primary badge-lg font-semibold shadow-lg">
                        <i class="fas fa-user mr-2"></i>
                        Hardware
                    </div>
                </div>
                <div class="space-y-3">
                    <p class="text-slate-700 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-tag text-blue-500"></i>
                        <span class="font-bold text-blue-600">Nickname:</span> 
                        <span class="text-purple-600">Atit</span>
                    </p>
                    <div class="flex items-center gap-2 text-slate-600">
                        <i class="fas fa-envelope text-purple-500 animate-bounce"></i>
                        <span class="font-medium">Get Contact Me Below!! 🚀</span>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="card-actions justify-center lg:justify-end mt-6">
                <div class="flex gap-4">
                    <!-- Instagram Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-pink-500 to-orange-400 hover:from-pink-600 hover:to-orange-500 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleInstagram()">
                        <i class="fab fa-instagram text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Instagram</span>
                    </button>
                    <!-- Facebook Button -->
                    <button class="btn btn-lg bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 border-0 text-white shadow-xl hover:shadow-2xl hover:scale-110 transition-all duration-300 group" onclick="handleFacebook()">
                        <i class="fab fa-facebook text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                        <span class="hidden sm:inline font-bold">Facebook</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
          <!-- card -->
    </div>
</div>
    <!-- Import aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection