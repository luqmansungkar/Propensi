<?php
/* @var $this DonasiController */
/* @var $data Donasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Donatur')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Donatur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->Tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nominal')); ?>:</b>
	<?php echo CHtml::encode($data->Nominal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jenis')); ?>:</b>
	<?php echo CHtml::encode($data->Jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tgl_konfirm')); ?>:</b>
	<?php echo CHtml::encode($data->Tgl_konfirm); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Link_bukti')); ?>:</b>
	<?php echo CHtml::encode($data->Link_bukti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tgl_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->Tgl_transfer); ?>
	<br />

	*/ ?>

</div>