<?php

/**
 * This is the model class for table "fm_user_hobbies".
 *
 * The followings are the available columns in table 'fm_user_hobbies':
 * @property integer $USER_HOBBIES_ID
 * @property integer $USER_ID
 * @property string $CREATED_DATE
 * @property integer $HOBBIES_ID
 *
 * The followings are the available model relations:
 * @property FmHobbiesMst $hOBBIES
 * @property FmUserBasicInf $uSER
 */
class FmUserHobbies extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FmUserHobbies the static model class
     */
    public $hobbiesName;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_user_hobbies';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('HOBBIES_ID', 'required', 'message' => 'Please give currect hobbies'),
            array('HOBBIES_ID', 'unique', 'className' => 'FmUserHobbies', 'attributeName' => 'HOBBIES_ID', 'message' => "This Hobbies is already exists"),
            // array('USER_ID, HOBBIES_ID', 'numerical', 'integerOnly' => true),
            // array('HOBBIES_ID', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('USER_HOBBIES_ID, USER_ID, CREATED_DATE, HOBBIES_ID', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'hOBBIES' => array(self::BELONGS_TO, 'FmHobbiesMst', 'HOBBIES_ID'),
            'uSER' => array(self::BELONGS_TO, 'FmUserBasicInf', 'USER_ID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'USER_HOBBIES_ID' => 'User Hobbies',
            'USER_ID' => 'User',
            'CREATED_DATE' => 'Created Date',
            'HOBBIES_ID' => 'Hobbies',
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

        //$criteria->compare('USER_HOBBIES_ID', $this->USER_HOBBIES_ID);
        $criteria->compare('USER_ID', $this->USER_ID);
        // $criteria->compare('CREATED_DATE', $this->CREATED_DATE, true);
        //$criteria->compare('HOBBIES_ID', $this->HOBBIES_ID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        $this->USER_ID = Yii::app()->user->getState("userId");
        return parent::beforeSave();
    }

}