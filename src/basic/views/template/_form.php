<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Template */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="template-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_id')->textInput() ?>

    <?= $form->field($model, 'cost_id')->textInput() ?>

    <?= $form->field($model, 'health_id')->textInput() ?>

    <?= $form->field($model, 'atk_id')->textInput() ?>

    <?= $form->field($model, 'description_id')->textInput() ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'font')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'background_id')->textInput() ?>

    <?= $form->field($model, 'columns')->textInput() ?>

    <?= $form->field($model, 'rows')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
