<?php
$this->breadcrumbs=array(
	'Продукция'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список продуктов', 'url'=>array('index')),
	array('label'=>'Управление продуктами', 'url'=>array('admin')),
);
?>

<h1>Новый продукт</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>