<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pages */

$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-view">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?/*= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) */?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'title',
            [
                'attribute' => 'image',
                'format'=>'raw',
                'value' => Html::img(Yii::$app->params['siteLink'].$model->image, ['width' => 120, 'alt'   => 'Image', 'class'=>'pull-left img-responsive'])
            ],
            'created_at:datetime',
            'updated_at:datetime',
            'intro:ntext',
            [
                'attribute' => 'description',
                'format'=>'raw',
                'value'=>$model->description,
            ],

        ],
    ]) ?>

</div>
</div>
</div>
