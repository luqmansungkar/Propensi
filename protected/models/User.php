<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $ID
 * @property string $email
 * @property string $password
 * @property string $nohp
 * @property string $tanggalLahir
 * @property string $alamat
 * @property string $nama
 * @property string $username
 * @property integer $tipe
 *
 * The followings are the available model relations:
 * @property Tipe $tipe0
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, nohp, tanggalLahir, alamat, nama, username, tipe', 'required'),
			array('tipe', 'numerical', 'integerOnly'=>true),
			array('email, password, nama, username', 'length', 'max'=>50),
			array('nohp', 'length', 'max'=>20),
			array('alamat', 'length', 'max'=>80),
                    array('email', 'email',
                    'message'=>'You must provide an email address
                    to which you have access.'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, email, password, nohp, tanggalLahir, alamat, nama, username, tipe', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipe0' => array(self::BELONGS_TO, 'Tipe', 'tipe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'email' => 'Email',
			'password' => 'Password',
			'nohp' => 'Nohp',
			'tanggalLahir' => 'Tanggal Lahir',
			'alamat' => 'Alamat',
			'nama' => 'Nama',
			'username' => 'Username',
			'tipe' => 'Tipe',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nohp',$this->nohp,true);
		$criteria->compare('tanggalLahir',$this->tanggalLahir,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('tipe',$this->tipe);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function getUserOption(){
            return array(
                '1'=>'Admin',
                '2'=>'Staff',
                '3'=>'Direktur',
                '4'=>'Donatur',
            );
        }
}
