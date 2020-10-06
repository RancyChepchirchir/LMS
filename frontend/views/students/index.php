<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Students', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'studentsId',
            'userId',
            'fullName',
            'idNumber',
            'phoneNumber',
            //'regNo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
