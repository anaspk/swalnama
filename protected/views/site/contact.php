<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

<p>
If you need help or have any other kind of queries, please fill out the following form to contact us. Thank you.
</p>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
        'type' => 'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions' => array(
            'class' => 'well',
        ),
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
<?php echo $form->textFieldRow($model,'name', array('class'=>'span8')); ?>
<?php echo $form->textFieldRow($model,'email', array('class'=>'span8')); ?>
<?php echo $form->textFieldRow($model,'subject', array('class'=>'span8', 'size'=>60,'maxlength'=>128)); ?>
<?php echo $form->textAreaRow($model,'body', array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>

<?php if(CCaptcha::checkRequirements()): ?>
    <?php echo $form->captchaRow($model, 'verifyCode'); ?>
<?php endif; ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => 'Submit',
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'link',
        'url' => Yii::app()->user->returnUrl,
        'label' => 'Cancel',
    )); ?>
</div>

<?php $this->endWidget(); ?>

<?php endif; ?>