<?php
$this->breadcrumbs=array(
	'Продукция'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список продуктов', 'url'=>array('index')),
	array('label'=>'Новый продукт', 'url'=>array('create')),
	array('label'=>'Просмотреть продукт', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление продуктами', 'url'=>array('admin')),
);
?>

<h1>Обновить продукт №<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>