<?php
/* @var $this MaintenanceController */
/* @var $model Maintenance */

$this->breadcrumbs=array(
	'Maintenances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Maintenance', 'url'=>array('index')),
	array('label'=>'Create Maintenance', 'url'=>array('create')),
	array('label'=>'Update Maintenance', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Maintenance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Maintenance', 'url'=>array('admin')),
);
?>

<h1>View Maintenance #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'subequipment_id',
		'by_whom',
		'next_maintenance_date - time()',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
