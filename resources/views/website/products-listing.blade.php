@include("sitepartials.header")
        <!-- Body Container -->
        <div class="page-content overflow-hidden">

            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(assets/images/innerpage/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content pb-60 margintop--5 text-center wow fadeInUp animated">
                                <h2 class="fw-700">Shop Grid</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li> <i class="flaticon-next"></i> </li>
                                        <li class="active">Shop Grid</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->

            <!--Start Product Categories One-->
            <section class="grid-category pt-3 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 wow fadeInUp animated">
                            <div class="sliderParent globalarrow roundarrow mobileArrow position-relative">
                                <div class="globalSlider" data-slick='{"spaceBetween": 30, "slidesToShow": 6, "cssEase": "linear",  "infinite": true, "autoplay": true,
                                "pauseOnHover": false, "autoplaySpeed": 3000, "centerMode": false, "dots": false, "slidesToScroll": 1, "arrows": true,
                                    "responsive":[
                                    {
                                        "breakpoint": 1199,
                                        "settings":{
                                            "slidesToShow": 4
                                        }
                                    },
                                    {
                                        "breakpoint": 767,
                                        "settings":{
                                            "slidesToShow": 3
                                        }
                                    },
                                    {
                                        "breakpoint": 500,
                                        "settings":{
                                            "slidesToShow": 2
                                        }
                                    }
                                ]}'>

                                    <div class="gridCategoryBox text-center">
                                        <a href="shop-grid.html" class="img-box">
                                            <div class="inner">
                                                <img src="{{asset('assets/frontend/images/innerpage/pc-1.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="shop-grid.html" class="fw-600 font-josefin">
                                                <h6 class="fw-600 font-josefin">Accessories</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gridCategoryBox text-center">
                                        <a href="shop-grid.html" class="img-box">
                                            <div class="inner">
                                                <img src="{{asset('assets/frontend/images/innerpage/pc-2.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="shop-grid.html" class="fw-600 font-josefin">
                                                <h6 class="fw-600 font-josefin">Furnitures</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gridCategoryBox text-center">
                                        <a href="shop-grid.html" class="img-box">
                                            <div class="inner">
                                                <img src="{{asset('assets/frontend/images/innerpage/pc-3.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="shop-grid.html">
                                                <h6 class="fw-600 font-josefin">Jewellery</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gridCategoryBox text-center">
                                        <a href="shop-grid.html" class="img-box">
                                            <div class="inner">
                                                <img src="{{asset('assets/frontend/images/innerpage/pc-4.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="shop-grid.html">
                                                <h6 class="fw-600 font-josefin">Shoes</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gridCategoryBox text-center">
                                        <a href="shop-grid.html" class="img-box">
                                            <div class="inner">
                                                <img src="{{asset('assets/frontend/images/innerpage/pc-5.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="shop-grid.html">
                                                <h6 class="fw-600 font-josefin">Electronics</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gridCategoryBox text-center">
                                        <a href="shop-grid.html" class="img-box">
                                            <div class="inner">
                                                <img src="{{asset('assets/frontend/images/innerpage/pc-6.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="shop-grid.html">
                                                <h6 class="fw-600 font-josefin">Fashion</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gridCategoryBox text-center">
                                        <a href="shop-grid.html" class="img-box">
                                            <div class="inner">
                                                <img src="{{asset('assets/frontend/images/innerpage/pc-3.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="shop-grid.html">
                                                <h6 class="fw-600 font-josefin">Jewellery</h6>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="slick-arrow-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Product Categories One-->

            <!--Start product-grid-->
            <section class="product-grid pt-60 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 d-lg-flex d-none">
                            <div class="sidebar-content-box">
                                <form action="#0" class="m-0 wow fadeInUp animated">
                                    <div class="footer-input-box nborder p-0">
                                        <input class="ms-3 w-100" type="email" placeholder="Email address" name="email">
                                        <button type="submit" class="subscribe_btn">
                                            <i class="flaticon-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="sidebar-box mt-4 pt-2 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Select Categories</h4>
                                    <div class="checkbox-item font-roboto mt-2 pt-1">
                                        <form>
                                            <div class="form-group"> <input type="checkbox" id="bedroom"> <label
                                                    for="bedroom">Bedroom</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="decoration"> <label
                                                    for="decoration">Decoration</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="kitchen"> <label
                                                    for="kitchen">Kitchen</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="clothing"> <label
                                                    for="clothing">Clothing</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="office"> <label
                                                    for="office">Office</label> </div>
                                            <div class="form-group m-0"> <input type="checkbox" id="lighting"> <label
                                                    for="lighting">Lighting</label> </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="mt-4 mb-4">
                                <div class="sidebar-box wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Color Option</h4>
                                    <ul class="colorOptionSellect font-roboto mt-2">
                                        <li> <a href="#0" class="color-option-single"> <span> Black</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single active bg2"> <span> Yellow</span>
                                            </a> </li>
                                        <li> <a href="#0" class="color-option-single bg3"> <span> Red</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg4"> <span> Blue</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg5"> <span> Green</span> </a>
                                        </li>
                                        <li> <a href="#0" class="color-option-single bg6"> <span> Olive</span> </a>
                                        </li>
                                        <li> <a href="#0" class="color-option-single bg7"> <span> Lime</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg8"> <span> Pink</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg9"> <span> Cyan</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg10"> <span> Magenta</span> </a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="mt-4 mb-4">
                                <div class="sidebar-box wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Filter By Price</h4>
                                    <div class="slider-box font-roboto pt-1 mt-3">
                                        <div id="price-range" class="slider"></div>
                                        <div class="output-price">
                                            <label for="priceRange">Price:</label>
                                            <input type="text" id="priceRange" readonly>
                                        </div>
                                        <button class="filterbtn" type="submit"> Filter </button>
                                    </div>
                                </div>
                                <hr class="mt-4 mb-4">
                                <div class="sidebar-box wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Tags </h4>
                                    <ul class="popular-tag mt-3">
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
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div
                                        class="shop-grid-page-top-info d-flex flex-md-row flex-column align-items-center justify-content-sm-between justify-content-center">
                                        <div class="mb-3 font-roboto wow fadeInUp animated">
                                            <p>Showing 1–12 of 50 Results</p>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center wow fadeInUp animated">
                                            <div class="short-by me-3">
                                                <select class="form-select pselect" aria-label="Default select example">
                                                    <option selected>Featured</option>
                                                    <option value="1">Best selling</option>
                                                    <option value="2">Alphabetically, A-Z</option>
                                                    <option value="3">Alphabetically, Z-A</option>
                                                    <option value="4">Price, low to high</option>
                                                    <option value="5">Price, high to low</option>
                                                    <option value="5">Date, old to new</option>
                                                </select>
                                            </div>
                                            <ul
                                                class="product-view-style d-flex justify-content-md-between justify-content-center">
                                                <li>
                                                    <a href="shop-grid.html" class="viewItem active">
                                                        <i class="flaticon-pixels"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html" class="viewItem">
                                                        <i class="flaticon-list"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="viewItem d-lg-none d-flex" href="#0">
                                                        <i class="flaticon-filter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-10.png')}}"
                                                    alt="product">
                                                <img class="hover-image changeimage"
                                                    src="{{asset('assets/frontend/images/home-6/products-24.png')}}" alt="product">
                                            </a>
                                            <span class="badge bgBage1 font-12 font-roboto radious50">
                                                -25%
                                            </span>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Trendy stylish shoes
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $165.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-11.png')}}"
                                                    alt="product">
                                                <img class="hover-image changeimage"
                                                    src="{{asset('assets/frontend/images/home-6/products-22.png')}}" alt="product">
                                            </a>
                                            <span class="badge bgBage1 font-12 font-roboto radious50">
                                                Hot
                                            </span>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Exclusive Sneakers
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $165.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img src="{{asset('assets/frontend/images/home-6/products-12.png')}}" alt="product">
                                            </a>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Fashionable Sneakers
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $175.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-13.png')}}"
                                                    alt="product">
                                                <img class="hover-image changeimage"
                                                    src="{{asset('assets/frontend/images/home-6/products-6.png')}}" alt="product">
                                            </a>
                                            <span class="badge bgBlack font-12 font-roboto radious50">
                                                New
                                            </span>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Summer Shoes
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $145.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img src="{{asset('assets/frontend/images/home-6/products-14.png')}}" alt="product">
                                            </a>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Outdoor Sports Shoes
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $165.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-15.png')}}"
                                                    alt="product">
                                                <img class="hover-image changeimage"
                                                    src="{{asset('assets/frontend/images/home-6/products-24.png')}}" alt="product">
                                            </a>
                                            <span class="badge bgBage1 font-12 font-roboto radious50">
                                                -30%
                                            </span>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Sport Sneakers
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $212.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img src="{{asset('assets/frontend/images/home-6/products-16.png')}}" alt="product">
                                            </a>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Apex Sneakers
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $275.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-17.png')}}"
                                                    alt="product">
                                                <img class="hover-image changeimage"
                                                    src="{{asset('assets/frontend/images/home-6/products-25.png')}}" alt="product">
                                            </a>
                                            <span class="badge bgBage1 font-12 font-roboto radious50">
                                                Hot
                                            </span>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Fashionable Sneakers
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $225.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-1.png')}}"
                                                    alt="product">
                                                <img class="hover-image changeimage"
                                                    src="{{asset('assets/frontend/images/home-6/products-7.png')}}" alt="product">
                                            </a>
                                            <span class="badge bgBage1 font-12 font-roboto radious50">
                                                -30%
                                            </span>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Apex Sneakers
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $159.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img src="{{asset('assets/frontend/images/home-6/products-2.png')}}" alt="product">
                                            </a>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Sports Shoes
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $165.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-3.png')}}"
                                                    alt="product">
                                                <img class="hover-image changeimage"
                                                    src="{{asset('assets/frontend/images/home-6/products-8.png')}}" alt="product">
                                            </a>
                                            <span class="badge bgBlack font-12 font-roboto radious50">
                                                New
                                            </span>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Trendy stylish shoes
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $145.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-6 mt-30 wow fadeInUp animated">
                                    <div class="product-item">
                                        <div class="product-image-wrapper">
                                            <a class="d-block" href="shop-details-3.html">
                                                <img src="{{asset('assets/frontend/images/home-6/products-4.png')}}" alt="product">
                                            </a>
                                            <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                                <li class="product-button">
                                                    <a href="wishlist.html" class="buttonLInk radious50">
                                                        <i class="flaticon-heart"></i>
                                                        <span class="hoverText"> Wishlist </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="compare.html" class="buttonLInk radious50">
                                                        <i class="flaticon-left-and-right-arrows"> </i>
                                                        <span class="hoverText"> Compare </span>
                                                    </a>
                                                </li>
                                                <li class="product-button">
                                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                        class="buttonLInk radious50">
                                                        <i class="flaticon-view"></i>
                                                        <span class="hoverText"> Quick View </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <button
                                                class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-content mt-2 pt-2 text-center position-relative">
                                            <p class="font-roboto font-12 fw-400">Men Shoes</p>
                                            <a class="d-block pt-1" href="shop-details-3.html">
                                                <h6 class="product-title font-josefin font-18 fw-600">
                                                    Casual Shoes
                                                </h6>
                                            </a>
                                            <div
                                                class="product-price pt-1 d-flex align-items-center justify-content-center">
                                                <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                    $175.00
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="pagination mt-60 justify-content-center wow fadeInUp animated">
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
                        </div>
                    </div>
                </div>
            </section>
            <!--End product-grid-->
        </div>
        <!-- End Body Container -->
@include("sitepartials.footer")
