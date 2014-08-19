<?php
/* @var $this SupplierPartController */
/* @var $model SupplierPart */

$this->breadcrumbs=array(
	'Supplier Parts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SupplierPart', 'url'=>array('index')),
	array('label'=>'Manage SupplierPart', 'url'=>array('admin')),
);
?>

<h1>Create SupplierPart</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>