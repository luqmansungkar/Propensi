<?php

class DonasiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','listDonasi','riwayatDonasi','addDonasi'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Donasi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Donasi']))
		{
			$model->attributes=$_POST['Donasi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Donasi']))
		{
			$model->attributes=$_POST['Donasi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Donasi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Donasi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Donasi']))
			$model->attributes=$_GET['Donasi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Donasi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Donasi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Donasi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='donasi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionListDonasi(){
            $cmd = Yii::app()->db->createCommand();
            $cmd->select = 'user.id, user.nama, jenisdonasi.tipe, donasi.nominal';
            $cmd->from = 'user, jenisdonasi, donasi';
            $cmd->where = 'donasi.ID_Donatur = user.ID and donasi.Jenis = jenisdonasi.ID';
            $result = $cmd->query();
            $this->render('listDonasi', array('result'=>$result));
        }
        public function actionRiwayatDonasi(){
            $cmd = Yii::app()->db->createCommand();
            $cmd->select = 'user.nama, donasi.ID, donasi.Tanggal, donasi.Nominal, jenisdonasi.tipe, status.Keterangan, donasi.Tgl_konfirm, donasi.Link_bukti, donasi.Tgl_transfer';
            $cmd->from = 'donasi, user, jenisdonasi, status';
            $cmd->where = 'donasi.ID_Donatur = '.$_GET['id'].' and donasi.ID_Donatur = user.ID and donasi.Jenis = jenisdonasi.ID and donasi.Status= status.ID';
            $baris = $cmd->queryRow();
            $result = $cmd->query();
            
            $nama = $baris['nama'];
            $this->render('riwayatDonasi', array('result'=>$result, 'nama'=>$nama));
        }
        public function actionAddDonasi()
	{
            
		$model=new Donasi;
                $form = new CForm('application.views.donasi.donasiForm', $model);
		if ($form->submitted()) {
                    //Yii::app()->user->setFlash('addUser','User berhasil ditambahkan.');
                    $model->Tanggal = date("Y-m-d");
                    $model->Status = 1;
                    $model->ID_Donatur = Yii::app()->session['id'];
                    $model->save();
                    $message = 'Donasi telah disimpan';
                    //$form->
                    $this->render('addDonasi', array('model'=>$model,'form' => $form,'message'=>$message));
                    //$this->refresh();
                }  else {
                    $this->render('addDonasi',array('model'=>$model, 'form' => $form, 'message'=>'Silakan masukkan data user'));
                }
	}
}
