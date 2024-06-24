<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Users_table $model */

$this->title = $model->Имя;
$this->params['breadcrumbs'][] = ['label' => 'Users Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Имя' => $model->Имя], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Имя' => $model->Имя], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Имя',
            'Фамилия',
        ],
    ]) ?>

</div>
