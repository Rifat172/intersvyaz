<?php

use app\models\Traffics;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use kartik\grid;

/** @var yii\web\View $this */
/** @var app\models\TrafficsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Тариф';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="traffics-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить тариф', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'ID',
            'price',
            'name:ntext',
            [
                'class'=>'kartik\grid\EditableColumn',
                'header'=>'speedHeader',
                'attribute'=>'speed',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Traffics $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
