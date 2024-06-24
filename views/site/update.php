<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Users_table $model */

$this->title = 'Update Users Table: ' . $model->Имя;
$this->params['breadcrumbs'][] = ['label' => 'Users Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Имя, 'url' => ['view', 'Имя' => $model->Имя]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
