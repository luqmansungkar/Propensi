<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Add Peminjam';
$this->breadcrumbs=array(
	'Add Peminjam',
);
?>

<h1>Add Peminjam</h1>

<?php if(Yii::app()->user->hasFlash('addpeminjam')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('addpeminjam'); ?>
</div>

<?php else: ?>

<h1><?php 
     echo $message;
    ?></h1>
<p>
Silakan menambahkan peminjam.
</p>

<div class="form">

<?php echo $form; ?>

</div><!-- form -->

<?php endif; ?>