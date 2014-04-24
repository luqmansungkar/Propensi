<?php

class UserController extends Controller
{
	public $username ='';
	public function actionIndex()
	{
            /*
		$query = User::model()->find('username = \'loekmansungkar\'');
		$this->username = $query->nama;
		$this->render('index', array('user'=>$this->username));
             * 
             */
            $this->render('index');
	}
        public function actionCekLogin(){
             if (isset($_POST['username']) && isset($_POST['password'])) {
                $password =  md5($_POST['password']."Random\$SaltValue#WithSpecialCharacters12@$@4&#%^$*");
                $user = $_POST['username'];
                $query = User::model()->find('username = \''.$user.'\' and password = \''.$password.'\'');
                
                //$user = md5($password. );
                if ($query != NULL) {
                    //$this->render('index', array('user'=>$user));
                    $role = $query->tipe;
                    switch ($role) {
                        case 1:
                            $role = 'admin';
                            break;
                        case 2: 
                            $role = 'staff';
                            break;
                        case 3:
                            $role = 'direktur';
                            break;
                        case 4:
                            $role = 'donatur';
                            break;
                    }
                    Yii::app()->session['user'] = $user;
                    Yii::app()->session['role'] = $role;
                    Yii::app()->session['id'] = $query->ID;
                            
               }
               
           }
                $this->redirect(Yii::app()->request->baseUrl);
        }
        public function actionAddUser()
	{
            
		$model=new User;
                $form = new CForm('application.views.user.addUserForm', $model);
		if ($form->submitted()) {
                    //Yii::app()->user->setFlash('addUser','User berhasil ditambahkan.');
                    $model->password = md5($model->password."Random\$SaltValue#WithSpecialCharacters12@$@4&#%^$*");
                    $model->save();
                    $message = 'User telah ditambahkan';
                    //$form->
                    //$this->render('addUser', array('model'=>$model,'form' => $form,'message'=>$message));
                    $this->refresh();
                }  else {
                    $this->render('addUser',array('model'=>$model, 'form' => $form, 'message'=>'Silakan masukkan data user'));
                }
	}
        public function actionAddDonatur()
	{
            
		$model=new User;
                $form = new CForm('application.views.user.addDonaturForm', $model);
		if ($form->submitted()) {
                    //Yii::app()->user->setFlash('addUser','User berhasil ditambahkan.');
                    $model->password = md5($model->password."Random\$SaltValue#WithSpecialCharacters12@$@4&#%^$*");
                    $model->tipe = 4;
                    $model->save();
                    $message = 'User telah ditambahkan';
                    //$form->
                    //$this->render('addUser', array('model'=>$model,'form' => $form,'message'=>$message));
                    $this->refresh();
                }  else {
                    $this->render('addUser',array('model'=>$model, 'form' => $form, 'message'=>'Silakan masukkan data user'));
                }
	}
        public function actionListDonatur(){
            $cmd = Yii::app()->db->createCommand();
            $cmd->select = '*';
            $cmd->from = 'user';
            $cmd->where = 'tipe = 4';
            $result = $cmd->query();
            $this->render('listUser', array('result'=>$result));
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