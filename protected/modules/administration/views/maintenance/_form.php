<?php
/* @var $this MaintenanceController */
/* @var $model Maintenance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maintenance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'subequipment_id'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'by_whom'); ?>
		<?php echo $form->textField($model,'by_whom',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'by_whom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'next_maintenance_date'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    $this->widget('CJuiDateTimePicker',array(
        'model'=>$model, //Model object
        'attribute'=>'next_maintenance_date', //attribute name
                'mode'=>'datetime', //use "time","date" or "datetime" (default)
        'options'=>array("dateFormat"=>'yy-mm-dd'),
        'language' => '' // jquery plugin options
    ));
?>
		<?php echo $form->error($model,'next_maintenance_date'); ?>
	</div>

	

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->