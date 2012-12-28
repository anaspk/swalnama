<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php 
    $this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'type' => 'striped bordered',
        'columns' => array(
            'id',
            'username',
            'emailAddress',
            'firstName',
            'lastName',
            array(
                'header' => Yii::t('ses', 'Manage'),
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{update} {delete}',
            ),
        ),
    ));
?>