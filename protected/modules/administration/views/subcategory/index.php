<?php
/* @var $this SubcategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subcategories',
);

$this->menu=array(
	array('label'=>'Create Subcategory', 'url'=>array('create', 'pid'=>1)),
	array('label'=>'Manage Subcategory', 'url'=>array('admin')),
	array('label'=>'Subequipment', 'url'=>array('/administration/subequipment/index')),
);
?>

<h1>Subcategories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
