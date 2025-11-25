@include("sitepartials.header")
        <!-- Body Container -->
        <div class="page-content overflow-hidden">

            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url({{ asset('storage/' . $article->image) }});">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="breadcrumb-content margintop--5 text-center wow fadeInUp animated">
                                <h2 class="fw-700">
                                    {{ $article->title }}
                                </h2>
                                <div class="author-details wow fadeInUp  animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <h6
                                        class="color-white font-josefin justify-content-center d-flex align-items-center">
                                        <i class="flaticon-user"></i>Posted by: <span
                                            class="font-18 ps-2 color-white fw-500">{{ $instructor->name ?? 'Admin' }}</span></h6>
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
                                <div class="blog-single-content-box">
                                    <div class="blog-single-img wow fadeInUp animated">
                                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
                                        <div class="blog-page-date">
                                            <p class="font-josefin"><span class="font-josefin">{{ $article->created_at->format('d') }}</span> {{ $article->created_at->format('F') }}</p>
                                        </div>
                                    </div>
                                    <div class="blog-single-content">
                                        <div class="blog-single-text-1 font-roboto wow fadeInUp animated">
                                            {!! $article->description !!}
                                        </div>
                                        <div class="blog-single-quate">
                                            <div class="blog-single-quate-box">
                                                <div class="blog-single-quate-single">
                                                    <div class="blog-single-quate-quote wow fadeInLeft animated">
                                                        <i class="flaticon-right-quote"></i>
                                                    </div>
                                                    <div class="blog-single-quate-content wow fadeInRight animated">
                                                        <p class="blog-single-quate-content-text font-josefin">{{$setting->site_author_description}}</p>
                                                        <div class="blog-single-quate-author">
                                                            <h4 class="font-josefin font-24">{{$setting->site_author}}</h4>
                                                            <p class="font-roboto">Author</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-single-tag-share">
                                            <p class="blog-single-tags wow fadeInLeft animated">
                                                @if($article->tags)
                                                    @foreach(explode(',', $article->tags) as $tag)
                                                        <a href="{{ route('blog.listing') }}" class="font-roboto">{{ trim($tag) }}</a>
                                                    @endforeach
                                                @endif
                                            </p>
                                            <div class="blog-single-social-list wow fadeInRight animated">
                                                <h4 class="font-josefin ">Share:</h4>
                                                <div class="blog-single-social">
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="flaticon-facebook-app-symbol "></i>
                                                    </a>
                                                    <a href="https://www.youtube.com/" target="_blank">
                                                        <i class="flaticon-youtube"></i>
                                                    </a>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="flaticon-twitter"></i>
                                                    </a>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="flaticon-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @if($relatedPosts->count() > 0)
                                        <div class="blog-single-next-prev">
                                            @if($relatedPosts->count() > 0)
                                            <div class="blog-single-prev wow fadeInLeft animated">
                                                <a href="{{ route('blog.show', $relatedPosts[0]->slug) }}" class="blog-single-prev-img">
                                                    <img src="{{ asset('storage/' . $relatedPosts[0]->image) }}" alt="{{ $relatedPosts[0]->title }}">
                                                </a>
                                                <a href="{{ route('blog.show', $relatedPosts[0]->slug) }}" class="blog-single-prev-content">
                                                    <p class="font-roboto">Related Story</p>
                                                    <h5 class="font-josefin">{{ $relatedPosts[0]->title }}</h5>
                                                </a>
                                            </div>
                                            @endif
                                            @if($relatedPosts->count() > 1)
                                            <div class="blog-single-next wow fadeInRight animated">
                                                <a href="{{ route('blog.show', $relatedPosts[1]->slug) }}" class="blog-single-next-content">
                                                    <p class="font-roboto">Related Story</p>
                                                    <h5 class="font-josefin">{{ $relatedPosts[1]->title }}</h5>
                                                </a>
                                                <a href="{{ route('blog.show', $relatedPosts[1]->slug) }}" class="blog-single-next-img">
                                                    <img src="{{ asset('storage/' . $relatedPosts[1]->image) }}" alt="{{ $relatedPosts[1]->title }}">
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                        @endif
                                        <div class="blog-single-comment">
                                            <h4 class="blog-page-title font-josefin wow fadeInUp animated">
                                                Leave a Comments
                                            </h4>
                                            <p class="font-roboto wow fadeInUp animated">
                                                Your email address will not be published.
                                                Required fields are marked *
                                            </p>
                                            <form id="contact-form" name="contact_form" class="blog-single-comment-form" method="post">
                                                <div class="row">
                                                    <div class="col-xl-6 wow fadeInUp animated">
                                                        <div class="input-box"> <input type="text" name="form_name"
                                                                value="" placeholder="Enter Your Name*" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 wow fadeInUp animated">
                                                        <div class="input-box"> <input type="email" name="form_email"
                                                                value="" placeholder="Enter Your Email*" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 wow fadeInUp animated">
                                                        <div class="input-box two"> <textarea name="form_message"
                                                                placeholder="Type Your Comment" required=""></textarea>
                                                        </div>
                                                        <div class="button-box">
                                                            <button class="btn--primary style2 font-josefin"
                                                                type="submit">
                                                                Post Comment
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 mt-30 ">
                            <div class="sidebar-content-box">
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
                                <div class="sidebar-box boxBorder p-4 mt-30 style-3 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin"> Categories</h4>
                                    <ul class="categories-list">
                                        @forelse($categories as $category)
                                        <li> <a href="{{ route('blog.category', $category->slug) }}" class="font-roboto">
                                            <span><i class="flaticon-play-button-1"></i> {{ $category->title }}</span> <span>
                                                    ({{ $category->articles_count ?? 0 }})</span> </a> </li>
                                        @empty
                                        <li><p class="font-roboto">No categories available</p></li>
                                        @endforelse
                                    </ul>
                                </div>
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
                                <div class="sidebar-box boxBorder style-5 p-4 mt-30 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Newsletter </h4>
                                    <form action="#0" class="footer-default__subscrib-form mt-4 m-0">
                                        <div class="footer-input-box p-0">
                                            <input class="ps-3" type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="subscribe_btn font-josefin">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
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
                                <div class="sidebar-box boxBorder p-4 mt-30 wow fadeInUp animated">
                                    <h4 class="font-24 titleAfter d-inline-block font-josefin">Follow Us </h4>
                                    <ul class="blog-sidebar-follow-us mt-30">
                                        <li>
                                            <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/frontend/images/blog/blog-sidebar-follow-us-img-1.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/frontend/images/blog/blog-sidebar-follow-us-img-2.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/frontend/images/blog/blog-sidebar-follow-us-img-3.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/frontend/images/blog/blog-sidebar-follow-us-img-4.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/frontend/images/blog/blog-sidebar-follow-us-img-5.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li> <a href="#0"
                                                class="blog-sidebar-follow-us-img d-block hoverScale overflow-hidden">
                                                <img src="{{asset('assets/frontend/images/blog/blog-sidebar-follow-us-img-6.jpg')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-box style-8 mt-30 wow fadeInUp animated">
                                    <div class="blog-sidebar-add-banner">
                                        <img src="{{asset('assets/frontend/images/blog/blog-sidebar-add-banner.jpg')}}" alt="">
                                        <div class="blog-sidebar-add-banner-content">
                                            <h4 class="font-josefin color-white">AD BANNER</h4>
                                            <p class="font-roboto color-textwhite">Size: 370X450px</p>
                                        </div>
                                    </div>
                                </div>
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

@if(isset($breadcrumbsMarkup))
<script type="application/ld+json">
{!! $breadcrumbsMarkup !!}
</script>
@endif
