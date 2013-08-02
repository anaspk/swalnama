<?php
/* @var $this SurveyController */
/* @var $model Survey */
/* @var $form TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'survey-form',
	'type'=>'horizontal',
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'surveyName', array('class'=>'span12', 'maxlength'=>45)); ?>
<?php echo $form->textAreaRow($model, 'surveyDescription', array('class'=>'span12', 'rows'=>4, 'maxlength'=>255)); ?>
<?php echo $form->html5EditorRow($model, 'welcomeMessage', array('height'=>'200px')); ?>
<?php echo $form->html5EditorRow($model, 'goodbyeMessage', array('height'=>'200px')); ?>
<?php echo $form->dropDownListRow($model, 'privacyLevel', $model->privacyOptions, array(
    'class' => 'span6',
)); ?>
<?php
if ( !$model->isNewRecord )
    echo $form->dropDownListRow($model, 'status', $model->statusOptions, array(
        'disabled' => count($model->questions) == 0,
    )); 
?>
<?php echo $form->datepickerRow($model, 'endDate', array(
    'append' => '<i class="icon-calendar"></i>',
    'options' => array( 'format' => 'yyyy-mm-dd' ),
)); ?>
<div class="form-actions">
    <?php $this->widget( 'bootstrap.widgets.TbButton', array( 
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? 'Create' : 'Update',
            ) ); ?>
    <?php $this->widget( 'bootstrap.widgets.TbButton', array( 
            'buttonType' => 'reset',
            'type' => 'warning',
            'label' => 'Reset',
            ) ); ?>
    <?php $this->widget( 'bootstrap.widgets.TbButton', array( 
            'buttonType' => 'link',
            'url' => $this->createUrl('index'),
            'label' => 'Cancel',
            ) ); ?>
</div>

<?php $this->endWidget(); ?>