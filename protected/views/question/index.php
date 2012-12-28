<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
        $model->survey->surveyName => array('survey/view', 'id'=>$model->survey->id),
	'Questions',
);

$this->menu=array(
	array('label'=>'Create Question', 'url'=>array('create')),
	array('label'=>'Manage Question', 'url'=>array('admin')),
);
?>

<h2>Questions</h2>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'link',
    'type' => 'success',
    'label' => 'Add New Question',
    'url' => CHtml::normalizeUrl(array('question/create', 'surveyId' => $model->survey->id)),
)); ?>
<?php 
    $this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'type' => 'striped bordered',
        'columns' => array(
            'statement',
            'questionTypeText',
            'isCompulsoryText',
            array(
                'header' => Yii::t('ses', 'Manage'),
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{update} {delete}',
            ),
        ),
    ));
?>