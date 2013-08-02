<?php
/* @var $this OptionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options',
);

$this->menu=array(
	array('label'=>'Create Option', 'url'=>array('create')),
	array('label'=>'Manage Option', 'url'=>array('admin')),
);
?>

<h1>Options</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'type' => 'striped bordered',
        'columns' => array(
            array(
                'class' => 'bootstrap.widgets.TbEditableColumn',
                'name' => 'optionStatement',
                'editable' => array(
                    'url' => $this->createUrl('option/update'),
                    'placement' => 'right',
                    'inputclass' => 'span12',
                ),
            ),
        ),
    ));
?>
