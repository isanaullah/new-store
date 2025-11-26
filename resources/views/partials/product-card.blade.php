<div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-30">
    <div class="product-item">
        <div class="product-image-wrapper radious5">
            <a class="d-block" href="{{ route('product.show', $product->slug) }}">
                <img class="normal-image" src="{{ $product->thumbnail ? asset('storage/' . $product->thumbnail) : asset('assets/images/placeholder.png') }}" alt="{{ $product->title }}">
                <img class="hover-image changeimage" src="{{ $product->thumbnail ? asset('storage/' . $product->thumbnail) : asset('assets/images/placeholder.png') }}" alt="{{ $product->title }}">
            </a>
            @if($product->sale_price)
                <span class="badge badgeRIght radious50 font-12 font-rubik radious2 bgBage1">
                    Sale
                </span>
            @else
                <span class="badge badgeRIght radious50 font-12 font-rubik radious2 bgBage1">
                    Hot
                </span>
            @endif
            <ul class="product-button-set style4 productBtmMiddle d-lg-inline-flex d-none">
                <li class="product-button">
                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button" class="buttonLInk radious50">
                        <i class="flaticon-loupe"></i>
                        <span class="hoverText"> Quick View </span>
                    </a>
                </li>
                <li class="product-button">
                    <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="buttonLInk radious50" style="background: none; border: none; padding: 0;">
                            <i class="flaticon-shopping-bag"></i>
                            <span class="hoverText"> Add to Cart </span>
                        </button>
                    </form>
                </li>
                <li class="product-button">
                    <a href="{{ route('cart') }}" class="buttonLInk radious50">
                        <i class="flaticon-heart"> </i>
                        <span class="hoverText"> Wishlist </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="product-content mt-3 text-center position-relative">
            <ul class="rating redrat font-12 justify-content-center align-items-center">
                <li> <i class="flaticon-star-1"></i> </li>
                <li> <i class="flaticon-star-1"></i> </li>
                <li> <i class="flaticon-star-1"></i> </li>
                <li> <i class="flaticon-star-1"></i> </li>
                <li class="colorGray"> <i class="flaticon-star-1"></i> </li>
            </ul>
            <a class="d-block pt-2 mt-1" href="{{ route('product.show', $product->slug) }}">
                <h6 class="product-title font-poppins hoverRed font-14 fw-500">
                    {{ $product->title }}
                </h6>
            </a>
            <div class="product-price d-flex align-items-center justify-content-center">
                @if($product->sale_price)
                    <span class="compared-price colorGray font-14 font-rubik fw-400" style="text-decoration: line-through;">
                        ${{ number_format($product->price, 2) }}
                    </span>
                    <span class="compared-price font-14 font-rubik fw-400 ms-2">
                        ${{ number_format($product->sale_price, 2) }}
                    </span>
                @else
                    <span class="compared-price colorGray font-14 font-rubik fw-400">
                        ${{ number_format($product->price, 2) }}
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>
