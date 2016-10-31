<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Settings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-index">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?/*= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Setting',
]), ['create'], ['class' => 'btn btn-success']) */?>
    </p>
-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'facebook',
            'twitter',
            'google_plus',
            'linkedin',
            // 'phone_number',
            // 'address',
            // 'map_lat',
            // 'map_lng',
            // 'email_scs:email',
            // 'email_sap:email',

            ['class' => 'yii\grid\ActionColumn',
            'template'=> '{view} {update}'
            ],
        ],
    ]); ?>

</div>
    </div>
</div>