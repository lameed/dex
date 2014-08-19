<?php
/* @var $this PartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parts',
);

$this->menu=array(
	array('label'=>'Create Part', 'url'=>array('create')),
	array('label'=>'Manage Part', 'url'=>array('admin')),
	array('label'=>'Manufacturer', 'url'=>array('manufacturer/index')),
	array('label'=>'Supplier', 'url'=>array('supplier/index')),
);
?>

<h1>Parts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
