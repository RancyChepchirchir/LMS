<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookAuthors */

$this->title = 'Create Book Authors';
$this->params['breadcrumbs'][] = ['label' => 'Book Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-authors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
