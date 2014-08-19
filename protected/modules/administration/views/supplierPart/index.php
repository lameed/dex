<?php
/* @var $this SupplierPartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supplier Parts',
);

$this->menu=array(
	array('label'=>'Create SupplierPart', 'url'=>array('create')),
	array('label'=>'Manage SupplierPart', 'url'=>array('admin')),
);
?>

<h1>Supplier Parts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
