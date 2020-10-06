<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Students */

$this->title = 'Update Students: ' . $model->studentsId;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->studentsId, 'url' => ['view', 'id' => $model->studentsId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
