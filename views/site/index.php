<?php

use app\models\Users_table;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-table-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Имя',
            'Фамилия',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Users_table $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Имя' => $model->Имя]);
                 }
            ],
        ],
    ]); ?>


</div>
