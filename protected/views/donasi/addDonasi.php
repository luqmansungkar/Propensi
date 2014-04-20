<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Add Donasi';
$this->breadcrumbs=array(
	'Add Donasi',
);
?>

<h1>Add User</h1>

<?php if(Yii::app()->user->hasFlash('adddonasi')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('adddonasi'); ?>
</div>

<?php else: ?>

<p>
Silakan masukkan data donasi.
</p>
<h1><?php echo $message; ?></h1>
<div class="form">

<?php echo $form; ?>

</div><!-- form -->

<?php endif; ?>