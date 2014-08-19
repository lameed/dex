<?php
/* @var $this ConsumablepropertyController */
/* @var $model Consumableproperty */

$this->breadcrumbs=array(
	'Consumableproperties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Consumableproperty', 'url'=>array('index')),
	array('label'=>'Create Consumableproperty', 'url'=>array('create')),
	array('label'=>'Update Consumableproperty', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Consumableproperty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consumableproperty', 'url'=>array('admin', 'pid'=>$model->consumables->id)),
);
?>

<h1>View Consumableproperty #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'manufacturer',
		'designer',
		'weight',
		'length',
		'dateOrdered',
		'dateSupplied',
		'drawing',
		'consumables_id',
		'DateCreatedd',
		'create_user_id',
		'LastUpdated',
		'update_user_id',
	),
)); ?>
