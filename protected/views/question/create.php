<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Question', 'url'=>array('index')),
	array('label'=>'Manage Question', 'url'=>array('admin')),
);
?>

<h1>Survey - <?php echo $model->survey->surveyName; ?></h1>
<h1>Add New Question</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>