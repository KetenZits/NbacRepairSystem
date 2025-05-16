<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet"> --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64cb7c5dd2.js" crossorigin="anonymous"></script>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <!-- ปิดการใช้ -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"
        integrity="sha384-eSN5fwXlAgRA5aw9kZl2Rv8zbiLLbRC9Bj5nlyBLlh5rJlP+ql48f5+7N6N6jIeHz" crossorigin="anonymous">
    </script> -->

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- ปิดการใช้งาน -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    

    {{-- <!-- Bootstrap JS (ต้องมีเพื่อให้ dropdown ทำงาน) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js', ])

    <!-- เชื่อมโยง Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500,700" rel="stylesheet">
    <style>
        body{
            font-family: "Noto Sans Thai", sans-serif;
        }
        .service-dropdown {
            display: none;
        }
        .service-drop:hover ~ .service-dropdown{
            display: block;
        }
        .service-dropdown:hover {
          display: block;
        }
    </style>
</head>
<body>
    
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <div class="flex flex-row items-center justify-around w-full py-7 bg-white lg:py-0 bg-none shadow-md">
                <div class="flex text-3xl lg:hidden text-blue-400">Dashboard <i class="fas fa-chart-line ml-2 animate-bounce"></i></div>
                <label for="my-drawer-2" class="drawer-button lg:hidden text-blue-400 flex items-end">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </label>
            </div>
            
            <!-- Page content here -->
            <div class="container mx-auto px-5 my-10">
                @yield('content')
            </div>
          
        </div>
        <div class="drawer-side z-10">
          <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
          <ul class="menu bg-blue-400 min-h-full w-80 p-4 text-white">
            <!-- Sidebar content here -->
            <div>
            <div class="text-3xl">Dashboard <i class="fas fa-chart-line animate-bounce"></i></div>
            <div class="mt-5">
            <li><a href="/" class="text-xl" target="_blank">Home</a></li>
            <li>
              <li class="text-xl service-drop"><a href="#">Service <i class="fa-solid fa-caret-down"></i></a></li>
              <li class="service-dropdown text-xl ml-5">
                <a href="/service-form" class="text-xl" target="_blank">Service Form</a>
                <a href="/service-view" class="text-xl" target="_blank">Service View</a>
              </li>
            </li>
            <li><a href="/about" class="text-xl" target="_blank">About Us</a></li>
            <form method="POST" action="{{ route('logout') }}" class="mt-5">
              @csrf
              <button type="submit" class="btn btn-info text-white text-xl font-normal rounded-full">Log out</button>
            </form>
            </div>
          </div>
          </ul>
        </div>
      </div>



 {{-------------------------- --}}
    
    <footer class="footer sm:footer-horizontal bg-gray-700 text-neutral-content p-10 shadow-2xl">
        <aside class="space-y-10">
          <svg
            width="50"
            height="50"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            fill-rule="evenodd"
            clip-rule="evenodd"
            class="fill-current">
            <path
              d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
          </svg>
          <p className="font-semibold">
            © Nakprasith School Wat Bangchangnua Foundation
            <br />© Nakprasith Business Administration Technological College.
            Main Site at NBAC
            <br />
            Develop & Design Website : <a href="https://www.instagram.com/karasumi_zz/?__pwa=1" class="hover:text-blue-400 transition">Thanapon Khawkumkrong</a>
          </p>
        </aside>
        <nav>
          
        </nav>
      </footer>
      @stack('scripts')
</body>
</html>