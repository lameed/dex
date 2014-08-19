<?php
/* @var $this ConsumablesController */
/* @var $model Consumables */

$this->breadcrumbs=array(
	'Consumables'=>array('index'),
	$model->title,
);

// $this->menu=array(
// 	array('label'=>'List Consumables', 'url'=>array('index')),
// 	array('label'=>'Create Consumables', 'url'=>array('create')),
// 	array('label'=>'Update Consumables', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Consumables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Consumables', 'url'=>array('admin')),
// );
?>

<h1>View Consumables #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		array('name' => 'consumableitem_id',
		'value'=>CHtml::encode($model->consumableitem->title)),
		// 'DateCreated',
		// 'create_user_id',
		// 'LastUpdated',
		// 'update_user_id',
	),
)); ?>
<br>
<h1>Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$consumablepropertyDataProvider,
'itemView'=>'/consumableproperty/_view',
)); ?>
