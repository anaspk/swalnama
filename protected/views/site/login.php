<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
/* @var $loginForm TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<?php
    $loginForm = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'loginForm',
        'type' => 'horizontal',
        //'htmlOptions' => array( 'class' => 'well'),
    ));
?>
<?php echo $loginForm->textFieldRow( $model, 'username' ); ?>
<?php echo $loginForm->passwordFieldRow( $model, 'password' ); ?>
<?php echo $loginForm->checkboxRow( $model, 'rememberMe' ); ?>
<div class="form-actions">
    <?php $this->widget( 'bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login', 'type'=>'primary') ); ?>
</div>
<?php $this->endWidget(); ?>