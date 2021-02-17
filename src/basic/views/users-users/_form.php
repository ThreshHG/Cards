<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersUsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_id')->textInput() ?>

    <?= $form->field($model, 'users2_id')->textInput() ?>

    <?= $form->field($model, 'usr1_blocked_usr2')->textInput() ?>

    <?= $form->field($model, 'usr2_blocked_usr1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
