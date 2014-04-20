<?php
/* @var $this DonasiController */
/* @var $model Donasi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Donatur'); ?>
		<?php echo $form->textField($model,'ID_Donatur'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tanggal'); ?>
		<?php echo $form->textField($model,'Tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nominal'); ?>
		<?php echo $form->textField($model,'Nominal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jenis'); ?>
		<?php echo $form->textField($model,'Jenis',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tgl_konfirm'); ?>
		<?php echo $form->textField($model,'Tgl_konfirm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Link_bukti'); ?>
		<?php echo $form->textField($model,'Link_bukti',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tgl_transfer'); ?>
		<?php echo $form->textField($model,'Tgl_transfer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->