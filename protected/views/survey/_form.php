<?php
/* @var $this SurveyController */
/* @var $model Survey */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'survey-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surveyName'); ?>
		<?php echo $form->textField($model,'surveyName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'surveyName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surveyDescription'); ?>
		<?php echo $form->textField($model,'surveyDescription',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'surveyDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'welcomeMessage'); ?>
		<?php echo $form->textArea($model,'welcomeMessage',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'welcomeMessage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goodbyeMessage'); ?>
		<?php echo $form->textArea($model,'goodbyeMessage',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'goodbyeMessage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacyLevel'); ?>
		<?php echo $form->textField($model,'privacyLevel'); ?>
		<?php echo $form->error($model,'privacyLevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creationDate'); ?>
		<?php echo $form->textField($model,'creationDate'); ?>
		<?php echo $form->error($model,'creationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publishDate'); ?>
		<?php echo $form->textField($model,'publishDate'); ?>
		<?php echo $form->error($model,'publishDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->