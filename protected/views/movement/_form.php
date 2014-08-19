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
		<?php echo $form->labelEx($model,'subequipment_id'); ?>
		<?php echo $form->textField($model,'subequipment_id'); ?>
		<?php echo $form->error($model,'subequipment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requested_by'); ?>
		<?php echo $form->textField($model,'requested_by',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'requested_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->textField($model,'status_id', $model->getStatusOptions()); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->