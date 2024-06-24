<?php
use yii\helpers\Html;

$this->title = 'Table';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-table">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       Таблица пользователей БД
    </p>
    <?php if($users) { ?>
<ul>
<?php foreach ($users as $user): ?>
   <li>
      <?= Html::encode($user->Имя) ?>
      <?= Html::encode($user->Фамилия) ?>
   </li>
<?php endforeach; ?>
<?php } ?>
</ul>

<table class="table">
   <tr><th>Имя и Фамилия</th></tr>
   <?php foreach ($users as $user){
      echo "<tr><td>{$user ['Имя']} {$user ['Фамилия']}</td></tr>";
   }
   ?>
   </table>
