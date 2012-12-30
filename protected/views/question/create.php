<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	$model->survey->surveyName => array('question/index', 'surveyId'=>$model->survey->id),
	'Add New Question',
);

$this->menu=array(
	array('label'=>'List Questions', 'url'=>array('index', 'surveyId'=>$model->surveyId)),
	array('label'=>'Add New Question', 'url'=>array('create', 'surveyId'=>$model->surveyId), 'itemOptions'=>array('class'=>'active')),
);
?>

<h1>Survey - <?php echo $model->survey->surveyName; ?></h1>
<h2>Add New Question</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>