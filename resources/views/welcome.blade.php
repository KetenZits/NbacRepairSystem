@extends('layout')

@section('title')
    Welcome
@endsection
@vite('resources/css/app.css')
{{-- aos --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- aos --}}


@section('content')
    <div class="
    h-[90vh] 
    bg-[url(/public/picture/background/background.jpg)] 
    bg-cover
    bg-fixed
    bg-center bg-no-repeat
    bg-blend-overlay
    bg-black/50
    items-center justify-center
    shadow-lg
    text-white
    flex
    flex-col">
        <div class="text-5xl sm:text-6xl lg:text-8xl text-center font-bold" data-aos="fade-up" data-aos-duration="1000">NBACREPAIR</div>
        <div class="text-4xl sm:text-5xl lg:text-7xl text-center m-5 font-semibold" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">SYSTEM</div>
        <div class="text-2xl sm:text-3xl lg:text-4xl text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">ระบบแจ้งซ่อมเครื่องคอมพิวเตอร์</div>
        <a href="/service-form" class="btn btn-info text-white m-10 animate-bounce" data-aos="zoom-in" data-aos-delay="900" data-aos-duration="1000">กรอกฟอร์มแจ้งซ่อมกดเลย!</a>
    </div>
    <div class="container mx-auto px-5 my-20">
        <div class="text-center font-semibold text-gray-700 text-5xl lg:text-7xl" data-aos="fade-down" data-aos-duration="1000">NBACREPAIR SYSTEM</div>
        <li class="text-left font-semibold text-gray-700 lg:text-4xl mt-10" data-aos="fade-right" data-aos-duration="1000">Nbac repair system คืออะไร ?</li>        
        <p class="text-left font-semibold text-gray-500 lg:text-2xl mt-5 ml-13" data-aos="fade-right" data-aos-duration="1000">NBAC Repair System คือระบบที่ถูกพัฒนาขึ้นมาเพื่อใช้ในการแจ้งซ่อมเครื่องคอมพิวเตอร์เมื่อเกิดความเสียหาย หรือเมื่อต้องการตรวจสอบสภาพเครื่องคอมพิวเตอร์แต่ละเครื่องอย่างเป็นระบบ โดยเน้นความสะดวก รวดเร็ว และมีประสิทธิภาพในการจัดการปัญหาด้านอุปกรณ์คอมพิวเตอร์ภายในองค์กร</p>
        <li class="text-left font-semibold text-gray-700 lg:text-4xl mt-10" data-aos="fade-right" data-aos-duration="1000">Nbac repair system เกิดขึ้นได้อย่างไร ?</li>        
        <p class="text-left font-semibold text-gray-500 lg:text-2xl mt-5 ml-13" data-aos="fade-right" data-aos-duration="1000">ระบบ NBAC Repair System เกิดขึ้นได้อย่างไร <br>
            ก่อนที่จะมีการพัฒนาระบบ NBAC Repair System ขึ้นมา องค์กรต้องเผชิญกับปัญหาหลายประการที่เกี่ยวข้องกับการซ่อมแซมและดูแลเครื่องคอมพิวเตอร์ ซึ่งส่งผลกระทบต่อประสิทธิภาพการทำงานโดยรวม และการบริหารจัดการอุปกรณ์ IT ภายในหน่วยงาน <br>
            
            ปัญหาที่พบก่อนมีระบบ <br>
            📝 1. ไม่มีข้อมูลย้อนหลังที่ชัดเจน
            เมื่อเกิดปัญหากับเครื่องคอมพิวเตอร์ มักไม่มีระบบที่จัดเก็บประวัติการซ่อมแซม ทำให้ไม่สามารถวิเคราะห์หรือคาดการณ์ปัญหาซ้ำ ๆ ได้ เช่น เครื่องเดิมเสียซ้ำบ่อยครั้ง แต่ไม่มีข้อมูลมาชี้ชัดว่านี่คือปัญหาเดิมที่ยังไม่ถูกแก้ไขถาวร <br>
            
            📞 2. การประสานงานที่ยุ่งยาก
            การแจ้งซ่อมส่วนใหญ่อาศัยการติดต่อผ่านวาจา โทรศัพท์ หรือแชท ซึ่งอาจทำให้ข้อมูลตกหล่น ไม่ครบถ้วน และเกิดความเข้าใจผิดระหว่างผู้แจ้งกับทีมซ่อม<br>
            
            📋 3. ไม่มีระบบติดตามสถานะงานซ่อม
            ผู้แจ้งไม่สามารถรู้ได้ว่างานซ่อมของตนอยู่ในขั้นตอนไหน ทำให้เกิดความกังวล หรือเสียเวลาในการสอบถามซ้ำ ๆ</p>
        <li class="text-left font-semibold text-gray-700 lg:text-4xl mt-10" data-aos="fade-right" data-aos-duration="1000">Nbac repair system มีประโยชน์อย่างไร ?</li>
        <p class="text-left font-semibold text-gray-500 lg:text-2xl mt-5 ml-13" data-aos="fade-right" data-aos-duration="1000">ประโยชน์ของระบบ NBAC Repair System <br> ระบบ NBAC Repair System ไม่ได้เป็นเพียงแค่ระบบแจ้งซ่อมทั่วไป แต่ยังเป็นเครื่องมือสำคัญที่ช่วยยกระดับการจัดการงานซ่อมแซมอุปกรณ์คอมพิวเตอร์ภายในองค์กรให้มีประสิทธิภาพมากยิ่งขึ้น โดยมีประโยชน์หลัก ๆ ดังนี้:

            <br>✅ 1. ลดการประสานงานซ้ำซ้อนภายในองค์กร
            จากเดิมที่ต้องติดต่อผ่านหลายช่องทาง เช่น โทรศัพท์ ไลน์ หรือเอกสาร เมื่อมีปัญหาเรื่องเครื่องคอมพิวเตอร์ ตอนนี้สามารถแจ้งผ่านระบบเดียว ทำให้ทีมไอทีรับเรื่องได้ทันที และดำเนินการได้อย่างรวดเร็ว
            
            <br>📊 2. ติดตามสถานะงานซ่อมได้ตลอดเวลา
            ผู้แจ้งสามารถตรวจสอบสถานะของการซ่อมแบบเรียลไทม์ได้ เช่น กำลังดำเนินการ ซ่อมเสร็จแล้ว หรือรออะไหล่ ช่วยให้ไม่ต้องสอบถามซ้ำ และลดภาระฝ่ายดูแลระบบ
            
            <br>🖥️ 3. บริหารจัดการข้อมูลเครื่องคอมพิวเตอร์ได้ง่ายขึ้น
            ระบบสามารถเก็บข้อมูลของเครื่องแต่ละเครื่อง เช่น รุ่น, วันที่เริ่มใช้งาน, ประวัติการซ่อม ฯลฯ ทำให้สามารถวางแผนการบำรุงรักษาหรือเปลี่ยนเครื่องได้อย่างเหมาะสม
            
            <br>📁 4. มีข้อมูลย้อนหลังสำหรับการวิเคราะห์
            ระบบจะบันทึกประวัติการแจ้งซ่อมทั้งหมด ทำให้สามารถวิเคราะห์ปัญหาที่พบบ่อย หรือเครื่องใดที่มีปัญหาซ้ำ ๆ เพื่อนำไปสู่การแก้ไขเชิงป้องกันได้</p>
    </div>
    <!-- Import aos JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @endsection
