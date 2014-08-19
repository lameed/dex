<?php
/* @var $this MovementController */
/* @var $model Movement */

$this->breadcrumbs=array(
	'Movements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Movement', 'url'=>array('index')),
	array('label'=>'Create Movement', 'url'=>array('create')),
	array('label'=>'View Movement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Movement', 'url'=>array('admin')),
);
?>

<h1>Update Movement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>