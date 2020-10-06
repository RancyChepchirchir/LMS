<?php

use yii\helpers\Html;
use yii\widgets\Activeform;
 ?>

 <div class = 'assighnbook'>

   <?php $form = Activeform::begin();  ?>

   <?= $form -> field($model, 'studentId') ?>
   <?= $form -> field($model, 'bookId') ?>
   <?= $form -> field($model, 'borrowDate') ?>
   <?= $form -> field($model, 'returnDate') ?>

   <div class = 'form-group'>
     <?= Html::submitButton('submit', ['class'=>'btn btn-primary']) ?>
  </div>

<?php Activeform::end(); ?>

</div><!-- assighnbook -->
     
