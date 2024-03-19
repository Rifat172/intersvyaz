<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Traffics $model */

$this->title = 'Create Traffics';
$this->params['breadcrumbs'][] = ['label' => 'Traffics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="traffics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
