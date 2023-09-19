<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

?>

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Chi Tiết Sản Phẩm</h2>
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Chi tiết</li>
            </ul>
        </div>
    </div>
</div>
<div class="sp-area">
    <div class="container">
        <div class="sp-nav">

            <div class="row">

                <div class="col-lg-5 col-md-5">
                    <div class="sp-img_area">
                        <div class="zoompro-border">
                            <img class="zoompro" src="/images/product/<?= $detailsp->image; ?>" alt="Hiraola's Product Image" />
                        </div>
                        <div id="gallery" class="sp-img_slider">
                            <a class="active">
                                <img src="/images/product/<?= $detailsp->image; ?>" alt="Hiraola's Product Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="sp-content">
                        <div class="sp-heading">
                            <h5><a> </a></h5>
                        </div>
                        <!-- <div class="sp-heading">
                            <div *ngIf="thoigian === false">
                                <p style=" color: red; size: 16;">Hết hạn giảm giá</p>
                            </div>

                        </div> -->
                        <div class="sp-heading">
                            <span *ngIf="thoigian" class="reference">
                                <p style=" color: red; size: 16;">Giảm giá: </p>
                            </span>
                        </div>
                        <div class="sp-heading">
                            <span class="reference">Ngày Bắt Đầu: </span>
                        </div>
                        <div class="sp-heading">
                            <span class="reference">Ngày Kết Thúc: </span>
                        </div>



                        <div class="rating-box">
                            <ul>
                                <!-- <li >Đánh Giá: <a style="color: rgb(255, 51, 0);"> Chưa Đánh Giá</a> </li>
                                <li>Đánh Giá: <a style="color: rgb(255, 51, 0);"> {{TrB_sao}} Sao</a> </li> -->
                                <!-- <li >Đánh Giá: <a style="color: rgb(255, 51, 0);">   0{{TrB_sao}} Sao</a> </li> -->
                            </ul>
                        </div>
                        <div class="sp-essential_stuff">
                            <ul>
                                <li>Giá Sản Phẩm: <a href="javascript:void(0)"><span> <?= number_format($detailsp->price, 0, '', '.') ?> USD</span></a></li>
                                <!-- <li>Giá Sản Phẩm Giảm giá: <a href="javascript:void(0)"><span> VND</span></a></li> -->
                                <li>Thương Hiệu: <a href="javascript:void(0)"><?= $trademark->name?> </a></li>
                                <li>Mã Sản Phẩm: <a href="javascript:void(0)">Sản phẩm <?= $detailsp->id; ?> </a></li>

                            </ul>
                        </div>

                        <div class="quantity">

                        </div>
                        <div class="qty-btn_area">
                            <ul>
                                <li><a class="qty-cart_btn">Thêm Vào Giỏ Hàng</a></li>
                            </ul>
                        </div>
                        <div class="hiraola-tag-line">

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

<div class="hiraola-product-tab_area-2 sp-product-tab_area">
    <div class="container">
        <div class="row" *ngIf="item">
            <div class="col-lg-12">
                <div class="sp-product-tab_nav ">
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Mô Tả</span></a>
                            </li>
                            <li><a data-toggle="tab" href="#specification"><span>Thông Số</span></a></li>
                            <li><a data-toggle="tab" href="#reviews"><span>Đánh Giá</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content hiraola-tab_content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <?php echo ($detailsp->detailed_description); ?>
                            </div>
                        </div>
                        <div id="specification" class="tab-pane" role="tabpanel">
                            <table class="table table-bordered specification-inner_stuff">
                                <tbody>
                                    <tr>
                                        <td colspan="2"><strong>Thông Số</strong></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Tên thông số</td>
                                        <td>Mô tả</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div id="reviews" class="tab-pane" role="tabpanel">
                            <div class="tab-pane active form-horizontal" id="tab-review">
                                <div id="review">

                                    <!-- <table class="table table-striped table-bordered" *ngFor="let list_phanhoi of list_phanhoi">
                                        <tbody>
                                            <tr>
                                                <td style=" vertical-align: middle; text-align: center;"><strong>{{list_phanhoi.hoTen}}</strong></td>
                                                <td style=" vertical-align: middle; text-align: center;">{{list_phanhoi.ngayPhanHoi | date:'yyyy-MM-dd HH:mm:ss'}}</td>

                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>{{list_phanhoi.noiDung}}</p>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li *ngIf="list_phanhoi.sao=='1'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='2'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='2'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='3'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='3'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='3'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='4'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='4'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='4'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='4'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='5'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='5'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='5'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='5'"><i class="fa fa-star"></i></li>
                                                            <li *ngIf="list_phanhoi.sao=='5'"><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                    <!-- <div class="form-group">
                                        <div class="btn mr-1"><ngb-pagination (pageChange)="loadPage($event)" [(page)]="page" [pageSize]="pageSize" [collectionSize]="totalItem">
                                            </ngb-pagination></div>
                                        <div class="btn mr-1" style="float: right;"><select class="form-control" (ngModelChange)="loadData($event)" [(ngModel)]="pageSize">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="40">40</option>
                                            </select></div>
                                        <div class="btn mr-1" style="float: right;"><button [ngClass]="{active: loc=='TD'}" (click)="setDieuKienLoc('TD')" type="submit" class="btn btn-primary"><i class="fa fa-sort-up"></i></button></div>
                                        <div class="btn mr-1" style="float: right;"><button [ngClass]="{active: loc=='GD'}" (click)="setDieuKienLoc('GD')" type="submit" class="btn btn-primary"><i class="fa fa-sort-down"></i></button></div>
                                        <div class="btn mr-1" style="float: right;"><button [ngClass]="{active: loc=='ALL'}" (click)="setDieuKienLoc('ALL')" type="submit" class="btn btn-primary"><i class="fa fa-retweet"></i></button></div>
                                    </div> -->
                                </div>
                                <hr>
                                <form class="form-horizontal" id="form-review">

                                    <h2>Viết Phản hồi</h2>
                                    <div class="form-group required second-child">
                                        <div class="col-sm-12 p-0">
                                            <label class="control-label">Sản Phẩm</label>
                                            <select formControlName="txt_masanpham" class="form-group col-12">
                                                <option value="abc"></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 p-0">
                                            <label class="control-label">Nhập Nội Dung</label>
                                            <textarea class="review-textarea" formControlName="txt_noidung" name="con_message" id="con_message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group last-child required">
                                        <div class="col-sm-12 p-0">
                                            <div class="your-opinion">
                                                <span>
                                                    <label class="control-label">Sao</label>
                                                    <!-- <select formControlName="txt_sao" class="form-group col-12">
                                                        <option [value]="'1'">1 Sao <i class="fa fa-star"></i></option>
                                                        <option [value]="'2'">2 Sao</option>
                                                        <option [value]="'3'">3 Sao</option>
                                                        <option [value]="'4'">4 Sao</option>
                                                        <option [value]="'5'">5 Sao</option>
                                                    </select> -->
                                                </span>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <!-- <a class="button" (click)="ThanhToan()" value="Cập Nhập" type="submit"> 123 </a> -->
                                            <input value="Gửi Phản Hồi" type="submit">
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
<hr>


<div class="hiraola-product_area hiraola-product_area-2 section-space_add">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="hiraola-section_title">
                            <h4>Sản phẩm tương tự</h4>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider-3">

                        <?php foreach ($products as $value) : ?>
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/images/product/<?= $value->image; ?>" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="/images/product/<?= $value->image; ?>" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">New</span>
                                        <div class="add-actions">
                                            <ul>
                                            <li><?php echo Html::a('<i class="fa fa-cart-plus" aria-hidden="true"></i>', ['/cart/add-cart', 'id' => $value->id], ['class' => 'add-cart', 'data-name' => $value->name]) ?></li>
                                         
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
                                                <span class="new-price"><?= number_format($value->price, 0, '', '.') ?> USD</span>
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
                          <?php endforeach;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<hr>