<?php
$this->breadcrumbs=array(
	'Акции'=>array('index'),
	'Новая акция',
);

$this->menu=array(
	array('label'=>'Список акций', 'url'=>array('index')),
	array('label'=>'Управление акциями', 'url'=>array('admin')),
);
?>

<h1>Новая акция</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>