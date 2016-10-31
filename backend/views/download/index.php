<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DownloadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Downloads');
$this->params['breadcrumbs'][] = $this->title;
$arr = \yii\helpers\ArrayHelper::map(\backend\models\DownCatalouge::find()->all(), 'id', 'title');
?>
<div class="download-index">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Download',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            [
                'attribute' => 'catalouge_id',
                'format'    => 'raw',
                'value'     => function ($model) {
                    return $model->catalouge['title'];
                },
                'filter' => Html::activeDropDownList($searchModel, 'catalouge_id', $arr ,['class'=>'form-control','prompt' => 'Select Catalog']),
            ],
            //'image',
            // 'file',
            'intro:ntext',
            //'description:ntext',
            // 'created_at',
            // 'updated_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div>
</div>
