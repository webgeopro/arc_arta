<?php
$this->breadcrumbs=array(
	'Акции'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список акций', 'url'=>array('index')),
	array('label'=>'Новая акция', 'url'=>array('create')),
	array('label'=>'Обновить акцию', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить акцию', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Действительно удалить?')),
	array('label'=>'Управление акциями', 'url'=>array('admin')),
);
?>

<h1>Просмотр акции №<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pic',
		'content',
		'label',
	),
)); ?>
