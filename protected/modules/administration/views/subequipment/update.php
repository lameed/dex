<?php
/* @var $this SubequipmentController */
/* @var $model Subequipment */

$this->breadcrumbs=array(
	'Subequipments'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subequipment', 'url'=>array('index')),
	array('label'=>'Create Subequipment', 'url'=>array('create')),
	array('label'=>'View Subequipment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subequipment', 'url'=>array('admin')),
);
?>

<h1>Update Subequipment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>