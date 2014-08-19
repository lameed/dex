<?php
/* @var $this SubequipmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subequipments',
);

// $this->menu=array(
// 	array('label'=>'Create Subequipment', 'url'=>array('create')),
// 	array('label'=>'Manage Subequipment', 'url'=>array('admin')),
// );
?>

<h1>Equipments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
