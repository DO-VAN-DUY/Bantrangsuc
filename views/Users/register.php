<?php

use app\models\Orders;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Login';

?>

<div class="hiraola-login-register_area" >
    <div class="container" style="background-image:url('https://i.redd.it/o8dlfk93azs31.jpg');">
        <div class="row" >
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                <!-- <form action="#"> -->
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                    <div class="login-form" style="background-color: rgba(10, 0, 0, 0.3);color:#fff">
                        <h4 class="login-title" style="color:#fff">Register</h4>
                        <div class="row">
                        <?= $form->field($model, 'username')->textInput(['maxlength' => true,'placeholder' => 'Nhập username...']) ?>

                        <?= $form->field($model, 'email')->textInput(['type' => 'email','placeholder' => 'Nhập email...']) ?>

                        <?= $form->field($model, 'password')->textInput(['type' => 'password', 'autocomplete' => "new-password",'placeholder' => 'Nhập password...']) ?>

                     
                            <div class="col-12">
                                <!-- <button class="hiraola-register_btn">Register</button> -->
                                <?= Html::submitButton('Register', ['class' => 'hiraola-register_btn'])?>
                            </div>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>