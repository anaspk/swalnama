<?php
/* @var $this SurveyController */
/* @var $data Survey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surveyName')); ?>:</b>
	<?php echo CHtml::encode($data->surveyName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surveyDescription')); ?>:</b>
	<?php echo CHtml::encode($data->surveyDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('welcomeMessage')); ?>:</b>
	<?php echo CHtml::encode($data->welcomeMessage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goodbyeMessage')); ?>:</b>
	<?php echo CHtml::encode($data->goodbyeMessage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('privacyLevel')); ?>:</b>
	<?php echo CHtml::encode($data->privacyLevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creationDate')); ?>:</b>
	<?php echo CHtml::encode($data->creationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publishDate')); ?>:</b>
	<?php echo CHtml::encode($data->publishDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	*/ ?>

</div>