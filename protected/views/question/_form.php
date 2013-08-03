<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'surveyId'); ?>
		<?php echo $form->textField($model,'surveyId'); ?>
		<?php echo $form->error($model,'surveyId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statement'); ?>
		<?php echo $form->textField($model,'statement',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'questionType'); ?>
		<?php echo $form->textField($model,'questionType'); ?>
		<?php echo $form->error($model,'questionType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'multipleChoiceAllowed'); ?>
		<?php echo $form->textField($model,'multipleChoiceAllowed'); ?>
		<?php echo $form->error($model,'multipleChoiceAllowed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isCompulsory'); ?>
		<?php echo $form->textField($model,'isCompulsory'); ?>
		<?php echo $form->error($model,'isCompulsory'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->