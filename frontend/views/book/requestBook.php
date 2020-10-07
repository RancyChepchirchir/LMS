<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book */
/* @var $form ActiveForm */
?>
<div class="requestBook">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'bookName') ?>
        <?= $form->field($model, 'referenceNo')->textInput(['disabled' => true])  ?>
        <?= $form->field($model, 'publisher')->textInput(['disabled' => true])  ?>
        <?= $form->field($model, 'status')->textInput(['disabled' => true])  ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- requestBook -->
