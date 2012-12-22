<?php
/* @var $this SurveyController */
/* @var $model Survey */

$this->breadcrumbs=array(
	'Surveys',
);

$this->menu=array(
	array('label'=>'Create Survey', 'url'=>array('create')),
	array('label'=>'Manage Survey', 'url'=>array('admin')),
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
                'header' => Yii::t('ses', 'Administer'),
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{view} {update} {delete}',
            ),
        ),
    ));
?>