<?php
/* @var $this MaintenanceController */
/* @var $data Maintenance */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('subequipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->subequipment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('by_whom')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->by_whom), array('maintenance/view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('next_maintenance_date')); ?>:</b>
	<?php $date = strtotime(CHtml::encode($data->next_maintenance_date));
	$remaining = $date - time();
	$days_remaining = floor($remaining / 86400);
	$hour_remaining = floor(($remaining % 86400) / 3600); ?>
	<?php echo "$days_remaining and $hour_remaining hrs left"; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br /> -->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>