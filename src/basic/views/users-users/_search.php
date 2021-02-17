<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersUsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'users_id') ?>

    <?= $form->field($model, 'users2_id') ?>

    <?= $form->field($model, 'usr1_blocked_usr2') ?>

    <?= $form->field($model, 'usr2_blocked_usr1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
