<?php
$this->breadcrumbs=array(
	'Акции',
);

$this->menu=array(
	array('label'=>'Новая акция', 'url'=>array('create')),
	array('label'=>'Управление акциями', 'url'=>array('admin')),
);
?>

<h1>Акции</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_pic',
)); ?>
