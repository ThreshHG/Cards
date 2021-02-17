<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cards-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'health')->textInput() ?>

    <?= $form->field($model, 'atk')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bg_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'border_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
