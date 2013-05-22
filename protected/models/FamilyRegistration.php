<?php

/**
 * This is the model class for table "fm_family_registration".
 *
 * The followings are the available columns in table 'fm_family_registration':
 * @property integer $FAMILY_ID
 * @property string $FAMILY_NAME
 * @property string $DOR
 * @property string $FAMILY_EMAIL_ID
 * @property string $FAMILY_PHONE_NUMBER
 * @property string $FAMILY_DESC
 * @property string $CREATED_BY
 * @property string $CREATED_DATE
 * @property integer $USER_ID
 *
 * The followings are the available model relations:
 * @property FmUserBasicInf $uSER
 */
class FamilyRegistration extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FamilyRegistration the static model class
     */
    public $registrationId;
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_family_registration';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('FAMILY_NAME, DOR, FAMILY_EMAIL_ID, FAMILY_PHONE_NUMBER, FAMILY_DESC', 'required'),
            //array('USER_ID', 'numerical', 'integerOnly' => true),
            array('FAMILY_NAME, FAMILY_EMAIL_ID, FAMILY_PHONE_NUMBER, FAMILY_DESC, CREATED_BY', 'length', 'max' => 200),
            array('CREATED_DATE,registrationId', 'safe'),
                // The following rule is used by search().
                // Please remove those attributes that should not be searched.
                //array('FAMILY_ID, FAMILY_NAME, DOR, FAMILY_EMAIL_ID, FAMILY_PHONE_NUMBER, FAMILY_DESC, CREATED_BY, CREATED_DATE, USER_ID', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'uSER' => array(self::BELONGS_TO, 'FmUserBasicInf', 'USER_ID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'FAMILY_ID' => 'Family',
            'FAMILY_NAME' => 'Family Name',
            'DOR' => 'Dor',
            'FAMILY_EMAIL_ID' => 'Family Email',
            'FAMILY_PHONE_NUMBER' => 'Family Phone Number',
            'FAMILY_DESC' => 'Family Desc',
            'CREATED_BY' => 'Created By',
            'CREATED_DATE' => 'Created Date',
            'USER_ID' => 'User',
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

        $criteria->compare('FAMILY_ID', $this->FAMILY_ID);
        $criteria->compare('FAMILY_NAME', $this->FAMILY_NAME, true);
        $criteria->compare('DOR', $this->DOR, true);
        $criteria->compare('FAMILY_EMAIL_ID', $this->FAMILY_EMAIL_ID, true);
        $criteria->compare('FAMILY_PHONE_NUMBER', $this->FAMILY_PHONE_NUMBER, true);
        $criteria->compare('FAMILY_DESC', $this->FAMILY_DESC, true);
        $criteria->compare('CREATED_BY', $this->CREATED_BY, true);
        $criteria->compare('CREATED_DATE', $this->CREATED_DATE, true);
        $criteria->compare('USER_ID', $this->USER_ID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        $this->USER_ID = Yii::app()->user->hasState("userId");
        $this->CREATED_BY = new CDbExpression('NOW()');
        $this->CREATED_DATE = new CDbExpression('NOW()');
        if ($this->isNewRecord) {

            // $this->CREATED_DATE = 'prateekshaw';
        }
        else
            $this->modified = new CDbExpression('NOW()');

        return parent::beforeSave();
    }

}