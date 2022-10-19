<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Quản lí Thanh Hưng Foods</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/viewAdmin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/viewAdmin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('/viewAdmin/vendor/animsition/animsition.min.css')}}"\ rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{ asset('/viewAdmin/css/theme.css')}}" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('./homepage/img/logo4.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Loại Sản phẩm</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{route('admin.listCategory')}}">Danh sách Loại sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.addCategory')}}">Thêm Loại sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Sản phẩm</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{route('admin.listProduct')}}">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.addProduct')}}">Thêm sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Đơn hàng</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{route('admin.listBill')}}">Danh sách hóa đơn</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.historyBill')}}">Lịch sử hóa đơn</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.addBill')}}">Thêm hóa đơn</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        @auth
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('./homepage/img/logo4.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Loại Sản phẩm</a>
                            <ul class="ist-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin.listCategory')}}">Danh sách Loại sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.addCategory')}}">Thêm Loại sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Quản lí sản phẩm</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin.listProduct')}}">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.addProduct')}}">Thêm sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-dot-circle-o"></i>Quản lí đơn hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin.listBill')}}">Danh sách đơn hàng</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.historyBill')}}">Lịch sử hóa đơn</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.addBill')}}">Thêm đơn hàng</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        @else
        <aside class="menu-sidebar d-none d-lg-block">
            
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('./homepage/img/logo4.png')}}" alt="Cool Admin" />
                </a>
            </div>
        </div>
    @endauth
        <!-- END MENU SIDEBAR-->
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    @auth
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('admin.changepass',  Auth::user()->id ) }}">
                                                        <i class="zmdi zmdi-settings"></i>Đổi mật khẩu</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('home.logout') }}">
                                                    <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Cài đặt</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('home.login') }}">
                                                    <i class="zmdi zmdi-power"></i>Đăng Nhập</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- HEADER DESKTOP-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{Session::get('success')}}
                                </div>
                                @endif 
                                @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> {{Session::get('error')}}
                                </div> 
                                @endif 
                                @auth
                                <div class="table-responsive table-responsive-data2">
                                    @yield('content')
                                </div>
                                @else
                                <h1>error page</h1>
                                @endauth
                                <!-- END DATA TABLE -->
            
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        
        </div>
    </div>
    
    <!-- Jquery JS-->
    
    <script src="{{ asset('/viewAdmin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('/viewAdmin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('/viewAdmin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('/viewAdmin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('/viewAdmin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('/viewAdmin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('/viewAdmin/js/main.js')}}"></script>
    <script src="{{ asset('/viewAdmin/js/action.js')}}"></script>
   
</body>

</html>
<!-- end document-->
