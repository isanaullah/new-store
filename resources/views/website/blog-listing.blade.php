@include("sitepartials.header")
 <!-- Body Container -->
        <div class="page-content overflow-hidden">

            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(assets/images/innerpage/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                             <div class="breadcrumb-content margintop--5 text-center wow fadeInUp animated">
                                <h2 class="fw-700">{{$page->title}}</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="{{route('home')}}"><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li> <i class="flaticon-next"></i> </li>
                                        <li class="active">{{$page->title}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->

            <!--Start Blog Page-->
            <section class="blog-page pt-120 pb-120">
                <div class="container">
                    <div class="row mt--30">
                        <div class="col-xl-8 col-lg-7 mt-30 ">
                            <div class="blog-page-left">
                                <!--Start Blog Page Single-->
                                <div class="blog-page-single wow fadeInUp animated">
                                    <div class="blog-page-img">
                                        <a href="blog-single.html">
                                            <img src="{{asset('assets/images/blog/blog-page-1-1.jpg')}}" alt="">
                                        </a>
                                        <div class="blog-page-date">
                                            <p class="font-josefin"><span class="font-josefin">15</span> September</p>
                                        </div>
                                    </div>
                                    <div class="blog-page-content">
                                        <ul class="blog-page-meta">
                                            <li class="font-roboto">Vendora Style</li>
                                            <li class="font-roboto">By Daniel</li>
                                        </ul>
                                        <h4 class="blog-page-title">
                                            <a class="font-josefin" href="blog-single.html">
                                                Objectively disintermediate
                                                excellent scenarios for cooperative core competencies
                                            </a>
                                        </h4>
                                        <p class="blog-page-text font-roboto">Appropriately strategize backend solutions
                                            without better
                                            inexpensive content. Continually incubate sustainable solutions with
                                            extensive
                                            total linkage. Continually evolve user-centric so supply chains via
                                            inexpensive
                                            users. Dramatically transform process-centric ideas through visionary growth
                                            strategie Intrinsicly architect emerging channels and empowered communities.
                                        </p>
                                        <div class="blog-page-continue-reading">
                                            <a class="font-josefin" href="blog-single.html">Continue Reading..</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Page Single-->
                                <!--Start Blog Page Single-->
                                <div class="blog-page-single mt-30 wow fadeInUp animated ">
                                    <div class="blog-page-img">
                                        <a href="#0"> <img
                                                src="{{asset('assets/images/blog/blog-page-1-2.jpg')}}" alt=""></a>
                                        <div class="blog-page-date">
                                            <p class="font-josefin"><span class="font-josefin">15</span> September</p>
                                        </div>
                                        <div class="video-three__inner">
                                            <div class="icon wow zoomIn animated" data-wow-delay="300ms"
                                                data-wow-duration="1500ms">
                                                <a class="video-popup" title="Video Gallery"
                                                    href="https://www.youtube.com/watch?v=p25gICT63ek">
                                                    <i class="flaticon-play-button-1"></i>
                                                </a>
                                                <span class="border-animation border-1"></span>
                                                <span class="border-animation border-2"></span>
                                                <span class="border-animation border-3"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-page-content">
                                        <ul class="blog-page-meta">
                                            <li class="font-roboto">Vendora Style</li>
                                            <li class="font-roboto">By Daniel</li>
                                        </ul>
                                        <h4 class="blog-page-title">
                                            <a class="font-josefin" href="blog-single.html">
                                                Objectively disintermediate
                                                excellent scenarios for cooperative core competencies
                                            </a>
                                        </h4>
                                        <p class="blog-page-text font-roboto">Appropriately strategize backend solutions
                                            without better
                                            inexpensive content. Continually incubate sustainable solutions with
                                            extensive
                                            total linkage. Continually evolve user-centric so supply chains via
                                            inexpensive
                                            users. Dramatically transform process-centric ideas through visionary growth
                                            strategie Intrinsicly architect emerging channels and empowered communities.
                                        </p>
                                        <div class="blog-page-continue-reading">
                                            <a class="font-josefin" href="blog-single.html">Continue Reading..</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Page Single-->
                                <!--Start Blog Page Single-->
                                <div class="blog-page-single mt-30 wow fadeInUp animated">
                                    <div class="blog-aurthor-review">
                                        <div class="blog-aurthor-review-quote">
                                            <i class="flaticon-right-quote"></i>
                                        </div>
                                        <p class="font-josefin">“Credibly utilize stand-alone expertise for high-payoff
                                            best practices.
                                            Energistically facilitate sticky users”</p>
                                        <div class="blog-page-author-name font-josefin">
                                            <h4 class="font-josefin font-24">David Smith</h4> <span
                                                class="font-roboto">Author</span>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Page Single-->
                                <!--Start Blog Page Single-->
                                <div class="blog-page-single mt-30 wow fadeInUp animated">
                                    <div class="blog-thumb-slider">
                                        <div class="globalSlider position-relative" data-slick='{"dots": true, "autoplay": true, "infinite": true, "slidesToShow": 1, "slidesToScroll": 1,
                                    "fade": true, "cssEase": "linear","autoplaySpeed": 4000, "pauseOnHover": false'>

                                            <div class="blog-page-img"> <a href="blog-single.html"><img
                                                        src="{{asset('assets/images/blog/blog-page-1-3.jpg')}}" alt=""></a>
                                                <div class="blog-page-date">
                                                    <p class="font-josefin"><span class="font-josefin">15</span>
                                                        September</p>
                                                </div>
                                            </div>
                                            <div class="blog-page-img"> <a href="blog-single.html"><img
                                                        src="{{asset('assets/images/blog/blog-page-1-2.jpg')}}" alt=""></a>
                                                <div class="blog-page-date">
                                                    <p class="font-josefin"><span class="font-josefin">15</span>
                                                        September</p>
                                                </div>
                                            </div>
                                            <div class="blog-page-img"> <a href="blog-single.html"><img
                                                        src="{{asset('assets/images/blog/blog-page-1-1.jpg')}}" alt=""></a>
                                                <div class="blog-page-date">
                                                    <p class="font-josefin"><span class="font-josefin">15</span>
                                                        September</p>
                                                </div>
                                            </div>
                                            <div class="blog-page-img"> <a href="blog-single.html"><img
                                                        src="{{asset('assets/images/blog/blog-page-1-2.jpg')}}" alt=""></a>
                                                <div class="blog-page-date">
                                                    <p class="font-josefin"><span class="font-josefin">15</span>
                                                        September</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-page-content">
                                        <ul class="blog-page-meta">
                                            <li class="font-roboto">Vendora Style</li>
                                            <li class="font-roboto">By Daniel</li>
                                        </ul>
                                        <h4 class="blog-page-title">
                                            <a class="font-josefin" href="blog-single.html">
                                                Objectively disintermediate
                                                excellent scenarios for cooperative core competencies
                                            </a>
                                        </h4>
                                        <p class="blog-page-text font-roboto">
                                            Appropriately strategize backend solutions
                                            without better
                                            inexpensive content. Continually incubate sustainable solutions with
                                            extensive
                                            total linkage. Continually evolve user-centric so supply chains via
                                            inexpensive
                                            users. Dramatically transform process-centric ideas through visionary growth
                                            strategie Intrinsicly architect emerging channels and empowered communities.
                                        </p>
                                        <div class="blog-page-continue-reading">
                                            <a class="font-josefin" href="blog-single.html">Continue Reading..</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Page Single-->
                                <!--Start Blog Page Single-->
                                <div class="blog-page-single mt-30 wow fadeInUp animated">
                                    <div class="blog-page-img"> <a href="blog-single.html"><img
                                                src="{{asset('assets/images/blog/blog-page-1-4.jpg')}}" alt=""></a>
                                        <div class="blog-page-date">
                                            <p class="font-josefin"><span class="font-josefin">15</span> September</p>
                                        </div>
                                    </div>
                                    <div class="blog-page-content">
                                        <ul class="blog-page-meta">
                                            <li class="font-roboto">Vendora Style</li>
                                            <li class="font-roboto">By Daniel</li>
                                        </ul>
                                        <h4 class="blog-page-title">
                                            <a class="font-josefin" href="blog-single.html">
                                                Objectively disintermediate
                                                excellent scenarios for cooperative core competencies
                                            </a>
                                        </h4>
                                        <p class="blog-page-text font-roboto">Appropriately strategize backend solutions
                                            without better
                                            inexpensive content. Continually incubate sustainable solutions with
                                            extensive
                                            total linkage. Continually evolve user-centric so supply chains via
                                            inexpensive
                                            users. Dramatically transform process-centric ideas through visionary growth
                                            strategie Intrinsicly architect emerging channels and empowered communities.
                                        </p>
                                        <div class="blog-page-continue-reading">
                                            <a class="font-josefin" href="blog-single.html">Continue Reading..</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Page Single-->
                                <!--Start Blog Page Single-->
                                <div class="blog-page-single blog-page-single-last mt-30 wow fadeInUp animated">
                                    <div class="blog-page-content">
                                        <ul class="blog-page-meta">
                                            <li class="font-roboto">Vendora Style</li>
                                            <li class="font-roboto">By Daniel</li>
                                        </ul>
                                        <h4 class="blog-page-title">
                                            <a class="font-josefin" href="blog-single.html">
                                                Objectively disintermediate
                                                excellent scenarios for cooperative core competencies
                                            </a>
                                        </h4>
                                        <p class="blog-page-text font-roboto">Appropriately strategize backend solutions
                                            without better
                                            inexpensive content. Continually incubate sustainable solutions with
                                            extensive
                                            total linkage. Continually evolve user-centric so supply chains via
                                            inexpensive
                                            users. Dramatically transform process-centric ideas through visionary growth
                                            strategie Intrinsicly architect emerging channels and empowered communities.
                                        </p>
                                        <div class="blog-page-continue-reading">
                                            <a class="font-josefin" href="blog-single.html">Continue Reading..</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Page Single-->
                                <ul class="pagination justify-content-center mt-30 wow fadeInUp animated">
                                    <li class="next"><a href="#0"><i class="flaticon-back-1" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0" class="active">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0">...</a></li>
                                    <li><a href="#0">10</a></li>
                                    <li class="next"><a href="#0"><i class="flaticon-next-1" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 mt-30 ">
                            <div class="sidebar-content-box">
                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box style-1 p-4 boxBorder wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Search</h4>
                                    <form action="#0" class="footer-default__subscrib-form m-0">
                                        <div class="footer-input-box p-0 ">
                                            <input class="ms-3 w-100" type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="subscribe_btn">
                                                <i class="flaticon-magnifying-glass"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!--End Single Sidebar Box-->
                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box style-2 mt-30 wow fadeInUp animated ">
                                    <div class="single-sidebar_author_box">
                                        <a href="blog-single.html" class="single-sidebar_author_img">
                                            <img src="{{asset('assets/images/blog/single-sidebar_author_img.jpg')}}" alt="">
                                        </a>
                                        <div class="single-sidebar_author_content p-4">
                                            <h4 class="font-24 titleAfter d-inline-block font-josefin">David Smith</h4>
                                            <p class="font-roboto">
                                                Compellingly redefine unique benefits whereas accurate methodologies.
                                                Competently extend wireless imperatives after principle-centered
                                                synergy.
                                                Seamlessly impact enterprise.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Sidebar Box-->

                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box boxBorder p-4 mt-30 style-3 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin"> Categories</h4>
                                    <ul class="categories-list">
                                        <li> <a href="blog.html" class="font-roboto"> <span><i
                                                        class="flaticon-play-button-1"></i> Design</span> <span>
                                                    (70)</span> </a> </li>
                                        <li> <a href="blog.html" class="font-roboto"> <span><i
                                                        class="flaticon-play-button-1"></i> Hand Made</span>
                                                <span> (65)</span> </a> </li>
                                        <li> <a href="blog.html" class="font-roboto"> <span><i
                                                        class="flaticon-play-button-1"></i> Technology</span>
                                                <span> (40)</span> </a> </li>
                                        <li> <a href="blog.html" class="font-roboto"> <span><i
                                                        class="flaticon-play-button-1"></i> Home Decorator</span>
                                                <span> (32)</span> </a> </li>
                                        <li> <a href="blog.html" class="pb-0 font-roboto"> <span><i
                                                        class="flaticon-play-button-1"></i> Creative
                                                    Task</span> <span> (100)</span> </a> </li>
                                    </ul>
                                </div>
                                <!--End Single Sidebar Box-->

                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box boxBorder p-4 mt-30 style-4 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin"> Recent Posts </h4>
                                    <div class="sidebar-blog-post mt-4"> <a href="blog-single.html" class="img-box">
                                            <img src="{{asset('assets/images/blog/sidebar-blog-post1.jpg')}}" alt="Awesome Image">
                                            <div class="overlay-content">

                                            </div>
                                        </a>
                                        <div class="title-box">
                                            <p class="date font-roboto">June 22, 2022</p>
                                            <h5><a href="blog-single.html" class="font-josefin font-20">Modern Design
                                                    From Basics</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar-blog-post"> <a href="blog-single.html" class="img-box"> <img
                                                src="{{asset('assets/images/blog/sidebar-blog-post3.jpg')}}" alt="Awesome Image">
                                            <div class="overlay-content"> </div>
                                        </a>
                                        <div class="title-box">
                                            <p class="date font-roboto">June 12, 2022</p>
                                            <h5><a href="blog-single.html" class="font-josefin font-20">Modern Design
                                                    From Basics</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar-blog-post"> <a href="blog-single.html" class="img-box"> <img
                                                src="{{asset('assets/images/blog/sidebar-blog-post2.jpg')}}" alt="Awesome Image">
                                            <div class="overlay-content"> </div>
                                        </a>
                                        <div class="title-box">
                                            <p class="date font-roboto ">June 14, 2022</p>
                                            <h5><a href="blog-single.html" class="font-josefin font-20">Modern Design
                                                    From Basics</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Sidebar Box-->
                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box boxBorder style-5 p-4 mt-30 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Newsletter </h4>
                                    <form action="#0" class="footer-default__subscrib-form mt-4 m-0">
                                        <div class="footer-input-box p-0">
                                            <input class="ps-3" type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="subscribe_btn">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!--End Single Sidebar Box-->
                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box boxBorder style-6 p-4 mt-30 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Tags </h4>
                                    <ul class="popular-tag mt-4">
                                        <li><a href="blog.html" class="font-roboto">Tools</a></li>
                                        <li><a href="blog.html" class="font-roboto">Store</a></li>
                                        <li><a href="blog.html" class="font-roboto">Decoration</a></li>
                                        <li><a href="blog.html" class="font-roboto">Online</a></li>
                                        <li><a href="blog.html" class="font-roboto">Furnitures</a></li>
                                        <li><a href="blog.html" class="font-roboto">Beauty</a></li>
                                        <li><a href="blog.html" class="font-roboto">Fashion</a></li>
                                        <li><a href="blog.html" class="font-roboto">Office</a></li>
                                        <li><a href="blog.html" class="font-roboto">Clothing</a></li>
                                        <li><a href="blog.html" class="font-roboto">Interior</a></li>
                                        <li><a href="blog.html" class="font-roboto">Good</a></li>
                                        <li><a href="blog.html" class="font-roboto">Standard</a></li>
                                        <li><a href="blog.html" class="font-roboto">Chair’s</a></li>
                                        <li><a href="blog.html" class="font-roboto">Living Room</a></li>
                                    </ul>
                                </div>
                                <!--End Single Sidebar Box-->
                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box boxBorder p-4 mt-30 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Follow Us </h4>
                                    <ul class="blog-sidebar-follow-us mt-30">
                                        <li>
                                            <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/images/blog/blog-sidebar-follow-us-img-1.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/images/blog/blog-sidebar-follow-us-img-2.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/images/blog/blog-sidebar-follow-us-img-3.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/images/blog/blog-sidebar-follow-us-img-4.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/images/blog/blog-sidebar-follow-us-img-5.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/images/blog/blog-sidebar-follow-us-img-6.jpg')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--End Single Sidebar Box-->
                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box style-8 mt-30 wow fadeInUp animated">
                                    <div class="blog-sidebar-add-banner">
                                        <img src="{{asset('assets/images/blog/blog-sidebar-add-banner.jpg')}}" alt="">
                                        <div class="blog-sidebar-add-banner-content">
                                            <h4 class="font-josefin color-white">AD BANNER</h4>
                                            <p class="font-roboto color-textwhite">Size: 370X450px</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Sidebar Box-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Blog Page-->

        </div>
        <!-- End Body Container -->
@include("sitepartials.footer")
