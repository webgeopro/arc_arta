<?php
$this->breadcrumbs=array(
	'Акции'=>array('index'),
	'Управление акциями',
);

$this->menu=array(
	array('label'=>'Список акций', 'url'=>array('index')),
	array('label'=>'Новая акция', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('events-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление акциями</h1>

<p>
Вы можете использовать операторы сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>).
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'events-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pic',
		'content',
		'label',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
