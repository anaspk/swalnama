<?php
/* @var $this QuestionController */
/* @var $model Question */
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
		<?php echo $form->label($model,'surveyId'); ?>
		<?php echo $form->textField($model,'surveyId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statement'); ?>
		<?php echo $form->textField($model,'statement',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'questionType'); ?>
		<?php echo $form->textField($model,'questionType'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'multipleChoiceAllowed'); ?>
		<?php echo $form->textField($model,'multipleChoiceAllowed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isCompusory'); ?>
		<?php echo $form->textField($model,'isCompusory'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->