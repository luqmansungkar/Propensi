<?php
/* @var $this DonasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Donasis',
);

$this->menu=array(
	array('label'=>'Create Donasi', 'url'=>array('create')),
	array('label'=>'Manage Donasi', 'url'=>array('admin')),
);
?>

<h1>Donasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
