<?php

use app\models\Orders;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->title = 'Shopping cart';

?>
<div class="header-bottom_area header-sticky stick">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 d-lg-none d-block">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="/images/menu/logo/2.png" alt="Hiraola's Header Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 d-none d-lg-block position-static">
                <div class="main-menu_area">
                    <nav>
                        <ul>
                            <li class="dropdown-holder"><a href="index.html">Home</a>
                                <ul class="hm-dropdown">
                                    <li class="active"><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                </ul>
                            </li>
                            <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                <ul class="hm-megamenu">
                                    <li><span class="megamenu-title">Shop Page Layout</span>
                                        <ul>
                                            <li><a href="shop-3-column.html">Grid Fullwidth</a></li>
                                            <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class="megamenu-title">Single Product Style</span>
                                        <ul>
                                            <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                            <li><a href="single-product-gallery-right.html">Gallery Right</a>
                                            </li>
                                            <li><a href="single-product-tab-style-left.html">Tab Style Left</a>
                                            </li>
                                            <li><a href="single-product-tab-style-right.html">Tab Style
                                                    Right</a>
                                            </li>
                                            <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="megamenu-title">Single Product Type</span>
                                        <ul>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                            <li><a href="single-product-group.html">Single Product Group</a>
                                            </li>
                                            <li><a href="single-product-variable.html">Single Product Variable</a>
                                            </li>
                                            <li><a href="single-product-affiliate.html">Single Product
                                                    Affiliate</a>
                                            </li>
                                            <li><a href="single-product-slider.html">Single Product Slider</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item_img"></li>
                                </ul>
                            </li>
                            <li><a href="blog-left-sidebar.html">Blog</a>
                                <ul class="hm-dropdown">
                                    <li><a href="blog-left-sidebar.html">Grid View</a>
                                        <ul class="hm-dropdown hm-sub_dropdown">
                                            <li><a href="blog-2-column.html">Column Two</a></li>
                                            <li><a href="blog-3-column.html">Column Three</a></li>
                                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-list-left-sidebar.html">List View</a>
                                        <ul class="hm-dropdown hm-sub_dropdown">
                                            <li><a href="blog-list-fullwidth.html">List Fullwidth</a></li>
                                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-details-left-sidebar.html">Blog Details</a>
                                        <ul class="hm-dropdown hm-sub_dropdown">
                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-gallery-format.html">Blog Format</a>
                                        <ul class="hm-dropdown hm-sub_dropdown">
                                            <li><a href="blog-gallery-format.html">Gallery Format</a></li>
                                            <li><a href="blog-audio-format.html">Audio Format</a></li>
                                            <li><a href="blog-video-format.html">Video Format</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="index.html">Pages</a>
                                <ul class="hm-dropdown">
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Login | Register</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="coming-soon_page.html">Comming Soon</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="shop-left-sidebar.html">Jewellery</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-8 col-sm-8">
                <div class="header-right_area">
                    <ul>
                        <li>
                            <a href="wishlist.html" class="wishlist-btn">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                <i class="ion-navicon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                <i class="ion-bag"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Other</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-area">
    <?php $form = ActiveForm::begin(); ?>
    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-12">
                <!-- <form action="javascript:void(0)"> -->


                <div class="checkbox-form">
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkout-form-list">

                                <?php echo $form->field($model, 'fullname')->textInput(['placeholder' => 'Họ và tên...']) ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="checkout-form-list">

                                <?php echo $form->field($model, 'address')->textInput(['placeholder' => 'Address...']) ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="checkout-form-list">

                                <?php echo $form->field($model, 'email')->textInput(['placeholder' => 'Email...']) ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">

                                <?php echo $form->field($model, 'phone')->textInput(['placeholder' => 'Phone...']) ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">

                                <?php echo $form->field($model, 'total_money')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">

                                <?php echo $form->field($model, 'booking_date')->textInput() ?>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- </form> -->

            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cartstore as $value) : ?>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><?php echo $value->name; ?><strong class="product-quantity">
                                                × <?php echo $value->qtt; ?></strong></td>
                                        <td class="cart-product-total"><span class="amount"><?php echo number_format($value->price * $value->qtt, 0,'','.') ?></span></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>

                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount"><?php echo number_format($cost, 0,'','.') ?></span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">

                            <div class="order-button-payment">
                                <input value="Place order" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

</div>