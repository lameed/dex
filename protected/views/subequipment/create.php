<?php
/* @var $this SubequipmentController */
/* @var $model Subequipment */

$this->breadcrumbs=array(
	'Subequipments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subequipment', 'url'=>array('index')),
	array('label'=>'Manage Subequipment', 'url'=>array('admin')),
);
?>

<h1>Create Subequipment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>