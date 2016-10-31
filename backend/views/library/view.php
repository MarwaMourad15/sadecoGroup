<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Library */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Libraries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="library-view">

    <div class="panel panel-primary">
        <div class="panel-heading"><h5><?= Html::encode($this->title) ?></h5></div>
        <div class="panel-body">


        <p>
            <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'title',
            [
                'attribute' => 'catalouge_id',
                'value' => $model->catalouge['title'],
            ],
            [
                'attribute' => 'image',
                'format'=>'raw',
                'value' => Html::img(Yii::$app->params['siteLink'].$model->image, ['width' => 120, 'alt'   => 'Image', 'class'=>'pull-left img-responsive'])
            ],
            'link:url',
            'intro:ntext',
            [
                'attribute' => 'description',
                'format'=>'raw',
                'value'=>$model->description,
            ],
            'created_at:datetime',
            'updated_at:datetime',

        ],
    ]) ?>

</div>
</div>
</div>
