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
        .headnav {
            background-color: #ffffff;
            color: #0080ff;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 75px;
        }
        .headnav .header-logo h3 {
            font-size: 30px;
            color: #0080ff;
            margin: 0;
            margin-bottom: 4px;
        }
        .headnav ul{
            display: flex;
            list-style: none;
            align-items: center;
            gap: 20px;
            margin-top: 12px;
        }
        .headnav ul li a{
            text-decoration: none;
            color: #0080ff;
            font-size: 20px;
        }
    </style>
</head>
<body>
    
    <div class="headnav shadow-sm">
        <div class="header-logo">
            <h3>NBACREPAIR</h3>
        </div>

        <div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>



 {{-------------------------- --}}
    <div class="contianer px-5">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>