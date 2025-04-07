<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">

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

    

    <!-- Bootstrap JS (ต้องมีเพื่อให้ dropdown ทำงาน) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/font.css', 'resources/css/bootstrap.min.css', 'resources/css/font-awesome.min.css', 'resources/css/aos.css', 'resources/css/owl.carousel.min.css', 'resources/css/owl.theme.default.min.css', 'resources/css/templatemo-digital-trend.css'])
    @vite(['resources/js/aos.js', 'resources/js/jquery.min.js', 'resources/js/bootstrap.min.js', 'resources/js/owl.carousel.min.js', 'resources/js/smoothscroll.js', 'resources/js/custom.js'])

    <title>@yield('title')</title>

    <!-- เชื่อมโยง Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500,700" rel="stylesheet">
    <style>
        body{
            font-family: "Noto Sans Thai", sans-serif;
        }
        .nav-custom {
            padding: 25px 0;
        }
        .navdetail-custom{
            margin-right: 15px;
            margin-left: 15px;
        }
        .logo{
            font-size: 25px;
            font-weight: 600;
            color: rgb(0, 162, 255);
        }
        .logo:hover{
            color: rgb(0, 162, 255);
        }
        .toggler-custom{
            border: none;
            color: rgb(0, 162, 255);
        }
        .toggler-custom span{
            border: none;
            color: rgb(0, 162, 255);
        }
        .toggler-custom:active{
            border: none;
        }
        .nav-link{
            font-size: 18px;
            color: rgb(0, 162, 255);
        }
        .nav-link:hover{
            color: rgb(0, 133, 210);
            transform: scale(1.2);
            transition: all 0.3s ease-in-out;
        }
        .nav-link{
            margin-left: 10px 0;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light nav-custom shadow">
        <div class="container-fluid navdetail-custom">
          <a class="navbar-brand logo" href="#">MyBrand</a>
      
          <!-- ปุ่ม toggle สำหรับมือถือ -->
          <button class="navbar-toggler toggler-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fa-solid fa-bars"></i></span>
          </button>
      
          <!-- เมนูที่ซ่อน/แสดง -->
          <div class="collapse navbar-collapse text-center collapse-custom" id="navbarNav">
            <ul class="navbar-nav ms-auto"> <!-- ms-auto ดันไปขวา -->
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



 {{-------------------------- --}}
    <div class="contianer px-5">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>