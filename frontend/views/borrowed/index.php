<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BorrowedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Borroweds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borrowed-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Borrowed', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bbId',
            'studentId',
            'bookId',
            'borrowDate',
            'expectedReturn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
