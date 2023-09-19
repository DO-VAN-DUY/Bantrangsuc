<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Productgroups $model */

$this->title = 'Create Productgroups';
$this->params['breadcrumbs'][] = ['label' => 'Productgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productgroups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
