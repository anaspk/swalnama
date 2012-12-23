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
    <?php //echo $form->textFieldRow($model->options[0], 'optionStatement'); ?>
    <?php //echo $form->textFieldRow($model->options[1], 'optionStatement'); ?>
    <?php //echo $form->textFieldRow($model->options[2], 'optionStatement'); ?>
    <?php //echo $form->textFieldRow($model->options[3], 'optionStatement'); ?>
    <div class="control-group">
        <label class="control-label" for="options[1]">Option 1</label>
        <div class="controls">
            <input class="span8" type="text" id="options[1]" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="options[2]">Option 2</label>
        <div class="controls">
            <input class="span8" type="text" id="options[2]" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="options[3]">Option 3</label>
        <div class="controls">
            <input class="span8" type="text" id="options[3]" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="options[4]">Option 4</label>
        <div class="controls">
            <input class="span8" type="text" id="options[4]" />
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