<?php
/* @var $this PartController */
/* @var $model Part */

$this->breadcrumbs=array(
	'Parts'=>array('index'),
	$model->name,
);

// $this->menu=array(
// 	array('label'=>'List Part', 'url'=>array('index')),
// 	array('label'=>'Create Part', 'url'=>array('create')),
// 	array('label'=>'Update Part', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Part', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Part', 'url'=>array('admin')),
// );
?>

<h1>View Part #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'part_number',
		'image',
		array('name' => 'manufacturerID',
		'value'=>CHtml::encode($model->manufacturer->name)
		),
		array('name' => 'supplierID',
		'value'=>CHtml::encode($model->supplier->name)
		),
		array('name' => 'equipmentID',
		'value'=>CHtml::encode($model->equipment->title)
		),
		// 'DateCreated',
		// 'LastUpdated',
	),
)); ?>
