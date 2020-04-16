<?php
$this->breadcrumbs=array(
	'Новости'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список новостей', 'url'=>array('index')),
	array('label'=>'Создать новость', 'url'=>array('create')),
	array('label'=>'Просмотр новости', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление новосятми', 'url'=>array('admin')),
);
?>

<h1>Обновление новости №<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>