<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	$model->survey->surveyName => array('survey/view', 'id' => $model->survey->id),
	$model->statement=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Questions', 'url'=>array('index', 'surveyId'=>$model->surveyId)),
	array('label'=>'Add New Question', 'url'=>array('create', 'surveyId'=>$model->surveyId)),
        array('label'=>'Delete Question', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this Question?')),
);
?>

<h1>Update Question</h1>
<h2><?php echo $model->statement; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>