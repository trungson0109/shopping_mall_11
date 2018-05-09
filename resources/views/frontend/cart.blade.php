@include('frontend.layouts.master')
@include('frontend.layouts.header')
@include('frontend.layouts.logo')
@include('frontend.layouts.mainmenu')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form action="#">
                        <input type="text" placeholder="Search products...">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins>
                            <del>$800.00</del>
                        </div>
                    </div>
                </div>
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Recent Posts</h2>
                    <ul>
                        <li><a href="#">Sony Smart TV - 2015</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="actions" colspan="6">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                            <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                        </div>
                                        <input type="submit" value="Update Cart" name="update_cart" class="button">
                                        <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
@include('frontend.layouts.important')
