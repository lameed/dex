<?php
/* @var $this ConsumablesController */
/* @var $model Consumables */

$this->breadcrumbs=array(
	'Consumables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consumables', 'url'=>array('index')),
	array('label'=>'Manage Consumables', 'url'=>array('admin')),
);
?>

<h1>Create Consumables</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>