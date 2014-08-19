<?php
/* @var $this SubequipmentController */
/* @var $model Subequipment */

$this->breadcrumbs=array(
	'Subequipments'=>array('index'),
	$model->title,
);

// $this->menu=array(
// 	array('label'=>'List Subequipment', 'url'=>array('index')),
// 	array('label'=>'Create Subequipment', 'url'=>array('create')),
// 	array('label'=>'Update Subequipment', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Subequipment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Subequipment', 'url'=>array('admin')),
// );
?>

<h1>View Subequipment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		array('name' => 'subcategory_id',
		'value'=>CHtml::encode($model->subcategory->title)),
		// 'create_time',
		// 'create_user_id',
		// 'update_time',
		// 'update_user_id',
	),
)); ?>
<br>
<h1>Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$propertyDataProvider,
'itemView'=>'/property/_view',
)); ?>
<br>
<h1>Movement</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$movementDataProvider,
'itemView'=>'/movement/_view',
)); ?>
<br>
<h1>Maintenance</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$maintenanceDataProvider,
'itemView'=>'/maintenance/_view',
)); ?>
