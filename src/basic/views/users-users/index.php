<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersUsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'users_id',
            'users2_id',
            'usr1_blocked_usr2',
            'usr2_blocked_usr1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
