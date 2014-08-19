<?php
/* @var $this MovementController */
/* @var $model Movement */

$this->breadcrumbs=array(
	'Movements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Movement', 'url'=>array('index')),
	array('label'=>'Create Movement', 'url'=>array('create')),
	array('label'=>'Update Movement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Movement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Movement', 'url'=>array('admin')),
);
?>

<h1>View Movement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'movement_from',
		'movement_to',
		array('name' => 'subequipment_id',
		'value'=>CHtml::encode($model->subequipment->title)
		),
		'requested_by',
		array(
			'name'=>'status_id',
			'value'=>CHtml::encode($model->getStatusText())
			),
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
