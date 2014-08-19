<?php
/* @var $this ConsumablepropertyController */
/* @var $model Consumableproperty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consumableproperty-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'manufacturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designer'); ?>
		<?php echo $form->textField($model,'designer',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'designer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateOrdered'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    $this->widget('CJuiDateTimePicker',array(
        'model'=>$model, //Model object
        'attribute'=>'dateOrdered', //attribute name
                'mode'=>'datetime', //use "time","date" or "datetime" (default)
        'options'=>array("dateFormat"=>'yy-mm-dd'),
        'language' => '' // jquery plugin options
    ));
?>
		<?php echo $form->error($model,'dateOrdered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateSupplied'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    $this->widget('CJuiDateTimePicker',array(
        'model'=>$model, //Model object
        'attribute'=>'dateSupplied', //attribute name
                'mode'=>'datetime', //use "time","date" or "datetime" (default)
        'options'=>array("dateFormat"=>'yy-mm-dd'),
        'language' => '' // jquery plugin options
    ));
?>
		<?php echo $form->error($model,'dateSupplied'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drawing'); ?>
		<?php echo $form->fileField($model, 'drawing'); ?>
		<?php echo $form->error($model,'drawing'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->hiddenfield($model,'consumables_id'); ?>
		
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->