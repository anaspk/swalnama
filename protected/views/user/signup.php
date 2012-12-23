<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Sign Up',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Sign Up</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'primaryButtonLabel'=>'Sign Up')); ?>