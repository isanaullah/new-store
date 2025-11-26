        <!--footer start-->
        <footer class="footer">
        @php
            $setting = App\Models\WebSetting::first();
        @endphp
            <div class="footer-main-area borderBtm pt-120 pb-120">
                <div class="container margintop--7">
                    <div class="row mt--30">
                        <div class="col-lg-3 col-6 mb--12 wow animated fadeInUp" data-wow-delay="0.2s"
                            data-wow-duration="0.4s">
                            <div class="footer-box mt-4">
                                <h5 class="font-24 font-poppins fw-600 mb-1">About Us</h5>
                                <ul class="footer-link-box mt-3">
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="about.html">
                                            <span class="animationLine redaniline"> Who we are </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="about.html">
                                            <span class="animationLine redaniline"> Work with us </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="about.html">
                                            <span class="animationLine redaniline"> Become a supplier </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="about.html">
                                            <span class="animationLine redaniline"> Investor relations </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="about.html">
                                            <span class="animationLine redaniline"> Our devicesccount </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="about.html">
                                            <span class="animationLine redaniline"> Affiliate program </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mb--12 wow animated fadeInUp" data-wow-delay="0.2s"
                            data-wow-duration="0.4s">
                            <div class="footer-box mt-4">
                                <h5 class="font-24 font-poppins fw-600 mb-1">Useful links</h5>
                                <ul class="footer-link-box mt-3">
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="{{route('contact-us')}}">
                                            <span class="animationLine redaniline"> Contact us </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="faq.html">
                                            <span class="animationLine redaniline"> Common FAQs </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="{{route('terms.conditions')}}">
                                            <span class="animationLine redaniline"> Terms & Conditions </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="{{route('return.policy')}}">
                                            <span class="animationLine redaniline"> Return policy </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="{{route('cancellation')}}">
                                            <span class="animationLine redaniline"> Cancellation </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="{{route('track.orders')}}">
                                            <span class="animationLine redaniline"> Track orders </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mb--12 wow animated fadeInUp" data-wow-delay="0.2s"
                            data-wow-duration="0.4s">
                            <div class="footer-box mt-4">
                                <h5 class="font-24 font-poppins fw-600 mb-1"> Follow us on </h5>
                                <ul class="footer-link-box mt-3">
                                    <li>
                                        <a class="d-inline-block mt-1 footer-link font-rubik font-14 frcolor p-0 afterNone hoverRed"
                                            href="{{$setting->site_fb}}">
                                            <span class="pe-2 font-16"><i class="flaticon-facebook-app-symbol"></i>
                                            </span>
                                            <span> Collections </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block mt-2  footer-link font-rubik font-14 frcolor p-0 afterNone hoverRed"
                                            href="{{$setting->site_instagram}}">
                                            <span class="pe-2 font-16"><i class="flaticon-instagram"></i> </span>
                                            <span> Instagram </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mb--12 wow animated fadeInUp" data-wow-delay="0.2s"
                            data-wow-duration="0.4s">
                            <div class="footer-box mt-4">
                                <h5 class="font-24 font-poppins fw-600 mb-1"> Shopping </h5>
                                <ul class="footer-link-box mt-3">
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="shop-grid.html">
                                            <span class="animationLine redaniline"> Men Shopping Trendy </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="shop-grid.html">
                                            <span class="animationLine redaniline"> Women Shopping 2021 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="shop-grid.html">
                                            <span class="animationLine redaniline"> Gift cards & Coupon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="shop-grid.html">
                                            <span class="animationLine redaniline"> Home $ living </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="shop-grid.html">
                                            <span class="animationLine redaniline"> Electronics Gadget </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-inline-block font-rubik font-14 footer-link frcolor p-0 afterNone hoverRed"
                                            href="shop-grid.html">
                                            <span class="animationLine redaniline"> Gift cards & Coupon </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyrights pb-3 pt-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <div
                                class="footer_bottom_content d-flex flex-md-row justify-content-md-between flex-column justify-content-center ">
                                <div class="copyright wow fadeInUp animated">
                                    <p class="fcolor2 font-roboto">
                                        Copyright © 2022 <a href="index.html" class="colorRed underline">Karte.</a>
                                        All Rights Reserved.
                                    </p>
                                </div>
                                <div class="footer-payment flex-nowrap wow fadeInUp animated">
                                    <a href="#0"> <img src="{{asset('assets/frontend/images/home-6/method-1.jpg')}}" alt="payment"> </a>
                                    <a href="#0"> <img src="{{asset('assets/frontend/images/home-6/method-2.jpg')}}" alt="payment"> </a>
                                    <a href="#0"> <img src="{{asset('assets/frontend/images/home-6/method-3.jpg')}}" alt="payment"> </a>
                                    <a href="#0"> <img src="{{asset('assets/frontend/images/home-6/method-4.jpg')}}" alt="payment"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer End-->

        <!-- Quick View start-->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog quickview-modal-width modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="quickview-modal position-relative">
                        <button type="button" class="btn-close animationCloser quickCross  modalcloser"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="span1 animationLine"> </span>
                            <span class="span2 animationLine"> </span>
                        </button>
                        <div class="product-details pr-30">
                            <div class="container auto-container p-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="quick-view-slider">
                                            <div class="tabs">
                                                <div class="qvBigImgBob">
                                                    <div id="tab7" class="tab-item qvImg">
                                                        <div class="popup-product-single-image">
                                                            <img src="{{asset('assets/frontend/images/product-details/product-details-1.png')}}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab8" class="tab-item qvImg">
                                                        <div class="popup-product-single-image">
                                                            <img src="{{asset('assets/frontend/images/product-details/product-details-2.png')}}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab9" class="tab-item qvImg">
                                                        <div class="popup-product-single-image">
                                                            <img src="{{asset('assets/frontend/images/product-details/product-details-3.png')}}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <button class="prev lh-0"> <i class="flaticon-back"></i> </button>
                                                    <button class="next lh-0"> <i class="flaticon-next"></i> </button>
                                                </div>
                                                <div class="qvSliderNavBox">
                                                    <ul>
                                                        <li class="tab-nav qvSliderNav">
                                                            <a href="#tab7"> <img
                                                                    src="{{asset('assets/frontend/images/product-details/product-details-1.png')}}"
                                                                    alt="img"> </a>
                                                        </li>
                                                        <li class="tab-nav qvSliderNav">
                                                            <a href="#tab8"> <img
                                                                    src="{{asset('assets/frontend/images/product-details/product-details-2.png')}}"
                                                                    alt="img"> </a>
                                                        </li>
                                                        <li class="tab-nav qvSliderNav">
                                                            <a href="#tab9"> <img
                                                                    src="{{asset('assets/frontend/images/product-details/product-details-3.png')}}"
                                                                    alt="img"> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-details-content sticky-product-image">
                                            <h3>Le Skinny De Jeanne.</h3>
                                            <ul class="rating mt-2 pt-1 align-items-center">
                                                <li> <i class="flaticon-star-1"></i> </li>
                                                <li> <i class="flaticon-star-1"></i> </li>
                                                <li> <i class="flaticon-star-1"></i> </li>
                                                <li> <i class="flaticon-star-1"></i> </li>
                                                <li> <i class="flaticon-star-1"></i> </li>
                                                <li class="mb--5 ms-2"> (4 Reviews)</li>
                                            </ul>
                                            <div class="d-flex pt-2 align-items-center">
                                                <p class="font-22 mt-1 colorrBlack me-2">$329.99</p>
                                                <span class="colorBage1 mt-1">(+15% Vat Included)</span>
                                            </div>
                                            <div class="product-details-color mt-3">
                                                <p class="fw-500">Color: Blue</p>
                                                <ul class="product-switcher style2 mt-2">
                                                    <li>
                                                        <a href="#0" class="pswitch-item wh50 me-2">
                                                            <span class="text-uppercase">Blue </span>
                                                            <img src="{{asset('assets/frontend/images/product-details/product-details-1.png')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" class="pswitch-item wh50 me-2">
                                                            <span class="text-uppercase">Black </span>
                                                            <img src="{{asset('assets/frontend/images/product-details/product-details-2.png')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" class="pswitch-item wh50  me-2 active">
                                                            <span class="text-uppercase">Gray </span>
                                                            <img src="{{asset('assets/frontend/images/product-details/product-details-3.png')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" class="pswitch-item wh50">
                                                            <span class="text-uppercase">Yellow </span>
                                                            <img src="{{asset('assets/frontend/images/product-details/product-details-4.png')}}"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="fw-500 mt-2">
                                                Size
                                            </p>
                                            <ul class="productSize style2 mt-2">
                                                <li><a href="#0" class="productSizeitem me-2">XS</a></li>
                                                <li><a href="#0" class="productSizeitem active me-2">S </a> </li>
                                                <li><a href="#0" class="productSizeitem me-2">M</a></li>
                                                <li><a href="#0" class="productSizeitem me-2">L</a></li>
                                                <li><a href="#0" class="productSizeitem active">XL</a></li>
                                            </ul>
                                            <p class="fw-500 mt-3">
                                                Quantity
                                            </p>
                                            <div class="qtySelector me-3 mt-2">
                                                <span class="decreaseQty"><i class="flaticon-minus-sign"></i>
                                                </span>
                                                <input type="text" class="qtyValue p-0 me-2 ms-2 text-center" value="1">
                                                <span class="increaseQty"> <i class="flaticon-plus-1"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex mt-2 flex-wrap align-items-center">
                                                <button class="btn-primary sotobtn black me-3 mt-2">
                                                    Add To Cart
                                                </button>
                                                <button class="btn-primary sotobtn transparentBlack mt-2">
                                                    Buy It Now
                                                </button>
                                            </div>
                                            <div class="pt-2">
                                                <p class="fw-500 mt-3">
                                                    Secure Payment
                                                </p>
                                                <ul class="d-flex align-items-center mt-2">
                                                    <li class="me-3">
                                                        <a href="#0"><img src="{{asset('assets/frontend/images/shop/payment-1.png')}}"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="me-3">
                                                        <a href="#0"><img src="{{asset('assets/frontend/images/shop/payment-2.png')}}"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="me-3">
                                                        <a href="#0"><img src="{{asset('assets/frontend/images/shop/payment-3.png')}}"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="me-3">
                                                        <a href="#0"><img src="{{asset('assets/frontend/images/shop/payment-4.png')}}"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="me-3">
                                                        <a href="#0"><img src="{{asset('assets/frontend/images/shop/payment-5.png')}}"
                                                                alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a href="#0"><img src="{{asset('assets/frontend/images/shop/payment-6.png')}}"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Nav Start -->
        <div class="offcanvas offcanvas-start mobile-nav-wrapper" tabindex="-1" id="offcanvasmenu">
            <div class="offcanvas-header d-flex justify-content-end p-0">
                <button type="button" class="btn-close animationCloser nev-cross text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                    <span class="span1 animationLine"> </span>
                    <span class="span2 animationLine"> </span>
                </button>
            </div>
            <div class="offcanvas-body p-0">
                <nav>
                    <ul class="mobile-nav navbar-nav flex-column">
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Home </span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="index.html">Home 01</a> </li>
                                <li> <a class="dropdown-item" href="index-2.html">Home 02</a> </li>
                                <li> <a class="dropdown-item" href="index-3.html">Home 03</a> </li>
                                <li> <a class="dropdown-item" href="index-4.html">Home 04</a> </li>
                                <li> <a class="dropdown-item" href="index-5.html">Home 05</a> </li>
                                <li> <a class="dropdown-item" href="index-6.html">Home 06</a> </li>
                                <li> <a class="dropdown-item" href="index-7.html">Home 07</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Shop </span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="shop-grid.html">Shop Grid 01</a> </li>
                                <li> <a class="dropdown-item" href="shop-grid-left-sidebar.html">Shop Grid 02</a> </li>
                                <li> <a class="dropdown-item" href="shop-grid-right-sidebar.html">Shop Grid 03</a> </li>
                                <li> <a class="dropdown-item" href="shop-list-left-sidebar.html">Shop List 01</a> </li>
                                <li> <a class="dropdown-item" href="shop-list-right-sidebar.html">Shop List 02</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Single Product </span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="shop-details-1.html">Single Product 01</a> </li>
                                <li> <a class="dropdown-item" href="shop-details-2.html">Single Product 02</a> </li>
                                <li> <a class="dropdown-item" href="shop-details-3.html">Single Product 03</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Pages</span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="about.html">About </a> </li>
                                <li> <a class="dropdown-item" href="cart.html">Cart </a> </li>
                                <li> <a class="dropdown-item" href="compare.html">Compare </a> </li>
                                <li> <a class="dropdown-item" href="error.html">Error</a> </li>
                                <li> <a class="dropdown-item" href="faq.html">Faq</a> </li>
                                <li> <a class="dropdown-item" href="login.html">Login</a> </li>
                                <li> <a class="dropdown-item" href="register.html">Registration </a> </li>
                                <li> <a class="dropdown-item" href="wishlist.html">Wishlist</a> </li>
                                <li> <a class="dropdown-item" href="my-account.html">Account</a> </li>
                                <li> <a class="dropdown-item" href="order-track.html">Order Track</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Blog</span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="blog.html">Blog </a> </li>
                                <li> <a class="dropdown-item" href="blog-single.html">Blog Details </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item p-0"><a class="nav-link bb-0" href="{{route('contact-us')}}">Contact </a></li>
                    </ul>
                </nav>
                <ul class="mobile-contact-info">
                    <li class="single-minfo">
                        <a href="{{route('contact-us')}}"><i class="flaticon-location-1"></i>Our location</a>
                    </li>
                    <li class="single-minfo">
                        <a href="login.html"><i class="flaticon-account"></i>Log In / Sign Up</a>
                    </li>
                    <li class="single-minfo">
                        <a href="tel:+1234567890"><i class="flaticon-phone-call"></i>(+01) - 2345 - 6789</a>
                    </li>
                </ul>
                <p class="site-copyright">Copyright 2022 &copy; <a class="underline"
                        href="https://themeforest.net/user/mate_themes">Karte</a>.
                    All rights reserved. Powered by <a class="underline"
                        href="https://themeforest.net/user/mate_themes">Mate_Themes</a>.
                </p>
            </div>
        </div>
        <!-- Mobile Nav End -->

        <!-- Offcanvas Menu-Search Start -->
        <div class="offcanvas menusearch-offcanvas-top offcanvas-top" tabindex="-1" id="menusearch">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <div class="menusearch">
                            <div class="offcanvas-header p-0">
                                <h5 class="fw-500 font-poppins">What are you looking for?</h5>
                                <button type="button" class="btn-close animationCloser text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close">
                                    <span class="span1 animationLine"> </span>
                                    <span class="span2 animationLine"> </span>
                                </button>
                            </div>
                            <div class="offcanvas-body p-0">
                                <form action="#0" class="newsletterBox searchbox">
                                    <div class="newsletter-input-group border-0 p-0 pt-2">
                                        <input type="search" class="form-control font-14 font-poppins"
                                            placeholder="Search for products brands and more">
                                        <button class="w-auto searchboxButton me-3 p-0" type="submit"> <i
                                                class="flaticon-loupe"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Offcanvas Start -->
        @php
            use Gloudemans\Shoppingcart\Facades\Cart;
        @endphp
        <div class="offcanvas offcanvascart p-4 pt-3 offcanvas-end" tabindex="-1" id="offcanvasRight2">
            <div class="offcanvas-header d-flex justify-content-between align-content-center">
                <h6 class="text-uppercase font-josefin colorrBlack fw-500">Your Cart ({{ Cart::count() }})</h6>
                <button type="button" class="btn-close p-0 animationCloser" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                    <span class="span1 animationLine"> </span>
                    <span class="span2 animationLine"> </span>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="side-cart h-100 d-flex flex-column justify-content-between">
                    <div class="top">
                        <div class="cart_items">
                            @if(Cart::count() > 0)
                                @foreach(Cart::content() as $item)
                                    <div class="items d-flex justify-content-between align-items-center">
                                        <div class="left d-flex align-items-center">
                                            <a href="{{ route('product.show', $item->options->slug) }}" class="thumb d-flex justify-content-between align-items-center">
                                                <img src="{{ $item->options->image ? asset('storage/' . $item->options->image) : asset('assets/images/placeholder.png') }}" alt="{{ $item->name }}">
                                            </a>
                                            <div class="text">
                                                <a href="{{ route('product.show', $item->options->slug) }}">
                                                    <h6 class="colorrBlack font-josefin fw-500">{{ $item->name }}</h6>
                                                </a>
                                                <p>{{ $item->qty }} X <span>${{ number_format($item->price, 2) }}</span> </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="item-remove" onclick="removeFromCartOffcanvas('{{ $item->rowId }}')"> <i class="flaticon-cross"></i> </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center py-4">
                                    <p class="text-muted">Your cart is empty</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="total-ammount d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase colorrBlack font-josefin fw-500">Total:</h6>
                            <h6 class="ammount text-uppercase colorrBlack font-josefin fw-500">${{ number_format((float) Cart::total(), 2) }}</h6>
                        </div>
                        <div class="button-box d-flex justify-content-between">
                            <a href="{{ route('cart') }}" class="btn_black"> View Cart </a>
                            <a href="#" class="button-2 btn_theme"> Chekout </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Windows onload Newsletter Modal Start -->
        {{-- <div class="modal fade newsletter-modal" id="newsletter-modal" aria-hidden="true" tabindex="-1">
            <div
                class="modal-dialog height100vh mt-auto ms-lg-auto m-auto me-lg-0 mb-lg-0 pe-lg-4 pb-lg-4 p-3 modal-dialog-centered align-items-lg-end align-items-center">
                <div class="modal-content newsletterModalBox position-relative p-lg-5 pt-lg-3 p-4 pt-3 border-0">
                    <div class="d-flex justify-content-end align-items-center">
                        <button type="button" class="btn-close animationCloser p-0 newsletter-close modal-close-btn"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="span1 animationLine"> </span>
                            <span class="span2 animationLine"> </span>
                        </button>
                    </div>
                    <div class="modal-body p-0 pt-3">
                        <div class="newsletter-content">
                            <h4 class="fw-500">Subscribe To Our Newsletter </h4>
                            <p class="pt-2">Get 30% off on our new collection</p>
                            <form action="#0" class="newsletterBox mt-3 pt-2">
                                <div class="newsletter-input-group  border-0 flex-column">
                                    <input type="email" class="form-control sidebarinput w-100"
                                        placeholder="Enter your e-mail">
                                    <button type="submit" class="btn-primary w-100 mt-3">
                                        <span>Subscribe Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Windows onload Newsletter Modal End -->

        <!--===scroll bottom to top===-->
        <a href="#0" class="scrollToTop"><i class="flaticon-up-arrow"></i></a>
        <!--===scroll bottom to top===-->

        <!--==== Js Scripts Start ====-->
        <!-- Jquery v3.6.0 Js -->
        <script src="{{asset('assets/frontend/js/jqurey.v3.6.0.min.js')}}"></script>
        <!-- Popper v2.9.3 Js -->
        <script src="{{asset('assets/frontend/js/popper.v2.9.3.min.js')}}"></script>
        <!-- Bootstrap v5.1.1 js -->
        <script src="{{asset('assets/frontend/js/bootstrap.v5.1.1.min.js')}}"></script>
        <!-- Jquery Ui js -->
        <script src="{{asset('assets/frontend/js/plugin/jquery-ui.min.js')}}"></script>
        <!-- Jarallax Js -->
        <script src="{{asset('assets/frontend/js/plugin/jarallax.min.js')}}"></script>
        <!-- Slick Slider Js -->
        <script src="{{asset('assets/frontend/js/plugin/slick.min.js')}}"></script>
        <!-- Image Comparison Slider Js -->
        <script src="{{asset('assets/frontend/js/plugin/img-comparison-slider.js')}}"></script>
        <!-- magnific-popup v2.3.4 Js -->
        <script src="{{asset('assets/frontend/js/plugin/jquery.magnific-popup.min.js')}}"></script>
        <!-- Countdown Js -->
        <script src="{{asset('assets/frontend/js/plugin/jquery.countdown.min.js')}}"></script>
        <!-- Wow Js -->
        <script src="{{asset('assets/frontend/js/plugin/wow.v1.3.0.min.js')}}"></script>
        <!-- Main js -->
        <script src="{{asset('assets/frontend/js/main.js')}}"></script>

        <script>
        function removeFromCartOffcanvas(rowId) {
            if (confirm('Are you sure you want to remove this item?')) {
                fetch(`/cart/remove/${rowId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert(data.message || 'Error removing item');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error removing item');
                });
            }
        }
        </script>

    </div>
    <!-- Page-wrapper End -->
</body>
</html>
