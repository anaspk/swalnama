<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

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
                'header' => Yii::t('ses', 'View'),
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{view} {update} {delete}',
            ),
        ),
    ));
?>

<?php
// TbJsonGridView - not working yet - gives "paser error" in a JS alert on trigger
//    $this->widget('bootstrap.widgets.TbJsonGridView', array(
//        'dataProvider' => $model->search(),
//        'filter' => $model,
//        'type' => 'striped bordered condensed',
//        'summaryText' => false,
//        'cacheTTL' => 10, // cache will be stored 10 seconds (see cacheTTLType)
//        'cacheTTLType' => 's', // type can be of seconds, minutes or hours
//        'columns' => array(
//            'id',
//            'username',
//            'emailAddress',
//            'firstName',
//            'lastName',
//            array(
//                'header' => Yii::t('ses', 'Edit'),
//                'class' => 'bootstrap.widgets.TbJsonButtonColumn',
//                'template' => '{view}',
//            ),
//        ),
//    ));
?>