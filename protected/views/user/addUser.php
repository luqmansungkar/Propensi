<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Add User';
$this->breadcrumbs=array(
	'AddUser',
);
?>

<h1>Add User</h1>

<?php if(Yii::app()->user->hasFlash('adduser')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('adduser'); ?>
</div>

<?php else: ?>

<h1><?php 
     echo $message;
    ?></h1>
<p>
Silakan menambahkan user.
</p>

<div class="form">

<?php echo $form; ?>

</div><!-- form -->

<?php endif; ?>