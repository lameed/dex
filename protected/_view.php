<?php
/* @var $this ConsumablepropertyController */
/* @var $data Consumableproperty */
?>

<div class="view">
<div class="imgleft">
	<?php $img=CHtml::encode($data->drawing); ?>
		<?php echo CHtml::image('../../images/' . $img); ?>

</div>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designer')); ?>:</b>
	<?php echo CHtml::encode($data->designer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateOrdered')); ?>:</b>
	<?php echo CHtml::encode($data->dateOrdered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateSupplied')); ?>:</b>
	<?php echo CHtml::encode($data->dateSupplied); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('drawing')); ?>:</b>
	<?php echo CHtml::encode($data->drawing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumables_id')); ?>:</b>
	<?php echo CHtml::encode($data->consumables_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->LastUpdated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>
<div class='.clearfloat'></div>