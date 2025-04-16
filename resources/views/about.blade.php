@extends('layout')
@section('title')
About Us
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <div>
        <h1 class="text-center text-5xl font-bold text-blue-400 my-10">About US</h1>
    </div>
    <li class="text-left font-semibold text-gray-700 lg:text-4xl mt-10 list-none underline">Hellooo!!</li>
    <p class="text-left font-semibold text-gray-500 lg:text-2xl mt-5 ml-13">🚨 อาโหลลลสวัสดีจ้าา พวกเราคือ <span class="text-gray-700 font-bold">Dek Training 2024</span> หรือก็คือ IT Support นั่นเอง โดยปกติแล้วเนี่ยพวกเราก็ทำเกี่ยวกับการซ่อมคอม 
    ลงโปรแกรม ดูแลรักษาคอมพิวเตอร์หรือแก้ไขปัญหาอุปกรณ์อิเล็กทรอนิกส์ต่างๆภายใน วิทยาลัยเทคโนโลยีนาคประสิทธิ์บริหารธุรกิจ ให้พร้อมใช้งานอยู่เสมอ โดยส่วนใหญ่แล้วเราจะทำงานกันหลายคนโดยมีทั้งหมด 5 คนประมานนี้เลยยย</p>
    <div class="flex flex-row flex-wrap justify-center items-center mt-10 gap-10">

        <div class="card card-side bg-base-100 shadow-md h-[250px] w-[650px] lg:h-[350px]">
            <figure>
              <img
                src="/picture/cardpicture/Ven.jpg"
                alt="Ven" />
            </figure>
            <div class="card-body">
              <h2 class="card-title font-bold">นายศิริภูมิ เลาหจารุรัตน์</h2>
              <p class="text-gray-700 font-semibold">Nickname : Ven <br> Get Contact Me Belowww!! </p>
              <div class="card-actions justify-end">
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-instagram text-2xl text-white"></i></button>
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-facebook text-2xl text-white"></i></button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-md h-[250px] w-[650px] lg:h-[350px]">
            <figure>
              <img
                src="/picture/cardpicture/tonmai.jpg"
                alt="Mai" />
            </figure>
            <div class="card-body">
              <h2 class="card-title font-bold">นายธนนันธรณ์ ประดับธรรม</h2>
              <p class="text-gray-700 font-semibold">Nickname : Tonmai <br> Get Contact Me Belowww!! </p>
              <div class="card-actions justify-end">
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-instagram text-2xl text-white"></i></button>
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-facebook text-2xl text-white"></i></button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-md h-[250px] w-[650px] lg:h-[350px]">
            <figure>
              <img
                src="/picture/cardpicture/first.jpg"
                alt="First" />
            </figure>
            <div class="card-body">
              <h2 class="card-title font-bold">นายธนพนธ์ แก้วคุ้มครอง</h2>
              <p class="text-gray-700 font-semibold">Nickname : First <br> Get Contact Me Belowww!! </p>
              <div class="card-actions justify-end">
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-instagram text-2xl text-white"></i></button>
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-facebook text-2xl text-white"></i></button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-md h-[250px] w-[650px] lg:h-[350px]">
            <figure>
              <img
                src="/picture/cardpicture/ohm.jpg"
                alt="Ohm" />
            </figure>
            <div class="card-body">
              <h2 class="card-title font-bold">นายธีรภัทร์ สวยบำรุง</h2>
              <p class="text-gray-700 font-semibold">Nickname : Ohm <br> Get Contact Me Belowww!! </p>
              <div class="card-actions justify-end">
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-instagram text-2xl text-white"></i></button>
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-facebook text-2xl text-white"></i></button>
              </div>
            </div>
          </div>
          <div class="card card-side bg-base-100 shadow-md h-[250px] w-[650px] lg:h-[350px]">
            <figure>
              <img
                src="/picture/cardpicture/atit.jpg"
                alt="Atit" />
            </figure>
            <div class="card-body">
              <h2 class="card-title font-bold">นายอาทิตย์ ปืนกันภัย</h2>
              <p class="text-gray-700 font-semibold">Nickname : Atit <br> Get Contact Me Belowww!! </p>
              <div class="card-actions justify-end">
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-instagram text-2xl text-white"></i></button>
                <button class="btn btn-info btn-square px-5 py-4"><i class="fa-brands fa-facebook text-2xl text-white"></i></button>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection