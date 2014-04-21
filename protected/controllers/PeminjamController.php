<?php

class PeminjamController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        public function actionAddPeminjam()
	{
            
		$model=new Peminjam;
                $form = new CForm('application.views.peminjam.addPeminjamForm', $model);
		if ($form->submitted()) {
                    //Yii::app()->user->setFlash('addUser','User berhasil ditambahkan.');
                    //$model->password = md5($model->password."Random\$SaltValue#WithSpecialCharacters12@$@4&#%^$*");
                    $model->save();
                    $message = 'Peminjam telah ditambahkan';
                    //$form->
                    //$this->render('addUser', array('model'=>$model,'form' => $form,'message'=>$message));
                    $this->refresh();
                }  else {
                    $this->render('addPeminjam',array('model'=>$model, 'form' => $form, 'message'=>'Silakan masukkan data peminjam'));
                }
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}