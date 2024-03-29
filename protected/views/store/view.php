<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Store', 'url'=>array('index')),
	array('label'=>'Create Store', 'url'=>array('create')),
	array('label'=>'Update Store', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Store', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1>View Store #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'location',
		'quantity',
		array('name' => 'part_id',
		'value'=>CHtml::encode($model->part->name)),
		'DateCreated',
		'LastUpdated',
	),
)); ?>
