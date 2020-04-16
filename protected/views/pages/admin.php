<?php
$this->breadcrumbs=array(
	'Страницы'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список страниц', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pages-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление страницами</h1>

<p>
Вы можете добавлять операторы сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>).
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pages-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'parent_id',
		'name',
		'label',
		'comment',
		'pic',
		
		'sort',
		'visible',
		/*'',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
