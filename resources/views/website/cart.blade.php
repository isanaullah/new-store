@include("sitepartials.header")

@php
use Gloudemans\Shoppingcart\Facades\Cart;
@endphp

<div class="page-content overflow-hidden">
    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/innerpage/breadcum-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-content margintop--5 text-center wow fadeInUp animated">
                        <h2 class="fw-700">Shopping Cart</h2>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="flaticon-home pe-2"></i>Home</a></li>
                                <li> <i class="flaticon-next"></i> </li>
                                <li class="active">Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style2-->

    <!--Start cart area-->
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(Cart::count() > 0)
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="cart-table-box">
                            <div class="table-outer">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="font-roboto">Product Name</th>
                                            <th class="price font-roboto">Price</th>
                                            <th class="font-roboto">Quantity</th>
                                            <th class="font-roboto">Subtotal</th>
                                            <th class="hide-me font-roboto"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::content() as $item)
                                            <tr>
                                                <td>
                                                    <div class="thumb-box">
                                                        <a href="{{ route('product.show', $item->options->slug) }}" class="thumb">
                                                            <img src="{{ $item->options->image ? asset('storage/' . $item->options->image) : asset('assets/images/placeholder.png') }}"
                                                                alt="{{ $item->name }}">
                                                        </a>
                                                        <a href="{{ route('product.show', $item->options->slug) }}" class="title">
                                                            <h5 class="font-josefin">{{ $item->name }}</h5>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>${{ number_format($item->price, 2) }}</td>
                                                <td class="qty">
                                                    <div class="qtySelector text-center">
                                                        <span class="decreaseQty" onclick="updateCartItem('{{ $item->rowId }}', {{ $item->qty - 1 }})">
                                                            <i class="flaticon-minus-sign"></i>
                                                        </span>
                                                        <input type="number" class="qtyValue" id="qty_{{ $item->rowId }}" value="{{ $item->qty }}" min="1" onchange="updateCartItem('{{ $item->rowId }}', this.value)">
                                                        <span class="increaseQty font-14" onclick="updateCartItem('{{ $item->rowId }}', {{ $item->qty + 1 }})">
                                                            <i class="flaticon-plus"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="sub-total">${{ number_format($item->subtotal, 2) }}</td>
                                                <td>
                                                    <div class="remove" onclick="removeCartItem('{{ $item->rowId }}')">
                                                        <i class="flaticon-close"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-button-box d-flex align-items-center justify-content-between flex-row flex-wrap">
                            <div class="apply-coupon d-flex align-items-center flex-wrap wow fadeInUp animated">
                                <div class="apply-coupon-input-box mt-30">
                                    <input type="text" name="coupon-code" placeholder="Coupon Code">
                                </div>
                                <div class="apply-coupon-button mt-30">
                                    <button class="btn--primary h52 style2" type="submit">Apply Coupon</button>
                                </div>
                            </div>
                            <div class="cart-button-box-right wow fadeInUp animated">
                                <a href="{{ route('home') }}" class="btn--primary mt-30">Continue Shopping</a>
                                <button class="btn--primary mt-30" onclick="updateCart()">Update Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margintop--5 pt-120">
                    <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                        <div class="cart-total-box">
                            <div class="inner-title">
                                <h4 class="font-josefin">Cart Totals</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                        <div class="cart-total-box mt-30">
                            <div class="table-outer">
                                <table class="cart-table2">
                                    <thead class="cart-header clearfix">
                                        <tr>
                                            <th colspan="1" class="shipping-title font-roboto">Shipping</th>
                                            <th class="price font-roboto">${{ number_format(Cart::subtotal(), 2) }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="shipping font-roboto"> Shipping </td>
                                            <td class="selact-box1">
                                                <ul class="shop-select-option-box-1">
                                                    <li>
                                                        <input type="radio" name="shipping" id="option_1" value="free" checked>
                                                        <label for="option_1"><span></span>
                                                            Free Shipping
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="shipping" id="option_2" value="flat">
                                                        <label for="option_2"><span></span>Flat Rate</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="shipping" id="option_3" value="pickup">
                                                        <label for="option_3"><span></span>Local Pickup</label>
                                                    </li>
                                                </ul>
                                                <div class="inner-text font-roboto">
                                                    <p>Shipping options will be updated during checkout</p>
                                                </div>
                                                <h4 class="font-roboto">Calculate Shipping</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="total font-roboto">Total</h4>
                                            </td>
                                            <td class="subtotal">${{ number_format(Cart::total(), 2) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                        <div class="cart-check-out mt-30">
                            <h4 class="font-josefin font-24">Check Out</h4>
                            <ul class="cart-check-out-list font-roboto">
                                <li>
                                    <div class="left">
                                        <p>Subtotal</p>
                                    </div>
                                    <div class="right">
                                        <p>${{ number_format(Cart::subtotal(), 2) }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Shipping</p>
                                    </div>
                                    <div class="right">
                                        <p><span>Free:</span> $0.00</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Total Price:</p>
                                    </div>
                                    <div class="right">
                                        <p>${{ number_format(Cart::total(), 2) }}</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="checkout-button mt-30">
                                <a href="#" class="btn--primary w-100">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-xl-12">
                        <div class="empty-cart text-center py-5">
                            <i class="flaticon-shopping-bag" style="font-size: 64px; color: #ccc;"></i>
                            <h3 class="mt-4">Your cart is empty</h3>
                            <p class="text-muted">Looks like you haven't added anything to your cart yet.</p>
                            <a href="{{ route('home') }}" class="btn--primary mt-3">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!--End cart area-->
</div>

<script>
function updateCartItem(rowId, quantity) {
    if (quantity < 1) quantity = 1;

    fetch('{{ route("cart.update") }}', {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            rowId: rowId,
            quantity: quantity
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert(data.message || 'Error updating cart');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error updating cart');
    });
}

function removeCartItem(rowId) {
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

function updateCart() {
    location.reload();
}
</script>
@include("sitepartials.footer")
