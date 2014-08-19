<?php
/* @var $this MovementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movements',
);

$this->menu=array(
	array('label'=>'Create Movement', 'url'=>array('create')),
	array('label'=>'Manage Movement', 'url'=>array('admin')),
);
?>

<h1>Movements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
