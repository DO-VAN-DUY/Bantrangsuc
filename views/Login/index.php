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
                        <h4 class="login-title" style="color:#fff">Login</h4>
                        <div class="row">
                           <div class="col-md-12">
                                <!-- <label>Username*</label>
                                <input type="text" placeholder="Username"> -->
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="col-md-12">
                                <!-- <label>Password</label>
                                <input type="password" placeholder="Password"> -->
                                <?= $form->field($model, 'password')->passwordInput() ?>
                            </div>
                           
                            <div class="col-12">
                                <!-- <button class="hiraola-register_btn">Register</button> -->
                                <?= Html::submitButton('Login', ['class' => 'hiraola-register_btn'])?>
                            </div>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>