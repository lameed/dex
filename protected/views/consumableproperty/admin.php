<?php
/* @var $this ConsumablepropertyController */
/* @var $model Consumableproperty */

$this->breadcrumbs=array(
	'Consumableproperties'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Consumableproperty', 'url'=>array('index')),
	array('label'=>'Create Consumableproperty', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#consumableproperty-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Consumableproperties</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consumableproperty-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'manufacturer',
		'designer',
		'weight',
		'length',
		'dateOrdered',
		/*
		'dateSupplied',
		'drawing',
		'consumables_id',
		'DateCreated',
		'create_user_id',
		'LastUpdated',
		'update_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
