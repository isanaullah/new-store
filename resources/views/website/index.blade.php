@include("sitepartials.header")
        <!-- Body Container -->
        <div class="page-content overflow-hidden">

            <!-- Home One Hero-banner Start -->
            <section class="hero-area">
                <div class="sliderParent position-relative">
                    <div class="home-slideshow globalSlider" data-slick='{"dots": false, "autoplay": true, "infinite": true,  "slidesToShow": 1, "slidesToScroll": 1,
                        "fade": true, "cssEase": "linear", "arrows": false, "autoplaySpeed": 4000, "pauseOnHover": false,
                        "responsive":[
                        {
                            "breakpoint": 991,
                            "settings":{
                                "arrows": false
                            }
                        }
                        ]}'>

                        @if($banner->count() > 0)
                            @foreach($banner as $bannerItem)
                                <div class="slider-item">
                                    <div class="common-contentBox overlayBlack">
                                        <img class="w-100  heightr100" src="{{asset('storage/'.$bannerItem->image)}}" alt="{{ $bannerItem->title }}">
                                        <div class="absolute-content d-flex align-items-center">
                                            <div class="container">
                                                <div class="row h-100 align-items-start justify-content-center">
                                                    <div class="col-lg-6 col-md-9">
                                                        <div class="wrap-content-in">
                                                            <div class="wrap-caption text-center mt-4 px-2">
                                                                <h6 class="text-uppercase color-white fw-600 font-poppins wow style2 fadeInUp"
                                                                    data-wow-delay="0.2s" data-wow-duration="0.4s">
                                                                    {{ $bannerItem->meta_desc ?? 'New fashion trend' }}
                                                                </h6>
                                                                <h2 class="mega-title2 text-uppercase pt-1 mt-1 fw-600 color-white animation font-poppins style2 wow animated fadeInUp"
                                                                    data-wow-delay="0.2s" data-wow-duration="0.4s">
                                                                    {{ $bannerItem->title }}
                                                                </h2>
                                                                <div class="ss-btnWrap pt-3 mt-1 animation style2 wow animated fadeInUp"
                                                                    data-wow-delay="0.4s" data-wow-duration="0.4s">
                                                                    <a class="btn-primary redstyle border-0 mt-2" href="{{route('product.listing')}}">
                                                                        <span>explore now</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Fallback banner if no banners in database -->
                            <div class="slider-item">
                                <div class="common-contentBox overlayBlack">
                                    <img class="w-100  heightr100" src="{{asset('assets/frontend/images/home-7/banner-1.png')}}" alt="Default Banner">
                                    <div class="absolute-content d-flex align-items-center">
                                        <div class="container">
                                            <div class="row h-100 align-items-start justify-content-center">
                                                <div class="col-lg-6 col-md-9">
                                                    <div class="wrap-content-in">
                                                        <div class="wrap-caption text-center mt-4 px-2">
                                                            <h6 class="text-uppercase color-white fw-600 font-poppins wow style2 fadeInUp"
                                                                data-wow-delay="0.2s" data-wow-duration="0.4s">
                                                                New fashion trend
                                                            </h6>
                                                            <h2 class="mega-title2 text-uppercase pt-1 mt-1 fw-600 color-white animation font-poppins style2 wow animated fadeInUp"
                                                                data-wow-delay="0.2s" data-wow-duration="0.4s">
                                                                Premium Fashion
                                                            </h2>
                                                            <div class="ss-btnWrap pt-3 mt-1 animation style2 wow animated fadeInUp"
                                                                data-wow-delay="0.4s" data-wow-duration="0.4s">
                                                                <a class="btn-primary redstyle border-0 mt-2" href="{{route('product.listing')}}">
                                                                    <span>explore now</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="slick-arrow-container"></div>
                </div>
            </section>
            <!-- Home One Hero-banner End -->

            <!-- features-catagory Start -->
            <section class="features-catagory pt-60 pb-60">
                <div class="container">
                    <div class="row mt--30">
                        <div class="col-md-6 mt-30">
                            <div class="common-contentBox h-100 hoverScale effect-three d-block overflow-hidden position-relative wow animated fadeInup"
                                data-wow-delay="0.3s" data-wow-duration="0.4s">
                                <img class="d-lg-block h-100 of w-100" src="{{asset('assets/frontend/images/home-7/cat-1.png')}}"
                                    alt="image">
                                <div class="absolute-content d-flex align-items-center justify-content-end">
                                    <div class="wrap-content-in m-0">
                                        <div class="wrap-caption ps-lg-5">
                                            <h6 class="font-poppins font-20 colorRed fw-600">Shop & Save</h6>
                                            <h3 class="font-poppins fw-500 font-36 pt-2">Exclusive Party <br> Fashion
                                            </h3>
                                            <a href="shop-grid-left-sidebar.html"
                                                class="d-inline-block mt-lg-3 mt-2 animationLine redaniline font-14 text-uppercase fw-500 font-poppins hoverRed colorrBlack">
                                                Explore now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-30">
                            <div class="common-contentBox hoverScale effect-three d-block overflow-hidden position-relative wow animated fadeInup"
                                data-wow-delay="0.3s" data-wow-duration="0.4s">
                                <img class="d-lg-block h260 w-100" src="{{asset('assets/frontend/images/home-7/cat-2.png')}}" alt="image">
                                <div class="absolute-content d-flex align-items-center">
                                    <div class="wrap-content-in m-0">
                                        <div class="wrap-caption ps-lg-5">
                                            <h6 class="font-poppins font-20 color-white colorRed fw-600">20% Off</h6>
                                            <h3 class="font-poppins fw-500 color-white font-36 pt-2">Man Fashion</h3>
                                            <a href="shop-grid-left-sidebar.html"
                                                class="d-inline-block mt-lg-3 mt-2 color-white animationLine redaniline font-14 text-uppercase fw-500 font-poppins hoverRed">
                                                Explore now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="common-contentBox mt-30 hoverScale effect-three d-block overflow-hidden position-relative wow animated fadeInup"
                                data-wow-delay="0.3s" data-wow-duration="0.4s">
                                <img class="d-lg-block h260 w-100" src="{{asset('assets/frontend/images/home-7/cat-3.png')}}" alt="image">
                                <div class="absolute-content d-flex align-items-center justify-content-end">
                                    <div class="wrap-content-in m-0">
                                        <div class="wrap-caption ps-lg-5">
                                            <h6 class="font-poppins font-20 color-white fw-600">New Products</h6>
                                            <h3 class="font-poppins fw-500 color-white font-36 pt-2">Sports Meter</h3>
                                            <a href="shop-grid-left-sidebar.html"
                                                class="d-inline-block mt-lg-3 mt-2 color-white animationLine redaniline font-14 text-uppercase fw-500 font-poppins hoverRed">
                                                Explore now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-catagory End-->

            <!-- products start -->
            <section class="products pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="wrap-caption p-0 pb-lg-3 pb-2 text-center">
                                <h4 class="margintop--7 fw-400 text-uppercase font-poppins wow fadeInUp animated"
                                    data-wow-delay="0.3s" data-wow-duration="0.4s">
                                    INSPIRE PRODUCTS
                                </h4>
                                <p class="pt-2 font-14 font-rubik wow fadeInUp animated" data-wow-delay="0.3s"
                                    data-wow-duration="0.4s">
                                    Discover our exquisite collection of jewelry pieces crafted with elegance and precision.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" id="products-container">
                        @forelse($products as $product)
                            @include('partials.product-card', compact('product'))
                        @empty
                            <div class="col-12 text-center">
                                <p class="font-14 font-rubik">No products available</p>
                            </div>
                        @endforelse
                        <div class="col-12 text-center mt-40">
                            @if($products->hasMorePages())
                                <button class="btn-primary redtransparent font-rubik fw-500 mt-2" id="load-more-btn" data-page="2">
                                    <span>LOAD MORE</span>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <!-- products end -->

            <!-- Blog Start -->
            <section class="blog pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="wrap-caption p-0 pb-lg-3 pb-2 text-center">
                                <h4 class="margintop--7 fw-400 text-uppercase font-poppins wow fadeInUp animated"
                                    data-wow-delay="0.3s" data-wow-duration="0.4s">
                                    LASTEST STORY
                                </h4>
                                <p class="pt-2 font-14 font-rubik wow fadeInUp animated" data-wow-delay="0.3s"
                                    data-wow-duration="0.4s">
                                    Discover the latest insights and stories about jewelry trends and styling tips.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @forelse($blogs as $blog)
                            <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp animated">
                                <div class="blog-three__single hoverScale mt-30 ">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="blog-three__single-img d-block overflow-hidden">
                                        <img src="{{asset('storage/' . $blog->image)}}" alt="{{ $blog->title }}">
                                    </a>
                                    <div class="blog-three__single-content mt-3">
                                        <p class="font-12 font-rubik text-uppercase">BY {{ $setting->site_author ?? 'Admin' }} / {{ $blog->created_at->format('d M, Y') }}</p>
                                        <h4 class="lh-1"><a href="{{ route('blog.show', $blog->slug) }}" class="font-20 font-poppins hoverRed fw-400">{{ $blog->title }}</a></h4>
                                        <ul class="meta mt-2 pt-1 d-flex align-items-center">
                                            <li class="d-flex align-items-center me-3 pe-2"> <span
                                                    class="colorRed font-12 lh-0 me-1 pe-1"> <i
                                                        class="flaticon-editing"></i> </span> <span
                                                    class="font-rubik font-12 text-uppercase colorrBlack"> {{ $blog->category->name ?? 'Blog' }}
                                                </span> </li>
                                            <li class="d-flex align-items-center"> <span
                                                    class="colorRed font-12 lh-0 me-1 pe-1"> <i
                                                        class="flaticon-comment"></i> </span> <span
                                                    class="font-rubik font-12 text-uppercase colorrBlack"> 0 comment
                                                </span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p class="font-14 font-rubik">No blogs available</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
            <!-- Blog End -->

            <!-- SUBSCRIBE Start -->
            <section class="subscribebg mt-60 pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="wrap-caption p-0 pb-lg-3 pb-2 text-center">
                                <h4 class="margintop--7 fw-400 text-uppercase font-poppins wow fadeInUp animated"
                                    data-wow-delay="0.3s" data-wow-duration="0.4s">
                                    SUBSCRIBE & GET UPTO 20% OFF
                                </h4>
                                <p class="pt-2 font-14 font-rubik wow fadeInUp animated" data-wow-delay="0.3s"
                                    data-wow-duration="0.4s">
                                    Herb yielding after divided us living winged evening shall morning
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-30">
                            <form action="#0" class="newsletterBox wow animated fadeInUp" data-wow-duration="0.4s">
                                <div
                                    class="newsletter-input-group creativeN border-0 d-flex justify-content-between align-items-center">
                                    <input type="email" class="form-control me-2 w-100 font-poppins"
                                        placeholder="Enter Your Email Address Here">
                                    <button type="submit" class="btn-primary font-poppins redstyle">
                                        <span>Subscribe</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SUBSCRIBE End -->

            <!-- Partner Start -->
            <div class="partner borderBtm pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12 p-0 wow animated fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.4s">
                            <div class="sliderParent globalarrow roundarrow mobileArrow position-relative">
                                <div class="globalSlider" data-slick='{"spaceBetween": 30, "slidesToShow": 4, "cssEase": "linear",  "infinite": true, "autoplay": true,
                                "pauseOnHover": false, "autoplaySpeed": 6000, "centerMode": false, "dots": false, "slidesToScroll": 1, "arrows": true,
                                    "responsive":[
                                    {
                                        "breakpoint": 1199,
                                        "settings":{
                                            "slidesToShow": 3
                                        }
                                    },
                                    {
                                        "breakpoint": 767,
                                        "settings":{
                                            "slidesToShow": 2
                                        }
                                    }
                                 ]}'>

                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner1.png')}}" alt="">
                                    </div>
                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner2.png')}}" alt="">
                                    </div>
                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner3.png')}}" alt="">
                                    </div>
                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner4.png')}}" alt="">
                                    </div>
                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner1.png')}}" alt="">
                                    </div>
                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner2.png')}}" alt="">
                                    </div>
                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner3.png')}}" alt="">
                                    </div>
                                    <div
                                        class="singlePartner hoverScale ms-2 me-2 d-flex justify-content-center align-items-center ">
                                        <img src="{{asset('assets/frontend/images/home-7/partner4.png')}}" alt="">
                                    </div>

                                </div>
                                <div class="slick-arrow-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- products-tab end -->

        </div>
        <!-- End Body Container -->
@include("sitepartials.footer")

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loadMoreBtn = document.getElementById('load-more-btn');
    const productsContainer = document.getElementById('products-container');

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            const page = this.getAttribute('data-page');
            const url = "{{ route('load.more.products') }}?page=" + page;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Insert new products before the load more button
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = data.html;
                    const newProducts = tempDiv.querySelectorAll('.col-lg-3');

                    newProducts.forEach(product => {
                        productsContainer.insertBefore(product, loadMoreBtn.parentElement);
                    });

                    // Update page number
                    if (data.has_more) {
                        loadMoreBtn.setAttribute('data-page', data.next_page);
                    } else {
                        // Hide load more button if no more pages
                        loadMoreBtn.parentElement.style.display = 'none';
                    }
                })
                .catch(error => console.error('Error loading products:', error));
        });
    }
});
</script>
