<?php
$this->breadcrumbs=array(
	'Продукция',
);

$this->menu=array(
	array('label'=>'Новый продукт', 'url'=>array('create')),
	array('label'=>'Управление продуктами', 'url'=>array('admin')),
);
?>

<h1>Продукция</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
