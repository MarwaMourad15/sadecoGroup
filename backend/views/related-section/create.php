<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RelatedSection */

$this->title = Yii::t('app', 'Create Related Section');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Related Sections'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="related-section-create">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
