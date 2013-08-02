<?php
/* @var $this QuestionController */
/* @var $data Question */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surveyId')); ?>:</b>
	<?php echo CHtml::encode($data->surveyId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statement')); ?>:</b>
	<?php echo CHtml::encode($data->statement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questionType')); ?>:</b>
	<?php echo CHtml::encode($data->questionType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('multipleChoiceAllowed')); ?>:</b>
	<?php echo CHtml::encode($data->multipleChoiceAllowed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isCompulsory')); ?>:</b>
	<?php echo CHtml::encode($data->isCompulsory); ?>
	<br />


</div>