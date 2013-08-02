<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Surveys', 'url'=>array('index')),
	array('label'=>'Create New Survey', 'url'=>array('create'), 'itemOptions'=>array('class'=>'active')),
);
?>

<h1>Create Survey</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>