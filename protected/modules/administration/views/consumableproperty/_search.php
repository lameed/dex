<?php
/* @var $this ConsumablepropertyController */
/* @var $model Consumableproperty */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'designer'); ?>
		<?php echo $form->textField($model,'designer',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateOrdered'); ?>
		<?php echo $form->textField($model,'dateOrdered'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateSupplied'); ?>
		<?php echo $form->textField($model,'dateSupplied'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drawing'); ?>
		<?php echo $form->textField($model,'drawing',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumables_id'); ?>
		<?php echo $form->textField($model,'consumables_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateCreatedd'); ?>
		<?php echo $form->textField($model,'DateCreatedd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LastUpdated'); ?>
		<?php echo $form->textField($model,'LastUpdated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->