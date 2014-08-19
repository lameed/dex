<?php
/* @var $this ConsumablepropertyController */
/* @var $model Consumableproperty */

$this->breadcrumbs=array(
	'Consumableproperties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consumableproperty', 'url'=>array('index')),
	array('label'=>'Create Consumableproperty', 'url'=>array('create')),
	array('label'=>'View Consumableproperty', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Consumableproperty', 'url'=>array('admin')),
);
?>

<h1>Update Consumableproperty <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>