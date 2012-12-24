<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'question-form',
        'type'=>'horizontal',
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textAreaRow($model, 'statement', array('class'=>'span8', 'maxlength'=>255)); ?>
<?php echo $form->checkboxRow($model, 'isCompulsory'); ?>
<?php echo $form->dropDownListRow($model, 'questionType', $model->questionTypes, array('class'=>'span8')); ?>
<?php Yii::app()->clientScript->registerScriptFile('js/questionForm.js', CClientScript::POS_END); ?>
<div id="questionOptionsBlock">
    <?php for ( $i=1; $i<=4; $i++): ?>
        <div class="control-group">
            <label class="control-label" for="options[<?php echo $i; ?>]">Option <?php echo $i; ?></label>
            <div class="controls">
                <input class="span8" type="text" name="options[<?php echo $i; ?>]" />
            </div>
        </div>
    <?php endfor; ?>
    <div class="control-group" id="add-option-btn-group">
        <div class="controls" >
            <?php $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'link',
                'type' => 'success',
                'label' => 'Add another option',
                'url' => '#',
                'id' => 'add-option-btn'
            )); ?>
        </div>
    </div>
    <?php echo $form->checkboxRow($model, 'multipleChoiceAllowed'); ?>
</div>
<div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Add Question',
        )); ?>
</div>

<?php $this->endWidget(); ?>