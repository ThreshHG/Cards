<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersUsers */

$this->title = 'Update Users Users: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
