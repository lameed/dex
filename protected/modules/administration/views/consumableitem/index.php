<?php
/* @var $this ConsumableitemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consumableitems',
);

$this->menu=array(
	array('label'=>'Create Consumableitem', 'url'=>array('create')),
	array('label'=>'Manage Consumableitem', 'url'=>array('admin')),
	array('label'=>'Subcategory', 'url'=>array('consumables/index')),
);
?>

<h1>Consumableitems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
