<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	$model->surveyName=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Survey', 'url'=>array('index')),
	array('label'=>'Create Survey', 'url'=>array('create')),
	array('label'=>'View Survey', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Survey', 'url'=>array('admin')),
);
?>

<h1>Update Survey - <?php echo $model->surveyName; ?></h1>
<div class="well well-small">
    <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'link',
            'type' => 'success',
            'url' => $this->createUrl( 'question/index', array( 'surveyId'=>$model->id ) ),
            'label' => 'Manage Questions',
            //'size' => 'large',
        ) );
    ?>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>