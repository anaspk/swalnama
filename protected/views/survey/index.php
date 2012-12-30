<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys',
);

$this->menu=array(
	array('label'=>'List Surveys', 'url'=>array('index'), 'itemOptions'=>array('class'=>'active')),
	array('label'=>'Create New Survey', 'url'=>array('create')),
);
?>

<h1>Surveys</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'type' => 'striped bordered',
        'columns' => array(
            'id',
            'surveyName',
            'statusText',
            'privacyText',
            array(
                'header' => Yii::t('ses', 'Manage'),
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{update} {delete}',
            ),
        ),
    ));
?>