<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ElementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Elements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="element-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Element', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'axisx1',
            'axisy1',
            'axisx2',
            //'axisy2',
            //'axisz',
            //'borderwidth',
            //'bordercolor',
            //'innercolor',
            //'gridrows',
            //'gridcolumns',
            //'radiolt',
            //'radiort',
            //'radiolb',
            //'radiorb',
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
