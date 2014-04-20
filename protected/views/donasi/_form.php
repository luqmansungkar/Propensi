<?php
/* @var $this DonasiController */
/* @var $model Donasi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'donasi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Donatur'); ?>
		<?php echo $form->textField($model,'ID_Donatur'); ?>
		<?php echo $form->error($model,'ID_Donatur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal'); ?>
		<?php echo $form->textField($model,'Tanggal'); ?>
		<?php echo $form->error($model,'Tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nominal'); ?>
		<?php echo $form->textField($model,'Nominal'); ?>
		<?php echo $form->error($model,'Nominal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis'); ?>
		<?php echo $form->textField($model,'Jenis',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tgl_konfirm'); ?>
		<?php echo $form->textField($model,'Tgl_konfirm'); ?>
		<?php echo $form->error($model,'Tgl_konfirm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Link_bukti'); ?>
		<?php echo $form->textField($model,'Link_bukti',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Link_bukti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tgl_transfer'); ?>
		<?php echo $form->textField($model,'Tgl_transfer'); ?>
		<?php echo $form->error($model,'Tgl_transfer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->