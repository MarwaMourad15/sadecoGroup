<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Setting */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Setting',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-create">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body"><?= $this->render('_form', [
                'model' => $model,
            ]) ?></div>
    </div>





</div>
