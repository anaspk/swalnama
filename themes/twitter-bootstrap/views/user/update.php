<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create New User', 'url'=>array('create')),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this User?')),
);
?>

<h1>Update <?php echo $model->id == Yii::app()->user->id ? 'Profile' : 'User' ?> - <?php echo $model->fullName; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'primaryButtonLabel'=>$primaryButtonLabel)); ?>