<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\About */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'About',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abouts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
