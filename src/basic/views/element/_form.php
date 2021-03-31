<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Element */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="element-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'axisx1')->textInput() ?>

    <?= $form->field($model, 'axisy1')->textInput() ?>

    <?= $form->field($model, 'axisx2')->textInput() ?>

    <?= $form->field($model, 'axisy2')->textInput() ?>

    <?= $form->field($model, 'axisz')->textInput() ?>

    <?= $form->field($model, 'borderwidth')->textInput() ?>

    <?= $form->field($model, 'bordercolor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'innercolor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'radiolt')->textInput() ?>

    <?= $form->field($model, 'radiort')->textInput() ?>

    <?= $form->field($model, 'radiolb')->textInput() ?>

    <?= $form->field($model, 'radiorb')->textInput() ?>

    <?= $form->field($model, 'fontcolor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fontsize')->textInput() ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <?= $form->field($model, 'textalign')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
