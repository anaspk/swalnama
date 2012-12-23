<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form TbActiveForm */
?>

<?php
    $form = $this->beginWidget( 'bootstrap.widgets.TbActiveForm', array(
        'id' => 'user-form',
        'type' => 'horizontal',
    ) );
?>
<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow( $model, 'username'); ?>
<?php echo $form->passwordFieldRow( $model, 'password'); ?>
<?php echo $form->textFieldRow( $model, 'firstName'); ?>
<?php echo $form->textFieldRow( $model, 'lastName'); ?>
<?php echo $form->textFieldRow( $model, 'emailAddress'); ?>
<?php echo $form->datepickerRow( $model, 'dateOfBirth', array(
    'append' => '<i class="icon-calendar"></i>',
    'options' => array( 'format' => 'yyyy-mm-dd' ),
    ) ); ?>
<?php echo $form->dropDownListRow( $model, 'gender', $model->genderOptions ); ?>
<?php echo $form->dropDownListRow( $model, 'country', $model->countries ); ?>
<div class="form-actions">
        <?php $this->widget( 'bootstrap.widgets.TbButton', array( 
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $primaryButtonLabel,
            ) ); ?>
</div>

<?php $this->endWidget(); ?>