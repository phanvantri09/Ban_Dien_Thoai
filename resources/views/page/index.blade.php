<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>
    
    <!-- Google Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('./homepage/css/bootstrap.min.css')}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('./homepage/css/font-awesome.min.css')}}">
    
    <!-- Custom CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('./homepage/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('./homepage/style.css')}}">
    <link rel="stylesheet" href="{{ asset('./homepage/css/responsive.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    use App\Models\Category;
    $cat = Category::all();
    ?>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            @auth
                            <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="{{ route('home.mycart') }}"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="{{ route('home.logout') }}"><i class="fa fa-user"></i> Logout</a></li>
                            @else
                            <li><a href="{{ route('home.login') }}"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="{{ route('home.login') }}"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="{{ route('home.login') }}"><i class="fa fa-user"></i> Login</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="{{ route('home') }}"><img src="{{ asset('./homepage/img/logo.png')}}"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        @auth
                        <a href="{{ route('home.cartUser', [Auth::user()->id]) }}">Cart - <span class="cart-amunt">${{$total}}</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">{{$amount}}</span></a>
                        @else 
                        <a href="{{ route('home.register') }}">Cart - <span class="cart-amunt">$0</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        @auth
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('shop', ['id'=>0]) }}">Shop page</a></li>
                        <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}">Cart</a></li>
                        <li><a href="{{ route('home.mycart') }}">Checkout</a></li>
                        <li><a href="{{ route('home') }}">Others</a></li>
                        <li><a href="{{ route('home') }}">Contact</a></li>
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Category:</span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @foreach ($cat as $ca)
                                <li><a href="{{ route('shop', ['id'=>$ca->id]) }}">{{$ca->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><form style="align-content: center; text-align: center; margin-top: 10px" action=""><input name="search" type="text"><button type="submit"> Tìm</button></form></li>
                        @else 
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('shop', ['id'=>0]) }}">Shop page</a></li>
                        <li><a href="{{ route('home.login') }}">Cart</a></li>
                        <li><a href="{{ route('home.login') }}">Checkout</a></li>
                        <li><a href="{{ route('home') }}">Others</a></li>
                        <li><a href="{{ route('home') }}">Contact</a></li>
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Category:</span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @foreach ($cat as $ca)
                                <li><a href="{{ route('shop', ['id'=>$ca->id]) }}">{{$ca->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><form style="align-content: center; text-align: center; margin-top: 10px" action=""><input name="search" type="text"><button type="submit"> Tìm</button></form></li>
                        @endauth
                        
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    @yield('content')
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
    <script>
        @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('success') }}");
        @endif
      </script>
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{ asset('./homepage/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/jquery.sticky.js')}}"></script>
    
    <!-- jQuery easing -->
    <script src="{{ asset('./homepage/js/jquery.easing.1.3.min.js')}}"></script>
    
    <!-- Main Script -->
    <script src="{{ asset('./homepage/js/main.js')}}"></script>
    
    <!-- Slider -->
    <script src="{{ asset('/viewAdmin/js/action.js')}}"></script>

    <script type="text/javascript" src="{{ asset('./homepage/js/bxslider.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('./homepage/js/script.slider.js')}}"></script>
  </body>
</html>