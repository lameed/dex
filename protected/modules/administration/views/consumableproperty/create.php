<?php
/* @var $this ConsumablepropertyController */
/* @var $model Consumableproperty */

$this->breadcrumbs=array(
	'Consumableproperties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consumableproperty', 'url'=>array('index')),
	array('label'=>'Manage Consumableproperty', 'url'=>array('admin')),
);
?>

<h1>Create Consumable property</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>