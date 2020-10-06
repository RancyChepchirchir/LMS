<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Authors */

$this->title = 'Update Authors: ' . $model->authorId;
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->authorId, 'url' => ['view', 'id' => $model->authorId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="authors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
