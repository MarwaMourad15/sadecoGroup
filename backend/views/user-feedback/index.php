<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserFeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User Feedbacks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-feedback-index">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


            <p>
        <?= Html::a(Yii::t('app', 'Create User Feedback'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'company',
            'country',
            'email:email',
            // 'mobile',
            // 'message:ntext',
            // 'attached_file',
            // 'email_used:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
