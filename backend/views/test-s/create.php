<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TestS */

$this->title = Yii::t('app', 'Create Test S');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Test Ss'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-s-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
