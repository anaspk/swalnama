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

<?php echo $form; ?>