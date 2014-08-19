<?php
/* @var $this EquipmentController */
/* @var $model Equipment */

$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Equipment', 'url'=>array('index')),
	array('label'=>'Create Equipment', 'url'=>array('create')),
	array('label'=>'Update Equipment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Equipment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipment', 'url'=>array('admin')),
	array('label'=>'Subcategory', 'url'=>array('/administration/subcategory/index')),
	array('label'=>'Create Subcategory', 'url'=>array('subcategory/create', 'pid'=>$model->id)),
);
?>

<h1>View Equipment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'create_time',
		'Created_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
<br/>
<h1>Equipment Subcategories</h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$subcategoryDataProvider,
'itemView'=>'/subcategory/_view',
)); ?>