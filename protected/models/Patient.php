<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property string $id
 * @property string $date_reg
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $birthdate
 * @property string $blood_type
 * @property string $city_addr
 * @property string $province_addr
 * @property string $addr_zip
 * @property integer $addr_citytown_nr
 * @property string $citizenship
 * @property string $home_phone
 * @property string $office_phone
 * @property string $cellphone_1
 * @property string $sex
 * @property string $email
 * @property string $civil_status
 * @property string $photo
 * @property string $photo_filename
 * @property string $religion
 * @property string $death_date
 * @property string $death_cause
 * @property string $date_update
 * @property string $status
 * @property string $history
 * @property string $modify_id
 * @property string $modify_time
 * @property string $create_id
 * @property string $create_time
 * @property string $login_id
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 * @property DoctorPatient[] $doctorPatients
 * @property User $login
 */
class Patient extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patient the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, blood_type, city_addr, province_addr, addr_zip', 'required'),
			array('addr_citytown_nr', 'numerical', 'integerOnly'=>true),
			array('fname, mname, lname, city_addr, email, photo_filename', 'length', 'max'=>60),
			array('blood_type', 'length', 'max'=>2),
			array('province_addr', 'length', 'max'=>10),
			array('addr_zip, home_phone, cellphone_1', 'length', 'max'=>15),
			array('citizenship, office_phone, civil_status, modify_id, create_id, login_id', 'length', 'max'=>35),
			array('sex', 'length', 'max'=>1),
			array('religion', 'length', 'max'=>125),
			array('death_cause', 'length', 'max'=>255),
			array('status', 'length', 'max'=>20),
			array('date_reg, birthdate, photo, death_date, date_update, history, modify_time, create_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_reg, fname, mname, lname, birthdate, blood_type, city_addr, province_addr, addr_zip, addr_citytown_nr, citizenship, home_phone, office_phone, cellphone_1, sex, email, civil_status, photo, photo_filename, religion, death_date, death_cause, date_update, status, history, modify_id, modify_time, create_id, create_time, login_id', 'safe', 'on'=>'search'),
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
			'appointments' => array(self::HAS_MANY, 'Appointment', 'pid'),
			'doctorPatients' => array(self::HAS_MANY, 'DoctorPatient', 'pid'),
			'login' => array(self::BELONGS_TO, 'User', 'login_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date_reg' => 'Date Reg',
			'fname' => 'Fname',
			'mname' => 'Mname',
			'lname' => 'Lname',
			'birthdate' => 'Birthdate',
			'blood_type' => 'Blood Type',
			'city_addr' => 'City Addr',
			'province_addr' => 'Province Addr',
			'addr_zip' => 'Addr Zip',
			'addr_citytown_nr' => 'Addr Citytown Nr',
			'citizenship' => 'Citizenship',
			'home_phone' => 'Home Phone',
			'office_phone' => 'Office Phone',
			'cellphone_1' => 'Cellphone 1',
			'sex' => 'Sex',
			'email' => 'Email',
			'civil_status' => 'Civil Status',
			'photo' => 'Photo',
			'photo_filename' => 'Photo Filename',
			'religion' => 'Religion',
			'death_date' => 'Death Date',
			'death_cause' => 'Death Cause',
			'date_update' => 'Date Update',
			'status' => 'Status',
			'history' => 'History',
			'modify_id' => 'Modify',
			'modify_time' => 'Modify Time',
			'create_id' => 'Create',
			'create_time' => 'Create Time',
			'login_id' => 'Login',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('date_reg',$this->date_reg,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('blood_type',$this->blood_type,true);
		$criteria->compare('city_addr',$this->city_addr,true);
		$criteria->compare('province_addr',$this->province_addr,true);
		$criteria->compare('addr_zip',$this->addr_zip,true);
		$criteria->compare('addr_citytown_nr',$this->addr_citytown_nr);
		$criteria->compare('citizenship',$this->citizenship,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('office_phone',$this->office_phone,true);
		$criteria->compare('cellphone_1',$this->cellphone_1,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('civil_status',$this->civil_status,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('photo_filename',$this->photo_filename,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('death_date',$this->death_date,true);
		$criteria->compare('death_cause',$this->death_cause,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('history',$this->history,true);
		$criteria->compare('modify_id',$this->modify_id,true);
		$criteria->compare('modify_time',$this->modify_time,true);
		$criteria->compare('create_id',$this->create_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('login_id',$this->login_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}