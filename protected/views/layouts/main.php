<?php /* @var $this Controller */ 
if (!Yii::app()->session['user']) {
                $this->redirect(Yii::app()->request->baseUrl);
            }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
                        
			'items'=>array(
				array('label'=>'Home','url'=>array('/site/index')),
                                array('label'=>'Donasi','url'=>array('/donasi/addDonasi')),
				(Yii::app()->session['role']!='donatur') ? array('label'=>'Laporan',
                                    'url'=>'',
                                    'items'=>array(
                                        array('label'=>'Laporan Penerimaan Donasi','url'=>array('/donasi/listDonasi')),
                                        )) : NULL,
                                (Yii::app()->session['role']!='donatur') ? array('label'=>'Donatur',
                                        'url'=>'',
                                        'items'=>array(
                                            array('label'=>'Tambah Donatur','url'=>array('/user/addDonatur')),
                                            array('label'=>'List Donatur','url'=>array('/user/listDonatur')),
                                            )) : NULL,
                            (Yii::app()->session['role']!='donatur') ? array('label'=>'Dana Bergulir',
                                        'url'=>'',
                                        'items'=>array(
                                            array('label'=>'Tambah Penerima Pinjaman','url'=>array('/peminjam/addPeminjam')),
                                            array('label'=>'Isi Form Pinjaman','url'=>array('/pinjaman/addPinjaman')),
                                            )) : NULL,
                                (Yii::app()->session['role']=='admin') ? array(
                                    'label'=>'Admin Menu',
                                    'url'=>'',
                                    'items'=>array(
                                        array('label'=>'Add User','url'=>array('/user/addUser')),
                                        array('label'=>'Edit User','url'=>array('/user/editUser')),
                                        )):NULL,
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
                                //array('label'=>'Add User', 'url'=>array('/site/addUser')),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->session['user'].' | '.Yii::app()->session['role'].')', 'url'=>array('/site/keluar'))
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Propensi B04.<br/>
		All Rights Reserved.<br/>
                Made for Zakat Sukses<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
