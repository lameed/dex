<?php
/* @var $this ConsumableitemController */
/* @var $model Consumableitem */

$this->breadcrumbs=array(
	'Consumableitems'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consumableitem', 'url'=>array('index')),
	array('label'=>'Create Consumableitem', 'url'=>array('create')),
	array('label'=>'View Consumableitem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Consumableitem', 'url'=>array('admin')),
);
?>

<h1>Update Consumableitem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>