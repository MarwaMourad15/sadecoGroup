<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserFeedback */

$this->title = Yii::t('app', 'Create User Feedback');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Feedbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-feedback-create">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


            <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
