<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('label'=>'Список страниц', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
    array('label'=>'Просмотр страницы', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление страницами', 'url'=>array('admin')),
);
?>

<h1>Update Pages <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>