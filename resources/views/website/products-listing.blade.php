@include("sitepartials.header")

        <!-- Body Container -->
        <div class="page-content overflow-hidden">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(assets/images/innerpage/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content pb-60 margintop--5 text-center wow fadeInUp animated">
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

                                    @forelse($categories as $category)
                                    <div class="gridCategoryBox text-center">
                                        <a href="{{ route('product.listing', ['category' => $category->id]) }}" class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
                                            </div>
                                        </a>
                                        <div class="title">
                                            <a href="{{ route('product.listing', ['category' => $category->id]) }}" class="fw-600 font-josefin">
                                                <h6 class="fw-600 font-josefin">{{ $category->name }}</h6>
                                            </a>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="gridCategoryBox text-center">
                                        <p>No categories available</p>
                                    </div>
                                    @endforelse

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
                        <div class="col-xl-12">
                            <div
                                class="shop-grid-page-top-info d-flex flex-sm-row flex-column justify-content-sm-between justify-content-center">
                                <div class="mb-3 font-roboto wow fadeInUp animated">
                                    <p>Showing {{ $products->firstItem() ?? 0 }}–{{ $products->lastItem() ?? 0 }} of {{ $products->total() }} Results</p>
                                </div>
                                <div class="mb-3 wow fadeInUp animated">
                                    <div class="short-by">
                                        <form method="GET" id="sortForm">
                                            <select class="form-select pselect" name="sort" onchange="document.getElementById('sortForm').submit()">
                                                <option value="featured" {{ request('sort') == 'featured' ? 'selected' : '' }}>Featured</option>
                                                <option value="title_asc" {{ request('sort') == 'title_asc' ? 'selected' : '' }}>Alphabetically, A-Z</option>
                                                <option value="title_desc" {{ request('sort') == 'title_desc' ? 'selected' : '' }}>Alphabetically, Z-A</option>
                                                <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price, low to high</option>
                                                <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price, high to low</option>
                                                <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Date, new to old</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        @forelse($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-30">
                            <div class="product-item">
                                <div class="product-image-wrapper">
                                    <a class="d-block" href="{{ route('product.show', $product->slug) }}">
                                        <img class="normal-image" src="{{asset('assets/frontend/images/home-6/products-2.png')}}"
                                            alt="{{ $product->title }}">
                                        <img class="hover-image changeimage" src="{{asset('assets/frontend/images/home-6/products-2.png')}}"
                                            alt="{{ $product->title }}">
                                    </a>
                                    @if ($product->sale_price && $product->price > 0)
                                    <span class="badge bgBage1 font-12 font-roboto radious50">
                                        -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                    </span>
                                    @endif
                                    <ul class="product-button-set topstyle style4 d-lg-inline-flex d-none">
                                        <li class="product-button">
                                            <a href="wishlist.html" class="buttonLInk radious50">
                                                <i class="flaticon-heart"></i>
                                                <span class="hoverText"> Wishlist </span>
                                            </a>
                                        </li>
                                        {{-- <li class="product-button">
                                            <a href="compare.html" class="buttonLInk radious50">
                                                <i class="flaticon-left-and-right-arrows"> </i>
                                                <span class="hoverText"> Compare </span>
                                            </a>
                                        </li> --}}
                                        <li class="product-button">
                                            <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"
                                                class="buttonLInk radious50">
                                                <i class="flaticon-view"></i>
                                                <span class="hoverText"> Quick View </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit"
                                        class="btn-primary addBtn d-flex align-items-center justify-content-center text-uppercase font-14 fw-500">
                                        Add To Cart
                                    </button>
                                </form>
                                </div>
                                <div class="product-content mt-2 pt-2 text-center position-relative">
                                    <p class="font-roboto font-12 fw-400">{{ $product->category->name ?? 'Product' }}</p>
                                    <a class="d-block pt-1" href="{{ route('product.show', $product->slug) }}">
                                        <h6 class="product-title font-josefin font-18 fw-600">
                                            {{ $product->title }}
                                        </h6>
                                    </a>
                                    <div class="product-price pt-1 d-flex align-items-center justify-content-center">
                                        @if ($product->sale_price)
                                            <span class="compared-price colorBage1 font-14 font-josefin fw-500" style="text-decoration: line-through;">
                                                ${{ number_format($product->price, 2) }}
                                            </span>
                                            <span class="compared-price colorBage1 font-14 font-josefin fw-500 ms-2">
                                                ${{ number_format($product->sale_price, 2) }}
                                            </span>
                                        @else
                                            <span class="compared-price colorBage1 font-14 font-josefin fw-500">
                                                ${{ number_format($product->price, 2) }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <p class="text-center">No products found</p>
                        </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if($products->hasPages())
                            <ul class="pagination mt-60 justify-content-center wow fadeInUp animated">
                                @if($products->onFirstPage())
                                    <li class="next disabled"><a href="#"><i class="flaticon-back-1" aria-hidden="true"></i></a></li>
                                @else
                                    <li class="next"><a href="{{ $products->previousPageUrl() }}"><i class="flaticon-back-1" aria-hidden="true"></i></a></li>
                                @endif

                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                    <li><a href="{{ $url }}" class="{{ $page == $products->currentPage() ? 'active' : '' }}">{{ $page }}</a></li>
                                @endforeach

                                @if($products->hasMorePages())
                                    <li class="next"><a href="{{ $products->nextPageUrl() }}"><i class="flaticon-next-1" aria-hidden="true"></i></a></li>
                                @else
                                    <li class="next disabled"><a href="#"><i class="flaticon-next-1" aria-hidden="true"></i></a></li>
                                @endif
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <!--End product-grid-->

        </div>
        <!-- End Body Container -->
@include("sitepartials.footer")
