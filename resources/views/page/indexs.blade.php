<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh Hưng Foods</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('./homepage/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ route('home') }}"><img src="{{ asset('./homepage/img/logo4.png')}}" alt=""></a>
        </div>
        @auth
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{ route('home.mycart') }}"><i class="fa fa-cart-plus"></i> <span>0</span></a></li>
                <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}"><i class="fa fa-shopping-bag"></i> <span>{{$amount}}</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng tiền: <span>{{$total}} vnĐ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="{{ route('home.logout') }}"><i class="fa fa-user"></i> Đăng xuất</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="">Trang chủ</a></li>
                <li><a href="{{ route('home') }}">Sản Phẩm</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{ route('home') }}">Trái Cây</a></li>
                        <li><a href="./blog.html">Thịt Tươi</a></li>
                        <li><a href="./blog.html">Cá Tươi</a></li>
                        <li><a href="./blog.html">Đông Lạnh</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}">Suất ăn công nghiệp</a></li>
                <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}">Giỏ</a></li>
            </ul>
        </nav>
        @else
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{ route('home.register') }}"><i class="fa-cart-plus"></i> <span>0</span></a></li>
                <li><a href="{{ route('home.register') }}"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng tiền: <span>0 vnĐ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="{{ route('home.login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
        </div>
        
        
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="{{ route('home') }}">Sản Phẩm</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{ route('home') }}">Trái Cây</a></li>
                        <li><a href="{{ route('home.thit') }}">Thịt Tươi</a></li>
                        <li><a href="{{ route('home.haisan') }}">Hải Sản</a></li>
                        <li><a href="{{ route('home.donglanh') }}">Đông Lạnh</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home.register') }}">Suất ăn công nghiệp</a></li>
                <li><a href="{{ route('home.register') }}">Giỏ</a></li>
            </ul>
        </nav>
        @endauth
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="{{ route('home') }}"><i class="fa fa-facebook"></i></a>
            <a href="{{ route('home') }}"><i class="fa fa-twitter"></i></a>
            <a href="{{ route('home') }}"><i class="fa fa-linkedin"></i></a>
            <a href="{{ route('home') }}"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hungboss091289@gmail.com</li>
                <li>Cảm ơn quý khách đã mua hàng của chúng tôi</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> 0931 452 452 | 0941 681 681 | 74B-Thu Bồn-Bình An-Nam Phước-Duy Xuyên-Quảng Nam</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="{{ route('home') }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ route('home') }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ route('home') }}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{ route('home') }}"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            @auth
                            <div class="header__top__right__auth">
                                <a href="{{ route('home.logout') }}"> Đăng xuất</a>
                            </div>

                            @else  
                            <div class="header__top__right__auth">
                                <a href="{{ route('home.login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
                            </div>
                            @endauth
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('./homepage/img/logo4.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Trang chủ</a></li>
                            <li><a href="{{ route('home') }}">Sản phẩm</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('home') }}">Trái Cây</a></li>
                                    <li><a href="{{ route('home.thit') }}">Thịt</a></li>
                                    <li><a href="{{ route('home.haisan') }}">Hải sản</a></li>
                                    <li><a href="{{ route('home.donglanh') }}">Đông Lạnh</a></li>
                                </ul>
                            </li>
                            @auth
                            <li><a href="{{ route('home.blogs') }}">Suất ăn công nghiệp</a></li>
                            <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}">Giỏ</a></li>
                            @else
                            <li><a href="{{ route('home.register') }}">Suất ăn công nghiệp</a></li>
                            <li><a href="{{ route('home.register') }}">Giỏ</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    @auth
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ route('home.mycart') }}"><i class="fa fa-cart-plus"></i> <span>0</span></a></li>
                            <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}"><i class="fa fa-shopping-bag"></i> <span>{{$amount}}</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng tiền: <span>{{$total}} vnĐ</span></div>
                    </div>
                    @else
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ route('home.register') }}"><i class="fa fa-cart-plus"></i> <span>0</span></a></li>
                            <li><a href="{{ route('home.register') }}"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng tiền: <span>0 vnĐ</span></div>
                    </div>
                    @endauth
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="">
                                <div class="hero__search__categories">
                                    Tìm theo tên sản phẩm
                                </div>
                                <input type="text" name="search" placeholder="Bạn cần mua gì?">
                                <button type="submit" class="site-btn">Tìm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0931 452 452</h5>
                                <h5>0941 681 681</h5>
                                <span>Hổ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('./homepage/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>Quang Hưng Foods</span>
                            <h2>Thực phẩm sạch <br />100% tự nhiên</h2>
                            <p>Chất lượng đảm bảo nhận và giao hàng nhanh chóng chất lượng.</p>
                            <a href="{{ route('home') }}" class="primary-btn">Đặt hàng ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('./homepage/img/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src=" {{ asset('./homepage/img/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{ asset('./homepage/img/logo4.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: 74B-Thu Bồn-Bình An-Nam Phước-Duy Xuyên-Quảng Nam</li>
                            <li>Phone  : 0931 452 452 | 0941 681 681</li>
                            <li>Email  : hungboss091289@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="{{ route('home') }}">About Us</a></li>
                            <li><a href="{{ route('home') }}">About Our Shop</a></li>
                            <li><a href="{{ route('home') }}">Secure Shopping</a></li>
                            <li><a href="{{ route('home') }}">Delivery infomation</a></li>
                            <li><a href="{{ route('home') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('home') }}">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('home') }}">Who We Are</a></li>
                            <li><a href="{{ route('home') }}">Our Services</a></li>
                            <li><a href="{{ route('home') }}">Projects</a></li>
                            <li><a href="{{ route('home') }}">Contact</a></li>
                            <li><a href="{{ route('home') }}">Innovation</a></li>
                            <li><a href="{{ route('home') }}">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="{{ route('home') }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ route('home') }}"><i class="fa fa-instagram"></i></a>
                            <a href="{{ route('home') }}"><i class="fa fa-twitter"></i></a>
                            <a href="{{ route('home') }}"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('./homepage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('./homepage//jquery.slicknav.js')}}"></script>
    <script src="{{ asset('./homepage//mixitup.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/main.js')}}"></script>
    <script src="{{ asset('/viewAdmin/js/action.js')}}"></script>
</body>

</html>