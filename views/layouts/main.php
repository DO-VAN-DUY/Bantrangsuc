<?php

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body class="template-color-1">
<?php $this->beginBody() ?>
<div class="main-wrapper">

<!-- Begin Loading Area -->
<div class="loading">
    <div class="text-center middle">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Loading Area End Here -->
<!-- Begin Hiraola's Newsletter Popup Area -->
<div class="popup_wrapper">
    <div class="test">
        <span class="popup_off"><i class="ion-android-close"></i></span>
        <div class="subscribe_area">
            <h2>Sign Up Newsletter</h2>
            <p>Subscribe to the our store mailing list to receive updates on new arrivals, special offers and other discount information.</p>
            <div class="subscribe-form-group">
                <form class="subscribe-form" action="#">
                    <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                    <button type="submit">subscribe</button>
                </form>
            </div>
            <div class="subscribe-bottom">
                <input type="checkbox" id="newsletter-permission">
                <label for="newsletter-permission">Don't show this popup again</label>
            </div>
        </div>
    </div>
</div>
<!-- Hiraola's Newsletter Popup Area Here -->

<!-- Begin Hiraola's Header Main Area -->
<header class="header-main_area">
    <div class="header-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ht-left_area">
                        <div class="header-shipping_area">
                            <ul>
                                <li>
                                    <span>Telephone Enquiry:</span>
                                    <a href="callto://+123123321345">0333823775</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ht-right_area">
                        <div class="ht-menu">
                            <ul>
                                <li><a href="javascript:void(0)">Currency<i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown ht-currency">
                                        <li><a href="javascript:void(0)">€ EUR</a></li>
                                        <li class="active"><a href="javascript:void(0)">£ Pound Sterling</a></li>
                                        <li><a href="javascript:void(0)">$ Us Dollar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Language <i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown">
                                        <li class="active"><a href="javascript:void(0)"><img src="/images/menu/icon/1.jpg" alt="JB's Language Icon">English</a></li>
                                        <li><a href="javascript:void(0)"><img src="/images/menu/icon/2.jpg" alt="JB's Language Icon">Français</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=""><b>Xin chào:</b><?php if(!Yii::$app->user->isGuest) : ?>
                                      <?php echo Yii::$app->user->identity->username;?>
                                       <?php endif ?>
                                        <i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown ht-my_account">
                                        <li><?php echo Html::a('Register',['/login/register'])?></li>
                                        <?php if(Yii::$app->user->isGuest) :?>
                                        <li class="active"><?php echo Html::a('Login',['/login'])?></li>
                                        <?php else :?>
                                            <li class="active"><?php echo Html::a('Logout',['/login/logout'],['data-method'=>'post'])?></li>
                                        <?php endif ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle_area d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="/images/menu/logo/1.png" alt="Hiraola's Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hm-form_area">
                        <form action="#" class="hm-searchbox">
                            <select class="nice-select select-search-category">
                                <option value="0">All</option>
                                <option value="10">Laptops</option>
                                <option value="17">- - Prime Video</option>
                                <option value="20">- - - - All Videos</option>
                                <option value="21">- - - - Blouses</option>
                                <option value="22">- - - - Evening Dresses</option>
                                <option value="23">- - - - Summer Dresses</option>
                                <option value="24">- - - - T-shirts</option>
                                <option value="25">- - - - Rent or Buy</option>
                                <option value="26">- - - - Your Watchlist</option>
                                <option value="27">- - - - Watch Anywhere</option>
                                <option value="28">- - - - Getting Started</option>
                                <option value="18">- - - - Computers</option>
                                <option value="29">- - - - More to Explore</option>
                                <option value="30">- - - - TV &amp; Video</option>
                                <option value="31">- - - - Audio &amp; Theater</option>
                                <option value="32">- - - - Camera, Photo </option>
                                <option value="33">- - - - Cell Phones</option>
                                <option value="34">- - - - Headphones</option>
                                <option value="35">- - - - Video Games</option>
                                <option value="36">- - - - Wireless Speakers</option>
                                <option value="19">- - - - Electronics</option>
                                <option value="37">- - - - Amazon Home</option>
                                <option value="38">- - - - Kitchen &amp; Dining</option>
                                <option value="39">- - - - Furniture</option>
                                <option value="40">- - - - Bed &amp; Bath</option>
                                <option value="41">- - - - Appliances</option>
                                <option value="11">TV &amp; Audio</option>
                                <option value="42">- - Chamcham</option>
                                <option value="45">- - - - Office</option>
                                <option value="47">- - - - Gaming</option>
                                <option value="48">- - - - Chromebook</option>
                                <option value="49">- - - - Refurbished</option>
                                <option value="50">- - - - Touchscreen</option>
                                <option value="51">- - - - Ultrabooks</option>
                                <option value="52">- - - - Blouses</option>
                                <option value="43">- - Sanai</option>
                                <option value="53">- - - - Hard Drives</option>
                                <option value="54">- - - - Graphic Cards</option>
                                <option value="55">- - - - Processors (CPU)</option>
                                <option value="56">- - - - Memory</option>
                                <option value="57">- - - - Motherboards</option>
                                <option value="58">- - - - Fans &amp; Cooling</option>
                                <option value="59">- - - - CD/DVD Drives</option>
                                <option value="44">- - Meito</option>
                                <option value="60">- - - - Sound Cards</option>
                                <option value="61">- - - - Cases &amp; Towers</option>
                                <option value="62">- - - - Casual Dresses</option>
                                <option value="63">- - - - Evening Dresses</option>
                                <option value="64">- - - - T-shirts</option>
                                <option value="65">- - - - Tops</option>
                                <option value="12">Smartphone</option>
                                <option value="66">- - Camera Accessories</option>
                                <option value="68">- - - - Octa Core</option>
                                <option value="69">- - - - Quad Core</option>
                                <option value="70">- - - - Dual Core</option>
                                <option value="71">- - - - 7.0 Screen</option>
                                <option value="72">- - - - 9.0 Screen</option>
                                <option value="73">- - - - Bags &amp; Cases</option>
                                <option value="67">- - XailStation</option>
                                <option value="74">- - - - Batteries</option>
                                <option value="75">- - - - Microphones</option>
                                <option value="76">- - - - Stabilizers</option>
                                <option value="77">- - - - Video Tapes</option>
                                <option value="78">- - - - Memory Card Readers</option>
                                <option value="79">- - - - Tripods</option>
                                <option value="13">Cameras</option>
                                <option value="14">headphone</option>
                                <option value="15">Smartwatch</option>
                                <option value="16">Accessories</option>
                            </select>
                            <input type="text" placeholder="Enter your search key ...">
                            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</header>
<!-- Hiraola's Header Main Area End Here -->
<?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>

<!-- Begin Hiraola's Footer Area -->
<div class="hiraola-footer_area">
    <div class="footer-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widgets_info">

                        <div class="footer-widgets_logo">
                            <a href="#">
                                <img src="/images/footer/logo/1.png" alt="Hiraola's Footer Logo">
                            </a>
                        </div>

                        <div class="widget-short_desc">
                            <p>We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                            </p>
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
                <div class="col-lg-8">
                    <div class="footer-widgets_area">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-widgets_title">
                                    <h6>Product</h6>
                                </div>
                                <div class="footer-widgets">
                                    <ul>
                                        <li><a href="#">Prices drop</a></li>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Best sales</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="footer-widgets_info">
                                    <div class="footer-widgets_title">
                                        <h6>About Us</h6>
                                    </div>
                                    <div class="widgets-essential_stuff">
                                        <ul>
                                            <li class="hiraola-address"><i class="ion-ios-location"></i><span>Address:</span> The Barn, Ullenhall, Henley
                                                in
                                                Arden B578 5CC, England</li>
                                            <li class="hiraola-phone"><i class="ion-ios-telephone"></i><span>Call Us:</span> <a href="tel://+123123321345">+123 321 345</a>
                                            </li>
                                            <li class="hiraola-email"><i class="ion-android-mail"></i><span>Email:</span> <a href="mailto://info@yourdomain.com">info@yourdomain.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="instagram-container footer-widgets_area">
                                    <div class="footer-widgets_title">
                                        <h6>Sign Up For Newslatter</h6>
                                    </div>
                                    <div class="widget-short_desc">
                                        <p>Subscribe to our newsletters now and stay up-to-date with new collections</p>
                                    </div>
                                    <div class="newsletter-form_wrap">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll">
                                                <div id="mc-form" class="mc-form subscribe-form">
                                                    <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter your email" />
                                                    <button class="newsletter-btn" id="mc-submit">
                                                        <i class="ion-android-mail" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom_area">
        <div class="container">
            <div class="footer-bottom_nav">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">Online Shopping</a></li>
                                <li><a href="#">Promotions</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Most Populars</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Special Products</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Our Stores</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Warantee</a></li>
                                <li><a href="#">Refunds</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Refunds</a></li>
                                <li><a href="#">Policy Shipping</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="payment">
                            <a href="#">
                                <img src="/images/footer/payment/1.png" alt="Hiraola's Payment Method">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="copyright">
                            <span>Copyright &copy; 2019 <a href="#">Hiraola.</a> All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hiraola's Footer Area End Here -->
<!-- Begin Hiraola's Modal Area -->

<!-- Hiraola's Modal Area End Here -->

</div>

    <?php $this->endBody() ?>

</body>


</html>
<?php $this->endPage() ?>