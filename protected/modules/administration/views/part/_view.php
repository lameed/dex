<?php
/* @var $this PartController */
/* @var $data Part */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('part_number')); ?>:</b>
	<?php echo CHtml::encode($data->part_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturerID')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplierID')); ?>:</b>
	<?php echo CHtml::encode($data->supplierID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('equipmentID')); ?>:</b>
	<?php echo CHtml::encode($data->equipmentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->LastUpdated); ?>
	<br />

	*/ ?>

</div>