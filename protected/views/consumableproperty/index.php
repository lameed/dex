<?php
/* @var $this ConsumablepropertyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consumableproperties',
);

$this->menu=array(
	array('label'=>'Create Consumableproperty', 'url'=>array('create')),
	array('label'=>'Manage Consumableproperty', 'url'=>array('admin')),
);
?>

<h1>Consumableproperties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
