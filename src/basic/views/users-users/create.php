<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersUsers */

$this->title = 'Create Users Users';
$this->params['breadcrumbs'][] = ['label' => 'Users Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
