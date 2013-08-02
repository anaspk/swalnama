<?php
/* @var $this OptionController */
/* @var $model Option */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'option-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'questionId'); ?>
		<?php echo $form->textField($model,'questionId'); ?>
		<?php echo $form->error($model,'questionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'optionStatement'); ?>
		<?php echo $form->textField($model,'optionStatement',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'optionStatement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->