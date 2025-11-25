@include("sitepartials.header")
        <!-- Body Container -->
        <div class="page-content overflow-hidden">

            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(assets/images/innerpage/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content margintop--5 text-center wow fadeInUp animated">
                                <h2 class="fw-700">Cart</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
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
                                            <tr>
                                                <td>
                                                    <div class="thumb-box">
                                                        <a href="shop-details-3.html" class="thumb">
                                                            <img src="{{asset('assets/images/innerpage/cart-product-thumb-1.jpg')}}"
                                                                alt="">
                                                        </a> <a href="shop-details-3.html" class="title">
                                                            <h5 class="font-josefin"> Leather Bag </h5>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$250.00</td>
                                                <td class="qty">
                                                    <div class="qtySelector text-center">
                                                        <span class="decreaseQty">
                                                            <i class="flaticon-minus-sign"></i>
                                                        </span>
                                                        <input type="number" class="qtyValue" value="1">
                                                        <span class="increaseQty font-14">
                                                            <i class="flaticon-plus"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="sub-total">$500.00</td>
                                                <td>
                                                    <div class="remove"> <i class="flaticon-close"></i> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="thumb-box"> <a href="shop-details-2.html" class="thumb">
                                                            <img src="{{asset('assets/images/innerpage/cart-product-thumb-2.jpg')}}"
                                                                alt="">
                                                        </a> <a href="shop-details-2.html" class="title">
                                                            <h5 class="font-josefin"> Blue Headphone </h5>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$250.00</td>
                                                <td class="qty">
                                                    <div class="qtySelector text-center">
                                                        <span class="decreaseQty">
                                                            <i class="flaticon-minus-sign"></i>
                                                        </span>
                                                        <input type="number" class="qtyValue" value="1">
                                                        <span class="increaseQty font-14">
                                                            <i class="flaticon-plus"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="sub-total">$500.00</td>
                                                <td>
                                                    <div class="remove"> <i class="flaticon-close"></i> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="thumb-box">
                                                        <a href="shop-details-2.html" class="thumb">
                                                            <img src="{{asset('assets/images/innerpage/cart-product-thumb-3.jpg')}}"
                                                                alt="">
                                                        </a>
                                                        <a href="shop-details-2.html" class="title">
                                                            <h5 class="font-josefin"> Comport Chair </h5>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$250.00</td>
                                                <td class="qty">
                                                    <div class="qtySelector text-center">
                                                        <span class="decreaseQty">
                                                            <i class="flaticon-minus-sign"></i>
                                                        </span>
                                                        <input type="number" class="qtyValue" value="1">
                                                        <span class="increaseQty font-14">
                                                            <i class="flaticon-plus"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="sub-total">$500.00</td>
                                                <td>
                                                    <div class="remove"> <i class="flaticon-close"></i> </div>
                                                </td>
                                            </tr>
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
                                    <button class="btn--primary mt-30" type="submit">Continue Shopping</button>
                                    <button class="btn--primary mt-30" type="submit">Update Cart</button>
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
                                                <th class="price font-roboto">$2500.00</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="shipping font-roboto"> Shipping </td>
                                                <td class="selact-box1">
                                                    <ul class="shop-select-option-box-1">
                                                        <li>
                                                            <input type="checkbox" name="free_shipping" id="option_1" checked="">
                                                            <label for="option_1"><span></span>
                                                                Free Shipping
                                                            </label>
                                                        </li>
                                                        <li> <input type="checkbox" name="flat_rate" id="option_2">
                                                            <label for="option_2"><span></span>Flat Rate</label> </li>
                                                        <li> <input type="checkbox" name="local_pickup" id="option_3">
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
                                                <td class="subtotal">$2500.00</td>
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
                                            <p>$2500.00</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Shipping</p>
                                        </div>
                                        <div class="right">
                                            <p><span>Flat rate:</span> $50.00</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Total Price:</p>
                                        </div>
                                        <div class="right">
                                            <p>$2550.00</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End cart area-->

        </div>
        <!-- End Body Container -->
@include("sitepartials.footer")
