<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	$model->survey->surveyName => array('question/index', 'surveyId'=>$model->survey->id),
	'Add New Question',
);

$this->menu=array(
	array('label'=>'List Question', 'url'=>array('index')),
	array('label'=>'Manage Question', 'url'=>array('admin')),
);
?>

<h1>Survey - <?php echo $model->survey->surveyName; ?></h1>
<h2>Add New Question</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>