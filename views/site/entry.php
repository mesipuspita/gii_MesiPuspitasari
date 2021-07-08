<?php
use yii\helpers\Html;
<<<<<<< HEAD
use yii\widgets\ActionForm; ?>
<?php $form = ActiveForm::begin(); ?>
	<?= %form->field($model, 'name') ?>
	<?= %form->field($model, 'email') ?>
<div class="form-group">
	<?= Html::submitButton('Submit', ['class'=> 'btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
=======
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm:: begin(); ?>
	<?= $form->field($model, 'name') ?>
	<?=$form->field($model, 'email') ?>

	<div class="form-group">
	<? =Html:: submitButton('Submit',['class'=>'btn btn-primary']) ?>

	 </div>    
	 <?php ActiveForm:: end(); ?>
>>>>>>> 72f541c (gii_Mesi)
