<?php
/* @var $this MovementController */
/* @var $model Movement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movement-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'movement_from'); ?>
		<?php echo $form->textField($model,'movement_from',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'movement_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movement_to'); ?>
		<?php echo $form->textField($model,'movement_to',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'movement_to'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'subequipment_id'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requested_by'); ?>
		<?php echo $form->textField($model,'requested_by',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'requested_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model,'status_id', $model->getStatusOptions()); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->