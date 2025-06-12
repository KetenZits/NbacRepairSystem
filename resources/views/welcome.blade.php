@extends('layout')

@section('title')
    Welcome
@endsection
@vite('resources/css/app.css')
{{-- AOS Animation --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@section('content')
    <!-- Hero Section -->
    <div class="hero min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url(/public/picture/background/background.jpg)] bg-cover bg-center bg-no-repeat opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-white/20 to-transparent"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-400/20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-32 right-16 w-32 h-32 bg-cyan-400/20 rounded-full blur-3xl animate-bounce"></div>
        
        <div class="hero-content text-center text-white relative z-10">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-4 bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent" 
                    data-aos="fade-up" data-aos-duration="1000">
                    NBACREPAIR
                </h1>
                <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-6 text-blue-100" 
                    data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    SYSTEM
                </h2>
                <p class="text-xl md:text-2xl lg:text-3xl mb-10 text-blue-200 font-medium" 
                   data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    ระบบแจ้งซ่อมเครื่องคอมพิวเตอร์
                </p>
                <a href="/service-form" 
                   class="btn btn-primary btn-lg text-white px-8 py-4 text-xl font-semibold shadow-2xl hover:shadow-blue-500/25 transform hover:scale-105 transition-all duration-300" 
                   data-aos="zoom-in" data-aos-delay="900" data-aos-duration="1000">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    กรอกฟอร์มแจ้งซ่อมกดเลย!
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="bg-gradient-to-b from-slate-50 to-white">
        <div class="container mx-auto px-6 py-20">
            <!-- Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-slate-800 mb-4" 
                    data-aos="fade-down" data-aos-duration="1000">
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                        NBACREPAIR SYSTEM
                    </span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 mx-auto rounded-full"></div>
            </div>

            <!-- What is NBAC Section -->
            <div class="card bg-white shadow-xl mb-12 border-l-4 border-blue-500" data-aos="fade-right" data-aos-duration="1000">
                <div class="card-body p-8">
                    <h3 class="card-title text-2xl md:text-3xl lg:text-4xl font-bold text-slate-700 mb-6 flex items-center">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-4"></div>
                        Nbac repair system คืออะไร ?
                    </h3>
                    <div class="prose prose-lg text-slate-600 leading-relaxed">
                        <p class="text-lg md:text-xl lg:text-2xl font-medium">
                            NBAC Repair System คือระบบที่ถูกพัฒนาขึ้นมาเพื่อใช้ในการแจ้งซ่อมเครื่องคอมพิวเตอร์เมื่อเกิดความเสียหาย หรือเมื่อต้องการตรวจสอบสภาพเครื่องคอมพิวเตอร์แต่ละเครื่องอย่างเป็นระบบ โดยเน้นความสะดวก รวดเร็ว และมีประสิทธิภาพในการจัดการปัญหาด้านอุปกรณ์คอมพิวเตอร์ภายในองค์กร
                        </p>
                    </div>
                </div>
            </div>

            <!-- How it Started Section -->
            <div class="card bg-white shadow-xl mb-12 border-l-4 border-cyan-500" data-aos="fade-right" data-aos-duration="1000">
                <div class="card-body p-8">
                    <h3 class="card-title text-2xl md:text-3xl lg:text-4xl font-bold text-slate-700 mb-6 flex items-center">
                        <div class="w-3 h-3 bg-cyan-500 rounded-full mr-4"></div>
                        Nbac repair system เกิดขึ้นได้อย่างไร ?
                    </h3>
                    <div class="prose prose-lg text-slate-600 leading-relaxed space-y-6">
                        <p class="text-lg md:text-xl lg:text-2xl font-medium">
                            ระบบ NBAC Repair System เกิดขึ้นได้อย่างไร
                        </p>
                        <p class="text-base md:text-lg">
                            ก่อนที่จะมีการพัฒนาระบบ NBAC Repair System ขึ้นมา องค์กรต้องเผชิญกับปัญหาหลายประการที่เกี่ยวข้องกับการซ่อมแซมและดูแลเครื่องคอมพิวเตอร์ ซึ่งส่งผลกระทบต่อประสิทธิภาพการทำงานโดยรวม และการบริหารจัดการอุปกรณ์ IT ภายในหน่วยงาน
                        </p>
                        
                        <div class="bg-gradient-to-r from-red-50 to-orange-50 p-6 rounded-xl border-l-4 border-red-400">
                            <h4 class="text-xl font-bold text-red-700 mb-4">ปัญหาที่พบก่อนมีระบบ</h4>
                            
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <span class="text-2xl">📝</span>
                                    <div>
                                        <h5 class="font-bold text-slate-700">1. ไม่มีข้อมูลย้อนหลังที่ชัดเจน</h5>
                                        <p class="text-slate-600">เมื่อเกิดปัญหากับเครื่องคอมพิวเตอร์ มักไม่มีระบบที่จัดเก็บประวัติการซ่อมแซม ทำให้ไม่สามารถวิเคราะห์หรือคาดการณ์ปัญหาซ้ำ ๆ ได้ เช่น เครื่องเดิมเสียซ้ำบ่อยครั้ง แต่ไม่มีข้อมูลมาชี้ชัดว่านี่คือปัญหาเดิมที่ยังไม่ถูกแก้ไขถาวร</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <span class="text-2xl">📞</span>
                                    <div>
                                        <h5 class="font-bold text-slate-700">2. การประสานงานที่ยุ่งยาก</h5>
                                        <p class="text-slate-600">การแจ้งซ่อมส่วนใหญ่อาศัยการติดต่อผ่านวาจา โทรศัพท์ หรือแชท ซึ่งอาจทำให้ข้อมูลตกหล่น ไม่ครบถ้วน และเกิดความเข้าใจผิดระหว่างผู้แจ้งกับทีมซ่อม</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-3">
                                    <span class="text-2xl">📋</span>
                                    <div>
                                        <h5 class="font-bold text-slate-700">3. ไม่มีระบบติดตามสถานะงานซ่อม</h5>
                                        <p class="text-slate-600">ผู้แจ้งไม่สามารถรู้ได้ว่างานซ่อมของตนอยู่ในขั้นตอนไหน ทำให้เกิดความกังวล หรือเสียเวลาในการสอบถามซ้ำ ๆ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="card bg-white shadow-xl border-l-4 border-green-500" data-aos="fade-right" data-aos-duration="1000">
                <div class="card-body p-8">
                    <h3 class="card-title text-2xl md:text-3xl lg:text-4xl font-bold text-slate-700 mb-6 flex items-center">
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-4"></div>
                        Nbac repair system มีประโยชน์อย่างไร ?
                    </h3>
                    <div class="prose prose-lg text-slate-600 leading-relaxed space-y-6">
                        <p class="text-lg md:text-xl lg:text-2xl font-medium">
                            ประโยชน์ของระบบ NBAC Repair System
                        </p>
                        <p class="text-base md:text-lg">
                            ระบบ NBAC Repair System ไม่ได้เป็นเพียงแค่ระบบแจ้งซ่อมทั่วไป แต่ยังเป็นเครื่องมือสำคัญที่ช่วยยกระดับการจัดการงานซ่อมแซมอุปกรณ์คอมพิวเตอร์ภายในองค์กรให้มีประสิทธิภาพมากยิ่งขึ้น โดยมีประโยชน์หลัก ๆ ดังนี้:
                        </p>
                        
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 p-6 rounded-xl border-l-4 border-green-400">
                            <div class="grid gap-6">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">✅</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-700 text-lg mb-2">1. ลดการประสานงานซ้ำซ้อนภายในองค์กร</h5>
                                        <p class="text-slate-600">จากเดิมที่ต้องติดต่อผ่านหลายช่องทาง เช่น โทรศัพท์ ไลน์ หรือเอกสาร เมื่อมีปัญหาเรื่องเครื่องคอมพิวเตอร์ ตอนนี้สามารถแจ้งผ่านระบบเดียว ทำให้ทีมไอทีรับเรื่องได้ทันที และดำเนินการได้อย่างรวดเร็ว</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">📊</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-700 text-lg mb-2">2. ติดตามสถานะงานซ่อมได้ตลอดเวลา</h5>
                                        <p class="text-slate-600">ผู้แจ้งสามารถตรวจสอบสถานะของการซ่อมแบบเรียลไทม์ได้ เช่น กำลังดำเนินการ ซ่อมเสร็จแล้ว หรือรออะไหล่ ช่วยให้ไม่ต้องสอบถามซ้ำ และลดภาระฝ่ายดูแลระบบ</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">🖥️</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-700 text-lg mb-2">3. บริหารจัดการข้อมูลเครื่องคอมพิวเตอร์ได้ง่ายขึ้น</h5>
                                        <p class="text-slate-600">ระบบสามารถเก็บข้อมูลของเครื่องแต่ละเครื่อง เช่น รุ่น, วันที่เริ่มใช้งาน, ประวัติการซ่อม ฯลฯ ทำให้สามารถวางแผนการบำรุงรักษาหรือเปลี่ยนเครื่องได้อย่างเหมาะสม</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">📁</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-700 text-lg mb-2">4. มีข้อมูลย้อนหลังสำหรับการวิเคราะห์</h5>
                                        <p class="text-slate-600">ระบบจะบันทึกประวัติการแจ้งซ่อมทั้งหมด ทำให้สามารถวิเคราะห์ปัญหาที่พบบ่อย หรือเครื่องใดที่มีปัญหาซ้ำ ๆ เพื่อนำไปสู่การแก้ไขเชิงป้องกันได้</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Wave -->
    <div class="bg-gradient-to-r from-blue-600 to-cyan-500 h-2"></div>

    <!-- Import AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
@endsection