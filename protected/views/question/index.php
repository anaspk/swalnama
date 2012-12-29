<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
        $model->survey->surveyName => array('survey/view', 'id'=>$model->survey->id),
	'Manage Questions',
);

$this->menu=array(
	array('label'=>'Create Question', 'url'=>array('create')),
	array('label'=>'Manage Question', 'url'=>array('admin')),
);
?>

<h2><?php echo $model->survey->surveyName; ?></h2>
<?php if ($model->survey->status != Survey::STATUS_PUBLISHED): ?>
    <div class="well well-small">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'link',
            'type' => 'success',
            'label' => 'Add New Question',
            'url' => CHtml::normalizeUrl(array('question/create', 'surveyId' => $model->survey->id)),
        )); ?>
    </div>
<?php endif; ?>
<h3>Manage Questions</h3>
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