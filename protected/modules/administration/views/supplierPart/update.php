<?php
/* @var $this SupplierPartController */
/* @var $model SupplierPart */

$this->breadcrumbs=array(
	'Supplier Parts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SupplierPart', 'url'=>array('index')),
	array('label'=>'Create SupplierPart', 'url'=>array('create')),
	array('label'=>'View SupplierPart', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SupplierPart', 'url'=>array('admin')),
);
?>

<h1>Update SupplierPart <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>