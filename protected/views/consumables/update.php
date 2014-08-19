<?php
/* @var $this ConsumablesController */
/* @var $model Consumables */

$this->breadcrumbs=array(
	'Consumables'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consumables', 'url'=>array('index')),
	array('label'=>'Create Consumables', 'url'=>array('create')),
	array('label'=>'View Consumables', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Consumables', 'url'=>array('admin')),
);
?>

<h1>Update Consumables <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>