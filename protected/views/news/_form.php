<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля, помеченные <span class="required">*</span>, обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short'); ?>
		<?php echo $form->textField($model,'short',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'short'); ?>
	</div>

	<!--<div class="row">
		<?// $form->labelEx($model,'full'); ?>
		<?// $form->textArea($model,'full',array('rows'=>6, 'cols'=>50)); ?>
		<?// $form->error($model,'full'); ?>
	</div>-->

    <div class="row">
        <?php echo $form->labelEx($model,'full'); ?>
        <?$this->widget('application.extensions.redactorjs.Redactor', array( 'model' => $model, 'attribute' => 'full', 'lang' => 'ru' ));?>
        <?php echo $form->error($model,'full'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->