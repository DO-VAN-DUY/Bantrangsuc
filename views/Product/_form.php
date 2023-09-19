<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'describes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detailed_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'selling')->textInput() ?>

    <?= $form->field($model, 'outstanding')->textInput() ?>

    <?= $form->field($model, 'just_homed')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>
    
    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'competitive_price')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
