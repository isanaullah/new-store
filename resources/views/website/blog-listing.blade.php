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
                                @forelse($blogs as $blog)
                                <!--Start Blog Page Single-->
                                <div class="blog-page-single wow fadeInUp animated">
                                    <div class="blog-page-img">
                                        <a href="{{ route('blog.show', $blog->slug) }}">
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                        </a>
                                        <div class="blog-page-date">
                                            <p class="font-josefin"><span class="font-josefin">{{ $blog->created_at->format('d') }}</span> {{ $blog->created_at->format('F') }}</p>
                                        </div>
                                    </div>
                                    <div class="blog-page-content">
                                        <ul class="blog-page-meta">
                                            <li class="font-roboto">{{ $blog->category->name ?? 'Blog' }}</li>
                                            <li class="font-roboto">By {{ $blog->instructor->name ?? 'Admin' }}</li>
                                        </ul>
                                        <h4 class="blog-page-title">
                                            <a class="font-josefin" href="{{ route('blog.show', $blog->slug) }}">
                                                {{ $blog->title }}
                                            </a>
                                        </h4>
                                        <p class="blog-page-text font-roboto">
                                            {{ Str::limit(strip_tags($blog->description), 200) }}
                                        </p>
                                        <div class="blog-page-continue-reading">
                                            <a class="font-josefin" href="{{ route('blog.show', $blog->slug) }}">Continue Reading..</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Page Single-->
                                @if(!$loop->last)
                                <div class="blog-page-single mt-30 wow fadeInUp animated">
                                    <div style="height: 20px;"></div>
                                </div>
                                @endif
                                @empty
                                <div class="blog-page-single wow fadeInUp animated">
                                    <div class="blog-page-content">
                                        <p class="font-roboto">No blog articles found.</p>
                                    </div>
                                </div>
                                @endforelse

                                <!-- Pagination -->
                                @if($blogs->hasPages())
                                <ul class="pagination justify-content-center mt-30 wow fadeInUp animated">
                                    @if($blogs->onFirstPage())
                                        <li class="next disabled"><a href="#"><i class="flaticon-back-1" aria-hidden="true"></i></a></li>
                                    @else
                                        <li class="next"><a href="{{ $blogs->previousPageUrl() }}"><i class="flaticon-back-1" aria-hidden="true"></i></a></li>
                                    @endif

                                    @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                        @if($page == $blogs->currentPage())
                                            <li><a href="#" class="active">{{ $page }}</a></li>
                                        @else
                                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    @if($blogs->hasMorePages())
                                        <li class="next"><a href="{{ $blogs->nextPageUrl() }}"><i class="flaticon-next-1" aria-hidden="true"></i></a></li>
                                    @else
                                        <li class="next disabled"><a href="#"><i class="flaticon-next-1" aria-hidden="true"></i></a></li>
                                    @endif
                                </ul>
                                @endif
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
                                        <div class="single-sidebar_author_content p-4">
                                            <h4 class="font-24 titleAfter d-inline-block font-josefin">{{ $setting->site_author ?? 'Admin' }}</h4>
                                            <p class="font-roboto">
                                                {{ $setting->site_author_description ?? 'Author bio not available.' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Sidebar Box-->

                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box boxBorder p-4 mt-30 style-3 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin"> Categories</h4>
                                    <ul class="categories-list">
                                        @forelse($categories as $cat)
                                        <li> <a href="{{ route('blog.category', $cat->slug) }}" class="font-roboto"> <span><i
                                                        class="flaticon-play-button-1"></i> {{ $cat->title }}</span> <span>
                                                    ({{ $cat->articles_count ?? 0 }})</span> </a> </li>
                                        @empty
                                        <li><p class="font-roboto">No categories available</p></li>
                                        @endforelse
                                    </ul>
                                </div>
                                <!--End Single Sidebar Box-->

                                <!--Start Single Sidebar Box-->
                                <div class="sidebar-box boxBorder p-4 mt-30 style-4 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin"> Recent Posts </h4>
                                    @forelse($recentposts as $post)
                                    <div class="sidebar-blog-post"> <a href="{{ route('blog.show', $post->slug) }}" class="img-box">
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                            <div class="overlay-content"> </div>
                                        </a>
                                        <div class="title-box">
                                            <p class="date font-roboto">{{ $post->created_at->format('M d, Y') }}</p>
                                            <h5><a href="{{ route('blog.show', $post->slug) }}" class="font-josefin font-20">{{ $post->title }}</a></h5>
                                        </div>
                                    </div>
                                    @empty
                                    <p class="font-roboto">No recent posts available</p>
                                    @endforelse
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

<!-- SEO Schema Markup -->
@if(isset($schemaMarkup))
<script type="application/ld+json">
{!! $schemaMarkup !!}
</script>
@endif
