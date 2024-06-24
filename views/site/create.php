<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Users_table $model */

$this->title = 'Create Users Table';
$this->params['breadcrumbs'][] = ['label' => 'Users Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
