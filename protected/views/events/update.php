<?php
$this->breadcrumbs=array(
	'Акции'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить акцию',
);

$this->menu=array(
	array('label'=>'Список акций', 'url'=>array('index')),
	array('label'=>'Новая акция', 'url'=>array('create')),
	array('label'=>'Просмотр акции', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление акциями', 'url'=>array('admin')),
);
?>

<h1>Обновить акцию №<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>