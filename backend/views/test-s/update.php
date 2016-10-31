<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestS */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Test S',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Test Ss'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="test-s-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
