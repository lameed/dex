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
		<?php echo $form->textField($model,'weight',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateOrdered'); ?>
		<?php echo $form->textField($model,'dateOrdered'); ?>
		<?php echo $form->error($model,'dateOrdered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateSupplied'); ?>
		<?php echo $form->textField($model,'dateSupplied'); ?>
		<?php echo $form->error($model,'dateSupplied'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drawing'); ?>
		<?php echo $form->textField($model,'drawing',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'drawing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumables_id'); ?>
		<?php echo $form->textField($model,'consumables_id'); ?>
		<?php echo $form->error($model,'consumables_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
		<?php echo $form->error($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastUpdated'); ?>
		<?php echo $form->textField($model,'LastUpdated'); ?>
		<?php echo $form->error($model,'LastUpdated'); ?>
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