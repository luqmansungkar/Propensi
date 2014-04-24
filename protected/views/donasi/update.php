<?php
/* @var $this DonasiController */
/* @var $model Donasi */

$this->breadcrumbs=array(
	'Donasis'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List Donasi', 'url'=>array('index')),
	array('label'=>'Create Donasi', 'url'=>array('create')),
	array('label'=>'View Donasi', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Donasi', 'url'=>array('admin')),
);*/
?>

<h1>Update Donasi <?php echo $model->ID; ?></h1>
<?php echo $model->Tgl_transfer ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>