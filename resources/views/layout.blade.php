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

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/font.css', 'resources/css/bootstrap.min.css', 'resources/css/font-awesome.min.css', 'resources/css/aos.css', 'resources/css/owl.carousel.min.css', 'resources/css/owl.theme.default.min.css', 'resources/css/templatemo-digital-trend.css'])
    @vite(['resources/js/aos.js', 'resources/js/jquery.min.js', 'resources/js/bootstrap.min.js', 'resources/js/owl.carousel.min.js', 'resources/js/smoothscroll.js', 'resources/js/custom.js'])

    <title>@yield('title')</title>

    <!-- เชื่อมโยง Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500,700" rel="stylesheet">
    <style>
        body{
            font-family: "Noto Sans Thai", sans-serif;
        }
        .hover-lift {
            transition: all 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-2px);
        }
        .gradient-border {
            background: linear-gradient(90deg, #6b7280, #9ca3af, #6b7280);
            height: 1px;
        }
    </style>
</head>
<body>
    
    <div class="flex justify-around items-center bg-none text-blue-400 shadow-md h-25">
        <div>
            <div class="text-3xl lg:text-4xl font-bold cursor-pointer">NBACREPAIR</div>
        </div>
        <div>
            <ul class="hidden lg:flex space-x-6 text-lg font-semibold">
                <li><a href="/" class="hover:text-blue-500 transition">Home</a></li>
                <li><a href="/service-form" class="hover:text-blue-500 transition">Services</a></li>
                <li><a href="/about" class="hover:text-blue-500 transition">About Us</a></li>
                @auth
                    <li><a href="/dashboard" class="hover:text-blue-500 transition">dashboard</a></li>
                @endauth
            </ul>
            <div class="drawer lg:hidden">
                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                  <!-- Page content here -->
                  <label for="my-drawer"><i class="fa-solid fa-bars text-2xl"></i></label>
                </div>
                <div class="drawer-side z-50">
                  <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                  <ul class="menu bg-base-200 text-2xl min-h-full w-80 p-4">
                    <!-- Sidebar content here -->
                    <li><a href="/">Home</a></li>
                    <li><a href="/service-form">Services</a></li>
                    <li><a href="/about">About Us</a></li>
                    @auth
                        <li><a href="/dashboard">Dashboard</a></li>
                    @endauth
                  </ul>
                </div>
              </div>
        </div>
    </div>



 {{-------------------------- --}}
    <div class="">
        @yield('content')
    </div>
    <footer class="bg-gray-800 text-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- Logo Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="bg-gray-700 p-3 rounded-lg">
                            <i class="fas fa-tools text-2xl text-blue-400"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold">ระบบแจ้งซ่อม</h3>
                            <p class="text-gray-400 text-sm">Repair Request System</p>
                        </div>
                    </div>
                </div>

                <!-- Organization Info -->
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-white">สถาบันการศึกษา</h4>
                    <div class="text-sm text-gray-300 space-y-2">
                        <p class="flex items-center">
                            <i class="fas fa-graduation-cap mr-2 text-blue-400"></i>
                            โรงเรียนนาคประสิทธิ์ วัดบางช้างเหนือ
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-university mr-2 text-blue-400"></i>
                            วิทยาลัยเทคโนโลยีบริหารธุรกิจนาคประสิทธิ์
                        </p>
                    </div>
                </div>

                <!-- Contact & Developer -->
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-white">ติดต่อเรา</h4>
                    <div class="text-sm text-gray-300 space-y-2">
                        <p class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-blue-400"></i>
                            support@nbac.ac.th
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone mr-2 text-blue-400"></i>
                            02-xxx-xxxx
                        </p>
                    </div>
                    
                    <!-- Developer Credit -->
                    <div class="mt-6 pt-4 border-t border-gray-700">
                        <p class="text-xs text-gray-400 mb-1">Develop & Design By :</p>
                        <a href="https://www.instagram.com/karasumi_zz/?__pwa=1" 
                           class="inline-flex items-center space-x-2 text-sm text-gray-300 hover:text-white hover-lift group">
                            <i class="fab fa-instagram text-pink-400 group-hover:text-pink-300"></i>
                            <span>Thanapon Khawkumkrong</span>
                            <i class="fas fa-external-link-alt text-xs opacity-60 group-hover:opacity-100"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="mt-8 pt-6 border-t border-gray-700">
                <div class="flex flex-col md:flex-row justify-center items-center text-sm text-gray-400">
                    <p>© 2024 Nakprasith School Wat Bangchangnua Foundation & NBAC</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>