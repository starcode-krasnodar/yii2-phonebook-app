<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (Yii::$app->user->can('manage')):?>
        <p>
            <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'phone',
            'name',
            'created',
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => Yii::$app->user->can('manage') ? null : function(){return '';},
                    'delete' => Yii::$app->user->can('manage') ? null : function(){return '';},
                ],
            ],
        ],
    ]); ?>

</div>
