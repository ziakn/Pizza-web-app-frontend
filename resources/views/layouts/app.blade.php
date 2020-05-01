<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Pizza ||   Pizza Delivery  </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('style.css') }}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

	<!-- Modernizer js -->
	<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
    <div class="wrapper" id="wrapper">
    <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('images/logo/foody.png') }}" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="/">Home</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div>
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun"> 
                                    <span>{{$countCartList}}</span>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer__area footer--1">
   
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved 2020.<a href="/">Pizza Web App</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name or email">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="#">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="email" placeholder="Email address">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Confirm password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
        <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        @php
                        $price = 0;
                        
                        
                        @endphp
                        @foreach ($orderPizzaList as $item)
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    @if(! $item->pizza->image->isEmpty()) 
                                    <img src="{{$item->pizza->image->first()->src}}" alt="small thumbnail">
                                    @endif
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                            <h5><a href="product-details.html" class="product-name">{{$item->pizza->title}}</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">{{$item->pizza->priceType}}{{$item->pizza->price}}</span>
                            </div>
                            <button class="cartbox__item__remove">
                               <a  href="{{ URL('/app/delete/cart/'.$item->id )}}"><i class="fa fa-trash"></i></a>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        @php
                           $price = $price + $item->pizza->price
                           @endphp
                        @endforeach
                    </div>
                    <div class="cartbox__total">
                        
                       
                        <ul>
                        <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$00</span></li>
                            <li class="grandtotal">Total<span class="price">${{ $price}}</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="#"><span>View cart</span></a>
                        <a class="food__btn" href="#"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->  
    </div><!-- //Main wrapper -->
    </div>
    <script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/active.js') }}"></script>
</body>
</html>
