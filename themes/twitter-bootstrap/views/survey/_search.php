<?php
/* @var $this SurveyController */
/* @var $model Survey */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surveyName'); ?>
		<?php echo $form->textField($model,'surveyName',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surveyDescription'); ?>
		<?php echo $form->textField($model,'surveyDescription',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'welcomeMessage'); ?>
		<?php echo $form->textArea($model,'welcomeMessage',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodbyeMessage'); ?>
		<?php echo $form->textArea($model,'goodbyeMessage',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privacyLevel'); ?>
		<?php echo $form->textField($model,'privacyLevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creationDate'); ?>
		<?php echo $form->textField($model,'creationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publishDate'); ?>
		<?php echo $form->textField($model,'publishDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->