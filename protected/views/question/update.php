<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	$model->survey->surveyName => array('survey/view', 'id' => $model->survey->id),
	$model->statement=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Question', 'url'=>array('index')),
	array('label'=>'Create Question', 'url'=>array('create')),
	array('label'=>'View Question', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Question', 'url'=>array('admin')),
);
?>

<h1>Update Question</h1>
<h2><?php echo $model->statement; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>