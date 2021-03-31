<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ElementSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="element-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'axisx1') ?>

    <?= $form->field($model, 'axisy1') ?>

    <?= $form->field($model, 'axisx2') ?>

    <?php // echo $form->field($model, 'axisy2') ?>

    <?php // echo $form->field($model, 'axisz') ?>

    <?php // echo $form->field($model, 'borderwidth') ?>

    <?php // echo $form->field($model, 'bordercolor') ?>

    <?php // echo $form->field($model, 'innercolor') ?>

    <?php // echo $form->field($model, 'radiolt') ?>

    <?php // echo $form->field($model, 'radiort') ?>

    <?php // echo $form->field($model, 'radiolb') ?>

    <?php // echo $form->field($model, 'radiorb') ?>

    <?php // echo $form->field($model, 'fontcolor') ?>

    <?php // echo $form->field($model, 'fontsize') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'textalign') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
