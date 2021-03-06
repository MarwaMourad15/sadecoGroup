<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RelatedSection */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Related Section',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Related Sections'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="related-section-update">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
