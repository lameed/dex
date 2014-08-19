<?php
/* @var $this ConsumableitemController */
/* @var $model Consumableitem */

$this->breadcrumbs=array(
	'Consumableitems'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Consumableitem', 'url'=>array('index')),
	array('label'=>'Create Consumableitem', 'url'=>array('create')),
	array('label'=>'Update Consumableitem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Consumableitem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consumableitem', 'url'=>array('admin')),
);
?>

<h1>View Consumableitem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'DateCreated',
		'create_user_id',
		'LastUpdated',
		'update_user_id',
	),
)); ?>
