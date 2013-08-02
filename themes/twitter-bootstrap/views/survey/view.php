<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	$model->surveyName,
);

$this->menu=array(
	array('label'=>'List Survey', 'url'=>array('index')),
	array('label'=>'Create Survey', 'url'=>array('create')),
	array('label'=>'Update Survey', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Survey', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Survey', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->surveyName; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'surveyName',
		'surveyDescription',
		'welcomeMessage',
		'goodbyeMessage',
		'statusText',
		'privacyText',
		'creationDate',
		'publishDate',
		'endDate',
	),
)); ?>
