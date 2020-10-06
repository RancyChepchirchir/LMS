<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Borrowed */

$this->title = 'Create Borrowed';
$this->params['breadcrumbs'][] = ['label' => 'Borroweds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borrowed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
