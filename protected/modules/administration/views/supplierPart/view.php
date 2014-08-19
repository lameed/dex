<?php
/* @var $this SupplierPartController */
/* @var $model SupplierPart */

$this->breadcrumbs=array(
	'Supplier Parts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SupplierPart', 'url'=>array('index')),
	array('label'=>'Create SupplierPart', 'url'=>array('create')),
	array('label'=>'Update SupplierPart', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SupplierPart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SupplierPart', 'url'=>array('admin')),
);
?>

<h1>View SupplierPart #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'DateCreated',
		'create_user_id',
		'LastUpdated',
		'update_user_id',
	),
)); ?>
