<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Borrowed */

$this->title = 'Update Borrowed: ' . $model->bbId;
$this->params['breadcrumbs'][] = ['label' => 'Borroweds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bbId, 'url' => ['view', 'id' => $model->bbId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="borrowed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
