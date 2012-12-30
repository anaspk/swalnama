<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	$model->surveyName=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Surveys', 'url'=>array('index')),
        array('label'=>'Delete Survey', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this survey?')),
	array('label'=>'Create New Survey', 'url'=>array('create')),
);
?>

<h1>Update Survey - <?php echo $model->surveyName; ?></h1>
<?php if ( $model->status != Survey::STATUS_PUBLISHED ): ?>
<div class="well well-small">
    <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'link',
            'type' => 'success',
            'url' => $this->createUrl( 'question/index', array( 'surveyId'=>$model->id ) ),
            'label' => 'Manage Questions',
        ) );
    ?>
    <?php
        if ( count($model->questions) >= 1 )
        {
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'link',
                'type' => 'success',
                'url' => $this->createUrl( 'survey/publish', array( 'id'=>$model->id ) ),
                'label' => 'Publish Survey',
            ) );
        }
    ?>
</div>
<?php endif; ?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>