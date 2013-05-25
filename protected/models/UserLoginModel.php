<?php

/**
 * This is the model class for table "fm_user_basic_inf".
 *
 * The followings are the available columns in table 'fm_user_basic_inf':
 * @property integer $USER_ID
 * @property string $TITLE
 * @property string $FIRST_NAME
 * @property string $MIDDLE_NAME
 * @property string $LAST_NAME
 * @property integer $PHONE_NUMBER
 * @property integer $MOBILE_NUMBER
 * @property integer $GENDER
 * @property string $EMAIL_ID
 * @property string $DOB
 * @property string $USER_NAME
 * @property string $PASSWORD
 * @property string $CREATED_DATE
 * @property integer $USER_TYPE_ID
 */
class UserLoginModel extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return UserLoginModel the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public $repeat_password;
    public $selectOption = 'Select';

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_user_basic_inf';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('TITLE, FIRST_NAME, LAST_NAME, GENDER, EMAIL_ID, DOB, USER_NAME, PASSWORD,repeat_password', 'required'),
            array('repeat_password', 'compare', 'compareAttribute' => 'PASSWORD', 'message' => "Passwords don't match"),
            array('PHONE_NUMBER, MOBILE_NUMBER,USER_TYPE_ID', 'numerical', 'integerOnly' => true),
            array('TITLE, FIRST_NAME, MIDDLE_NAME, EMAIL_ID', 'length', 'max' => 45),
            array('LAST_NAME, USER_NAME, PASSWORD', 'length', 'max' => 200),
            //array('GENDER', 'compare', 'compareAttribute'=>'selectOption','message' => "Please Select Gender"),
            array('CREATED_DATE', 'length', 'max' => 100),
            array('EMAIL_ID', 'email', 'message' => 'The email isn´t correct'),
            array('USER_NAME', 'unique', 'className' => 'UserLoginModel', 'attributeName' => 'USER_NAME', 'message' => "Username is already exists"),
            array('EMAIL_ID', 'unique', 'className' => 'UserLoginModel', 'attributeName' => 'EMAIL_ID', 'message' => "Email is already exists"),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            //array('CREATED_DATE', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
            array('USER_ID, TITLE, FIRST_NAME, MIDDLE_NAME, LAST_NAME, PHONE_NUMBER, MOBILE_NUMBER, GENDER, EMAIL_ID, DOB, USER_NAME, PASSWORD,CREATED_DATE, USER_TYPE_ID', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'USER_ID' => 'User',
            'TITLE' => 'Title',
            'FIRST_NAME' => 'First Name',
            'MIDDLE_NAME' => 'Middle Name',
            'LAST_NAME' => 'Last Name',
            'PHONE_NUMBER' => 'Phone Number',
            'MOBILE_NUMBER' => 'Mobile Number',
            'GENDER' => 'Gender',
            'EMAIL_ID' => 'Email',
            'DOB' => 'Dob',
            'USER_NAME' => 'User Name',
            'PASSWORD' => 'Password',
            'repeat_password' => 'Repeat Password',
            'CREATED_BY' => 'Created By',
            'CREATED_DATE' => 'Created Date',
            'USER_TYPE_ID' => 'User Type',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('USER_ID', $this->USER_ID);
        $criteria->compare('TITLE', $this->TITLE, true);
        $criteria->compare('FIRST_NAME', $this->FIRST_NAME, true);
        $criteria->compare('MIDDLE_NAME', $this->MIDDLE_NAME, true);
        $criteria->compare('LAST_NAME', $this->LAST_NAME, true);
        $criteria->compare('PHONE_NUMBER', $this->PHONE_NUMBER);
        $criteria->compare('MOBILE_NUMBER', $this->MOBILE_NUMBER);
        $criteria->compare('GENDER', $this->GENDER);
        $criteria->compare('EMAIL_ID', $this->EMAIL_ID, true);
        $criteria->compare('DOB', $this->DOB, true);
        $criteria->compare('USER_NAME', $this->USER_NAME, true);
        $criteria->compare('PASSWORD', $this->PASSWORD, true);
        $criteria->compare('CREATED_BY', $this->CREATED_BY, true);
        $criteria->compare('CREATED_DATE', $this->CREATED_DATE, true);
        $criteria->compare('USER_TYPE_ID', $this->USER_TYPE_ID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->CREATED_DATE = 'prateekshaw';
            $this->PASSWORD=$this->hash($this->PASSWORD);
        }
        else
            $this->modified = new CDbExpression('NOW()');

        return parent::beforeSave();
    }

    public function hash($value) {
        return crypt($value);
    }

}