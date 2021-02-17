<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CardsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cards-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'cost') ?>

    <?= $form->field($model, 'health') ?>

    <?= $form->field($model, 'atk') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'faccion') ?>

    <?php // echo $form->field($model, 'bg_color') ?>

    <?php // echo $form->field($model, 'border_color') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
