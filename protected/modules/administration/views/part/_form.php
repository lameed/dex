<?php
/* @var $this PartController */
/* @var $model Part */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'part-form',
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
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'part_number'); ?>
		<?php echo $form->textField($model,'part_number',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'part_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->filefield($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx(Manufacturer::model(), 'Choose Manufacturer'); ?>
		<?php 
		echo $form->dropDownList(
		Manufacturer::model(),
		'id',
		CHtml::listData(
		Manufacturer::model()->findAll(),
		'id',
		'name'
		),
		array(
		'class' =>'my-drop-down',
		'options' => array(
		'1' => array(
		'seleted' => "selected"
		)
		)
		)
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx(Supplier::model(), 'Choose Supplier'); ?>
		<?php 
		echo $form->dropDownList(
		Supplier::model(),
		'id',
		CHtml::listData(
		Supplier::model()->findAll(),
		'id',
		'name'
		),
		array(
		'class' =>'my-drop-down',
		'options' => array(
		'1' => array(
		'seleted' => "selected"
		)
		)
		)
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx(Equipment::model(), 'Used for'); ?>
		<?php 
		echo $form->dropDownList(
		Equipment::model(),
		'id',
		CHtml::listData(
		Equipment::model()->findAll(),
		'id',
		'title'
		),
		array(
		'class' =>'my-drop-down',
		'options' => array(
		'1' => array(
		'seleted' => "selected"
		)
		)
		)
		); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->