<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookAuthors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-authors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'authorId')->textInput() ?>

    <?= $form->field($model, 'bookId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
