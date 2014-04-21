<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Add Pinjaman';
$this->breadcrumbs=array(
	'Add Pinjaman',
);
?>

<h1>Add Pinjaman</h1>

<?php if(Yii::app()->user->hasFlash('addpinjaman')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('addpinjaman'); ?>
</div>

<?php else: ?>

<h1><?php 
     echo $message;
    ?></h1>
<p>
Silakan menambahkan pinjaman.
</p>

<div class="form">

<?php echo $form; ?>

</div><!-- form -->

<?php endif; ?>