<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\LibCatalouge */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Lib Catalog',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lib Catalogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lib-catalouge-create">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
