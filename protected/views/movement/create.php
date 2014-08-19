<?php
/* @var $this MovementController */
/* @var $model Movement */

$this->breadcrumbs=array(
	'Movements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Movement', 'url'=>array('index')),
	array('label'=>'Manage Movement', 'url'=>array('admin')),
);
?>

<h1>Create Movement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>