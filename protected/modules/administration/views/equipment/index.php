<?php
/* @var $this EquipmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Equipments',
);

$this->menu=array(
	array('label'=>'Create Equipment', 'url'=>array('create')),
	array('label'=>'Manage Equipment', 'url'=>array('admin')),
	array('label'=>'Subcategory', 'url'=>array('subcategory/index')),
	array('label'=>'Subequipment', 'url'=>array('subequipment/index')),
);
?>

<h1>Equipments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
