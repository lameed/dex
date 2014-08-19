<?php
/* @var $this ConsumablesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consumables',
);

// $this->menu=array(
// 	array('label'=>'Create Consumables', 'url'=>array('create')),
// 	array('label'=>'Manage Consumables', 'url'=>array('admin')),
// );
?>

<h1>Consumables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
