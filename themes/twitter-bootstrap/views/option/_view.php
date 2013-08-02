<?php
/* @var $this OptionController */
/* @var $data Option */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questionId')); ?>:</b>
	<?php echo CHtml::encode($data->questionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('optionStatement')); ?>:</b>
	<?php echo CHtml::encode($data->optionStatement); ?>
	<br />


</div>