<?php
/* @var $this DonasiController */
/* @var $model Donasi */

$this->breadcrumbs=array(
	'Donasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donasi', 'url'=>array('index')),
	array('label'=>'Manage Donasi', 'url'=>array('admin')),
);
?>

<h1>Create Donasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>