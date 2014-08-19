<?php
/* @var $this ConsumableitemController */
/* @var $model Consumableitem */

$this->breadcrumbs=array(
	'Consumableitems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consumableitem', 'url'=>array('index')),
	array('label'=>'Manage Consumableitem', 'url'=>array('admin')),
);
?>

<h1>Create Consumableitem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>