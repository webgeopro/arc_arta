<?php
$this->breadcrumbs=array(
	'Продукция'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список продуктов', 'url'=>array('index')),
	array('label'=>'Новый продукт', 'url'=>array('create')),
	array('label'=>'Обновить продукт', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить продукт', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Действительно удалить?')),
	array('label'=>'Управление продуктами', 'url'=>array('admin')),
);
?>

<h1>Продукция №<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'comment',
		'content',
		'pic',
		'label',
	),
)); ?>
