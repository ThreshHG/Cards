<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TemplateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="template-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_id') ?>

    <?= $form->field($model, 'cost_id') ?>

    <?= $form->field($model, 'health_id') ?>

    <?= $form->field($model, 'atk_id') ?>

    <?php // echo $form->field($model, 'description_id') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'font') ?>

    <?php // echo $form->field($model, 'background_id') ?>

    <?php // echo $form->field($model, 'columns') ?>

    <?php // echo $form->field($model, 'rows') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
