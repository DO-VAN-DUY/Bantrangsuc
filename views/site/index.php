<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'My Yii Application';
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

                            <?php foreach ($menu as $value) : ?>

                                <li><a href="<?php echo Url::to(["$value->link"]) ?>"><?= $value->name; ?></a></li>
                                </tr>
                            <?php endforeach; ?>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-8 col-sm-8">
                <div class="header-right_area">
                    <ul>
                        <li>
                            <a href="wishlist.html" class="wishlist-btn">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-minicart_wrapper" id="miniCart">
    <div class="offcanvas-menu-inner">
        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
        <div class="minicart-content">
            <div class="minicart-heading">
                <h4>Shopping Cart</h4>
            </div>
            <?php if ($cartstore) : $n = 1; ?>
                <ul class="minicart-list">
                    <?php foreach ($cartstore as $value) : ?>
                        <li class="minicart-product">
                            <!-- <a class="product-item_remove" href="javascript:void(0)"><i class="fa fa-times" aria-hidden="true"></i></a> -->
                            <?php echo Html::a('<i class="fa fa-times" aria-hidden="true"></i>', ['/cart/removes', 'id' => $value->id], ['class' => 'remove-cart', 'data-name' => $value->name]) ?>
                            <div class="product-item_img">

                                <img src="/images/product/<?php echo $value->image; ?>" alt="Hiraola's Product Image">

                            </div>
                            <div class="product-item_content">

                                <a class="product-item_title" href="shop-left-sidebar.html"><?php echo $value->name; ?></a>
                                <span class="product-item_quantity"><?php echo $value->qtt; ?> x <?php echo $value->price; ?></span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <h6>Giỏ hàng bạn đang rỗng....</h6>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
        <div class="minicart-item_total">
            <span>Subtotal</span>
            <span class="ammount"><?php echo $cost; ?></span>
        </div>
        <div class="minicart-btn_area">
            <?php echo Html::a('Minicart', ['/cart'], ['class' => 'hiraola-btn hiraola-btn_dark hiraola-btn_fullwidth']) ?>
        </div>
        <div class="minicart-btn_area">
            <?php echo Html::a('Checkout', ['/checkout'], ['class' => 'hiraola-btn hiraola-btn_dark hiraola-btn_fullwidth']) ?>
        </div>

    </div>
</div>
<div class="mobile-menu_wrapper" id="mobileMenu">
    <div class="offcanvas-menu-inner">
        <div class="container">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="offcanvas-inner_search">
                <form action="#" class="hm-searchbox">
                    <input type="text" placeholder="Search for item...">
                    <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
            <nav class="offcanvas-navigation">
                <ul class="mobile-menu">
                    <li class="menu-item-has-children active"><a href="#"><span class="mm-text">Home</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">
                                    <span class="mm-text">Home One</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-2.html">
                                    <span class="mm-text">Home Two</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html">
                                    <span class="mm-text">Home Three</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="mm-text">Shop</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Grid View</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="shop-3-column.html">
                                            <span class="mm-text">Column Three</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-4-column.html">
                                            <span class="mm-text">Column Four</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html">
                                            <span class="mm-text">Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-right-sidebar.html">
                                            <span class="mm-text">Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Shop List</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="shop-list-fullwidth.html">
                                            <span class="mm-text">Full Width</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-list-left-sidebar.html">
                                            <span class="mm-text">Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-list-right-sidebar.html">
                                            <span class="mm-text">Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Single Product Style</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="single-product-gallery-left.html">
                                            <span class="mm-text">Gallery Left</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-gallery-right.html">
                                            <span class="mm-text">Gallery Right</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-tab-style-left.html">
                                            <span class="mm-text">Tab Style Left</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-tab-style-right.html">
                                            <span class="mm-text">Tab Style Right</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-sticky-left.html">
                                            <span class="mm-text">Sticky Left</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-sticky-right.html">
                                            <span class="mm-text">Sticky Right</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Single Product Type</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="single-product.html">
                                            <span class="mm-text">Single Product</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-sale.html">
                                            <span class="mm-text">Single Product Sale</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-group.html">
                                            <span class="mm-text">Single Product Group</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-variable.html">
                                            <span class="mm-text">Single Product Variable</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-affiliate.html">
                                            <span class="mm-text">Single Product Affiliate</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-slider.html">
                                            <span class="mm-text">Single Product Slider</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="mm-text">Blog</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children has-children">
                                <a href="#">
                                    <span class="mm-text">Grid View</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-2-column.html">
                                            <span class="mm-text">Column Two</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-3-column.html">
                                            <span class="mm-text">Column Three</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-left-sidebar.html">
                                            <span class="mm-text">Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-right-sidebar.html">
                                            <span class="mm-text">Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-children">
                                <a href="#">
                                    <span class="mm-text">List View</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-list-fullwidth.html">
                                            <span class="mm-text">List Fullwidth</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-list-left-sidebar.html">
                                            <span class="mm-text">List Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-list-right-sidebar.html">
                                            <span class="mm-text">List Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-children">
                                <a href="#">
                                    <span class="mm-text">Blog Details</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-details-left-sidebar.html">
                                            <span class="mm-text">Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details-right-sidebar.html">
                                            <span class="mm-text">Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-children">
                                <a href="#">
                                    <span class="mm-text">Blog Format</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-gallery-format.html">
                                            <span class="mm-text">Gallery Format</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-audio-format.html">
                                            <span class="mm-text">Audio Format</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-video-format.html">
                                            <span class="mm-text">Video Format</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="mm-text">Pages</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="my-account.html">
                                    <span class="mm-text">My Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="login-register.html">
                                    <span class="mm-text">Login | Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <span class="mm-text">Wishlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    <span class="mm-text">Cart</span>
                                </a>
                            </li>
                            <li>
                                <a href="checkout.html">
                                    <span class="mm-text">Checkout</span>
                                </a>
                            </li>
                            <li>
                                <a href="compare.html">
                                    <span class="mm-text">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="faq.html">
                                    <span class="mm-text">FAQ</span>
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    <span class="mm-text">Error 404</span>
                                </a>
                            </li>
                            <li>
                                <a href="coming-soon_page.html">
                                    <span class="mm-text">Comming Soon</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav class="offcanvas-navigation user-setting_area">
                <ul class="mobile-menu">
                    <li class="menu-item-has-children active">
                        <a href="#">
                            <span class="mm-text">User
                                Setting
                            </span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="my-account.html">
                                    <span class="mm-text">My Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="login-register.html">
                                    <span class="mm-text">Login | Register</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#"><span class="mm-text">Currency</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">EUR €</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">USD $</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#"><span class="mm-text">Language</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">Français</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">Romanian</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">Japanese</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="slider-with-category_menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col grid-half order-md-2 order-lg-1">
                <div class="category-menu">
                    <div class="category-heading">
                        <h2 class="categories-toggle"><span>Shop by categories</span></h2>
                    </div>
                    <div id="cate-toggle" class="category-menu-list">
                        <ul>
                            <li class="right-menu"><a href="#">Hand Harness</a>
                                <ul class="cat-mega-menu">
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Habitant Morbi</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Habitant Morbi</a></li>
                                            <li><a href="shop-left-sidebar.html">Office chair</a></li>
                                            <li><a href="shop-left-sidebar.html">Purus Lacus</a></li>
                                            <li><a href="shop-left-sidebar.html">Sagittis Blandit</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Purus Lacus</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Magna Pellentesq</a></li>
                                            <li><a href="shop-left-sidebar.html">Molestie Tortor</a></li>
                                            <li><a href="shop-left-sidebar.html">Vehicula Element</a></li>
                                            <li><a href="shop-left-sidebar.html">Volutpat Diam</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Office chair</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Bibendum Cursus</a></li>
                                            <li><a href="shop-left-sidebar.html">Dignissim Turpis</a></li>
                                            <li><a href="shop-left-sidebar.html">Dining room</a></li>
                                            <li><a href="shop-left-sidebar.html">Egestas Ultricies</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-menu"><a href="#">Maang Tika</a>
                                <ul class="cat-mega-menu cat-mega-menu-2">
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Cameras</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Cords and Cables</a></li>
                                            <li><a href="shop-left-sidebar.html">gps accessories</a></li>
                                            <li><a href="shop-left-sidebar.html">Microphones</a></li>
                                            <li><a href="shop-left-sidebar.html">Wireless Transmitters</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Audio</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Other Accessories</a></li>
                                            <li><a href="shop-left-sidebar.html">Portable Audio</a></li>
                                            <li><a href="shop-left-sidebar.html">Satellite Radio</a></li>
                                            <li><a href="shop-left-sidebar.html">Visual Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Cell Phones</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Xail</a></li>
                                            <li><a href="shop-left-sidebar.html">Chamcham Galaxy</a></li>
                                            <li><a href="shop-left-sidebar.html">SIM Cards</a></li>
                                            <li><a href="shop-left-sidebar.html">Prepaid Cell Phones</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">TV & Video</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">4K Ultra HDTVs</a></li>
                                            <li><a href="shop-left-sidebar.html">All TVs</a></li>
                                            <li><a href="shop-left-sidebar.html">Refurbished TVs</a></li>
                                            <li><a href="shop-left-sidebar.html">TV Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-menu"><a href="#">Toe Rings</a>
                                <ul class="cat-mega-menu cat-mega-menu-3">
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Sagittis Blandit</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">adipiscing elit</a></li>
                                            <li><a href="shop-left-sidebar.html">consectetur adip</a></li>
                                            <li><a href="shop-left-sidebar.html">erat et est</a></li>
                                            <li><a href="shop-left-sidebar.html">molestie velit</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Accessories</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Habitant Morbi</a></li>
                                            <li><a href="shop-left-sidebar.html">Office chair</a></li>
                                            <li><a href="shop-left-sidebar.html">Purus Lacus</a></li>
                                            <li><a href="shop-left-sidebar.html">Sagittis Blandit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-menu"><a href="#">Traditional Earrings</a>
                                <ul class="cat-mega-menu">
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Accessories</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Habitant Morbi</a></li>
                                            <li><a href="shop-left-sidebar.html">Office chair</a></li>
                                            <li><a href="shop-left-sidebar.html">Purus Lacus</a></li>
                                            <li><a href="shop-left-sidebar.html">Sagittis Blandit</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Purus Lacus</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Magna Pellentesq</a></li>
                                            <li><a href="shop-left-sidebar.html">Molestie Tortor</a></li>
                                            <li><a href="shop-left-sidebar.html">Vehicula Element</a></li>
                                            <li><a href="shop-left-sidebar.html">Volutpat Diam</a></li>
                                        </ul>
                                    </li>
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">Office chair</a>
                                        <ul>
                                            <li><a href="shop-left-sidebar.html">Bibendum Cursus</a></li>
                                            <li><a href="shop-left-sidebar.html">Dignissim Turpis</a></li>
                                            <li><a href="shop-left-sidebar.html">Dining room</a></li>
                                            <li><a href="shop-left-sidebar.html">Egestas Ultricies</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Kada Cum Bracelet</a></li>
                            <li><a href="#">Exquisite Rings</a></li>
                            <li><a href="#">Necklaces</a></li>
                            <li><a href="#">Foot Harness</a></li>
                            <li><a href="#">Braid Jewels</a></li>
                            <li class="rx-child"><a href="#">Anklet – Epitome Of Culture</a></li>
                            <li class="rx-child"><a href="#">Graceful Armlet</a></li>
                            <li class="rx-parent">
                                <a class="rx-default">More Categories</a>
                                <a class="rx-show">Collapse</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col grid-full order-md-1 order-lg-2">
                <div class="hiraola-slider_area">
                    <div class="main-slider">
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide animation-style-01 bg-1">
                            <div class="container">
                                <div class="slider-content">
                                    <h5><span>Black Friday</span> This Week</h5>
                                    <h2>Work Desk</h2>
                                    <h3>Surface Studio 2023</h3>
                                    <h4>Starting at <span>£1599.00</span></h4>
                                    <div class="hiraola-btn-ps_left slide-btn">
                                        <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                                <div class="slider-progress"></div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide animation-style-02 bg-2">
                            <div class="container">
                                <div class="slider-content">
                                    <h5><span>-10% Off</span> This Week</h5>
                                    <h2>Phantom4</h2>
                                    <h3>Pro+ Obsidian</h3>
                                    <h4>Starting at <span>£809.00</span></h4>
                                    <div class="hiraola-btn-ps_left slide-btn">
                                        <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                                <div class="slider-progress"></div>
                            </div>
                        </div>
                        <div class="single-slide animation-style-02 bg-3">
                            <div class="container">
                                <div class="slider-content">
                                    <h5><span>Black Friday</span> This Week</h5>
                                    <h2>Work Desk</h2>
                                    <h3>Surface Studio 2023</h3>
                                    <h4>Starting at <span>£1599.00</span></h4>
                                    <div class="hiraola-btn-ps_left slide-btn">
                                        <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                                <div class="slider-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-half grid-md_half order-md-2 order-lg-3">
                <div class="banner-item img-hover_effect">
                    <a href="shop-left-sidebar.html">
                        <img class="img-full" src="/images/banner/1_1.jpg" alt="Hiraola's Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hiraola-banner_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="banner-item img-hover_effect">
                    <a href="shop-left-sidebar.html">
                        <img class="img-full" src="/images/banner/1_2.jpg" alt="Hiraola's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-item img-hover_effect">
                    <a href="shop-left-sidebar.html">
                        <img class="img-full" src="/images/banner/1_3.jpg" alt="Hiraola's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-item img-hover_effect">
                    <a href="shop-left-sidebar.html">
                        <img class="img-full" src="/images/banner/1_4.jpg" alt="Hiraola's Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hiraola-product_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hiraola-section_title">
                    <h4>New Arrival</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="hiraola-product_slider">
                    <!-- Begin Hiraola's Slide Item Area -->
                    <?php foreach ($product as $value) : ?>
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="/images/product/<?= $value->image; ?>" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><?php echo Html::a('<i class="fa fa-cart-plus" aria-hidden="true"></i>', ['/cart/add-cart', 'id' => $value->id], ['class' => 'add-cart', 'data-name' => $value->name]) ?></li>
                                            <!-- <li>?php echo Html::a('<i class="fa fa-cart-plus" aria-hidden="true"></i>', ['/cart/add-cart'], ['class' => 'add-cart', 'data-name' => $value->name]) ?></li> -->
                                         
                                            <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="fa fa-random" aria-hidden="true"></i></a></li>
                                            <!-- <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"></a></li> -->
                                            <li><?php echo Html::a('<i class="fa fa-eye" aria-hidden="true"></i>', ['/site/detail', 'id' => $value->id]) ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html"><?= $value->name; ?></a></h6>
                                        <div class="price-box">
                                            <span class="new-price"><?= $value->price; ?> USD </span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"> <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                                <li class="silver-color"><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area sp-area row">
                    <div class="col-lg-5 col-md-5">
                        <div class="sp-img_area">
                            <div class="sp-img_slider-2 slick-img-slider hiraola-slick-slider arrow-type-two" data-slick-options='{
                                                "slidesToShow": 1,
                                                "arrows": false,
                                                "fade": true,
                                                "draggable": false,
                                                "swipe": false,
                                                "asNavFor": ".sp-img_slider-nav"
                                                }'>
                                <div class="single-slide red">
                                    <img src="/images/single-product/large-size/1.jpg" alt="Hiraola's Product Image">
                                </div>
                                <div class="single-slide orange">
                                    <img src="/images/single-product/large-size/2.jpg" alt="Hiraola's Product Image">
                                </div>
                                <div class="single-slide brown">
                                    <img src="/images/single-product/large-size/3.jpg" alt="Hiraola's Product Image">
                                </div>
                                <div class="single-slide umber">
                                    <img src="/images/single-product/large-size/4.jpg" alt="Hiraola's Product Image">
                                </div>
                            </div>
                            <div class="sp-img_slider-nav slick-slider-nav hiraola-slick-slider arrow-type-two" data-slick-options='{
                           "slidesToShow": 4,
                            "asNavFor": ".sp-img_slider-2",
                           "focusOnSelect": true
                          }' data-slick-responsive='[
                                                {"breakpoint":1201, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":577, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":481, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":321, "settings": {"slidesToShow": 2}}
                                            ]'>
                                <div class="single-slide red">
                                    <img src="/images/single-product/small-size/1.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                                <div class="single-slide orange">
                                    <img src="/images/single-product/small-size/2.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                                <div class="single-slide brown">
                                    <img src="/images/single-product/small-size/3.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                                <div class="single-slide umber">
                                    <img src="/images/single-product/small-size/4.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h5><a href="#">Light Inverted Pendant Quis Justo Condimentum</a></h5>
                            </div>
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-sun-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-box">
                                <span class="new-price">£82.84</span>
                                <span class="old-price">£93.68</span>
                            </div>
                            <div class="essential_stuff">
                                <ul>
                                    <li>EX Tax:<span>£453.35</span></li>
                                    <li>Price in reward points:<span>400</span></li>
                                </ul>
                            </div>
                            <div class="list-item">
                                <ul>
                                    <li>10 or more £81.03</li>
                                    <li>20 or more £71.09</li>
                                    <li>30 or more £61.15</li>
                                </ul>
                            </div>
                            <div class="list-item last-child">
                                <ul>
                                    <li>Brand<a href="javascript:void(0)">Buxton</a></li>
                                    <li>Product Code: Product 15</li>
                                    <li>Reward Points: 100</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                            </div>
                            <div class="color-list_area">
                                <div class="color-list_heading">
                                    <h4>Available Options</h4>
                                </div>
                                <span class="sub-title">Color</span>
                                <div class="color-list">
                                    <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                        <span class="bg-red_color"></span>
                                        <span class="color-text">Red (+£3.61)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                        <span class="burnt-orange_color"></span>
                                        <span class="color-text">Orange (+£2.71)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                        <span class="brown_color"></span>
                                        <span class="color-text">Brown (+£0.90)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                        <span class="raw-umber_color"></span>
                                        <span class="color-text">Umber (+£1.81)</span>
                                    </a>
                                </div>
                            </div>
                            <div class="quantity">
                                <label>Quantity</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                </div>
                            </div>
                            <div class="hiraola-group_btn">
                                <ul>
                                    <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                    <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                </ul>
                            </div>
                            <div class="hiraola-tag-line">
                                <h6>Tags:</h6>
                                <a href="javascript:void(0)">Ring</a>,
                                <a href="javascript:void(0)">Necklaces</a>,
                                <a href="javascript:void(0)">Braid</a>
                            </div>
                            <div class="hiraola-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Add_cart</a> -->
<div class="modal fade" id="modal-add-cart">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Thêm giỏ hàng thành công</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" id="alert-name">



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="thongbao">
    
</div>