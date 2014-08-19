<?php
/* @var $this ImagesController */
/* @var $model Images */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'images-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'URL'); ?>
		<?php echo $form->textField($model,'URL',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'URL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'part_id'); ?>
		<?php echo $form->textField($model,'part_id'); ?>
		<?php echo $form->error($model,'part_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
		<?php echo $form->error($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastUpdated'); ?>
		<?php echo $form->textField($model,'LastUpdated'); ?>
		<?php echo $form->error($model,'LastUpdated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->