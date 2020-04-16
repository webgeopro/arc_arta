<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'events-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля, помеченные <span class="required">*</span>, обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?#$form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
        <?$this->widget('application.extensions.redactorjs.Redactor', array( 'model' => $model, 'attribute' => 'content', 'lang' => 'ru' ));?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'label'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->