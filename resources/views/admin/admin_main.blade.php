<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>




    <!--  Bootsrtap css  -->
    <link rel="stylesheet"
        href={{ asset('admin/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css') }} />

    <link rel="stylesheet" href={{ asset('admin/css/owl.carousel.min.css') }} />

    <link rel="stylesheet" href={{ asset('admin/css/owl.theme.default.min.css') }} />

    <link rel="stylesheet" href={{ asset('admin/css/style.css') }} />
</head>

<body class="mainColor">

    <div class="container-fluid m-0 p-0 " >

        <nav class="navbar  navbar-expand-lg">
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-5 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @yield('dashbordNav')" aria-current="page" href="{{ route('admin.dashboard.home') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('consuNav')" aria-current="page" href="{{ route('index.Consulting') }}">الاستشارات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('bagsNav')" aria-current="page" href="{{ route('index.Bag') }}">الحقائب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('coursesNav')" aria-current="page" href="{{ route('index.Courses') }}">الدورات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('success_partNav')" aria-current="page" href="{{ route('index.Success_partners') }}">شركاء النجاح</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('messageNav')" aria-current="page" href="{{ route('index.Message') }}">الرسائل</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('adminsNav')" aria-current="page" href="#">المدراء</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('front/imgs/icons8-user-48.png') }}" class="rounded-circle" height="25"
                            alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Update profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li> <a class="dropdown-item" href="{{ route('admin.dashboard.logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('admin.dashboard.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="">
            <div class=" bg-black  " style=" height: 1px;">
            </div>
        </div>

        @yield('content')



    </div>

    


    <!--  Bootsrtap js  -->
    <script src={{ asset('admin/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js') }}></script>

    <script src={{ asset('admin/js/code.jquery.com_jquery-3.7.0.js') }}></script>

    <script src={{ asset('admin/js/owl.carousel.min.js') }}></script>

    <!--  js  -->
    <script src={{ asset('admin/js/main.js') }}></script>
</body>

</html>
