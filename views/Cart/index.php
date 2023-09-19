<?php

use app\models\Orders;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->title = 'Shopping cart';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="header-bottom_area header-sticky stick">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 d-lg-none d-block">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="assets/images/menu/logo/2.png" alt="Hiraola's Header Logo">
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
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</div>
<div class="hiraola-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if ($cartstore) : $n = 1; ?>
                <form>
                    <div>
                        <table class="table">
                            <thead>
                                <tr style="background-color: #0080c0; color:#111">
                                    <th class="hiraola-product-remove">remove</th>
                                    <th class="hiraola-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="hiraola-product-price">Unit Price</th>
                                    <th class="hiraola-product-quantity">Quantity</th>
                                    <th class="hiraola-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <?php foreach ($cartstore as $value) : ?>
                                <tbody>
                                    <tr>
                                       
                                    <td class="hiraola-product-remove"><?php echo Html::a('<i class="fa fa-trash" title="Remove"></i>', ['/cart/remove', 'id' => $value->id]) ?></td>
                                        <td class="hiraola-product-thumbnail"><a href="javascript:void(0)"><img style="width:100px; height:100px" src="/images/product/<?php echo $value->image; ?>" alt="Hiraola's Cart Thumbnail"></a></td>

                                        <td class="hiraola-product-name"><a href="javascript:void(0)"><?php echo $value->name;?></a></td>
                                        
                                        <td class="hiraola-product-price"><span class="amount">
                                            <?php echo number_format($value->price, 0, '', '.')?>
                                            <?php Html::hiddenInput("Giaban[{$value->id}]",$value->price)?>
                                         USD</span></td>
                                        <td style="width:50px; height:50px">
                                            <?php $form = ActiveForm::begin(
                                                [
                                                    'action' => Url::to(['/cart/update']),
                                                    'options' => [
                                                        'class' => 'form-inline pull-left',
                                                    ]
                                                ]
                                            ) ?>
                                          
                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                            <input style="width:60px" size="3" name="qtt" class="form-control" value="<?php echo $value->qtt; ?>" type="text">
                                            <input type="submit" name="update" value="Update" class="btn btn-sm btn-success">
                                            <?php ActiveForm::end(); ?>
                                        </td>
                                        <!-- <td class="quantity">
                                              
                                                <div class="cart-plus-minus">
                                                     <input type="hidden" name="id" value="?php echo $value->id; ?>">
                                                    <input class="cart-plus-minus-box" value="?php echo $value->qtt; ?>" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td> -->
                                        <td class="hiraola-product-price"><span class="amount"><?php echo number_format($value->price * $value->qtt, 0, '', '.')?> USD</span></td>
                                    </tr>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <!-- <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit"> -->
                                    <?php echo Html::a('Tiếp tục mua hàng',['/'],['class'=>'btn btn-success'])?>
                                    <?php echo Html::a('Xóa giỏ hàng',['/cart/clear'],['class'=>'btn btn-danger'])?>
                                </div>
                                <div class="coupon2">
                                    <input class="btn btn-primary" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">

                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span><?php echo $total;?></span></li>
                                    <li>Total <span><?php echo number_format($cost, 0,'','.')?> USD</span></li>
                                </ul>
                                <!-- <a href="javascript:void(0)">Proceed to checkout</a> -->
                                <?php echo Html::a('Proceed to checkout',['/checkout'])?>
                            </div>

                        </div>
                    </div>
                </form>
                <?php else : ?>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <h6>Giỏ hàng bạn đang rỗng....</h6>
                    </li>
                </ul>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>