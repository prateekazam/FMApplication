<?php

/**
 * This is the model class for table "fm_address".
 *
 * The followings are the available columns in table 'fm_address':
 * @property integer $ADDRESS_ID
 * @property string $ADDRESS_TYPE
 * @property string $ADDRESS_LINE_1
 * @property string $ADDRESS_LINE_2
 * @property integer $COUNTRY_ID
 * @property integer $STATE_ID
 * @property integer $COUNTY_ID
 * @property integer $TOWN_ID
 * @property string $PIN_CODE
 * @property integer $FAMILY_ID
 * @property integer $USER_ID
 *
 * The followings are the available model relations:
 * @property FmUserBasicInf $uSER
 */
class FmAddressMst extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FmAddressMst the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_address';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ADDRESS_TYPE, ADDRESS_LINE_1,COUNTRY_ID, STATE_ID, COUNTY_ID, TOWN_ID, PIN_CODE', 'required'),
            array('COUNTRY_ID, STATE_ID, COUNTY_ID, TOWN_ID, FAMILY_ID', 'numerical', 'integerOnly' => true),
            array('ADDRESS_TYPE', 'length', 'max' => 1),
            array('ADDRESS_LINE_1', 'length', 'max' => 600),
            array('ADDRESS_LINE_2', 'length', 'max' => 500),
            array('PIN_CODE', 'length', 'max' => 10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('ADDRESS_ID, ADDRESS_TYPE, ADDRESS_LINE_1, ADDRESS_LINE_2, COUNTRY_ID, STATE_ID, COUNTY_ID, TOWN_ID, PIN_CODE, FAMILY_ID, USER_ID', 'safe', 'on' => 'search'),
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
            'countryID' => array(self::BELONGS_TO, 'FmPlacesMst', 'COUNTRY_ID'),
            'stateID' => array(self::BELONGS_TO, 'FmPlacesMst', 'STATE_ID'),
            'countyID' => array(self::BELONGS_TO, 'FmPlacesMst', 'COUNTY_ID'),
            'townID' => array(self::BELONGS_TO, 'FmPlacesMst', 'TOWN_ID'),
            'zipCode' => array(self::BELONGS_TO, 'FmPlacesMst', 'PIN_CODE'),
            //zipCode
            
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'ADDRESS_ID' => 'Address',
            'ADDRESS_TYPE' => 'Address Type',
            'ADDRESS_LINE_1' => 'Address Line 1',
            'ADDRESS_LINE_2' => 'Address Line 2',
            'COUNTRY_ID' => 'Country',
            'STATE_ID' => 'State',
            'COUNTY_ID' => 'County',
            'TOWN_ID' => 'Town',
            'PIN_CODE' => 'Pin Code',
            'FAMILY_ID' => 'Family',
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

        $criteria->compare('ADDRESS_ID', $this->ADDRESS_ID);
        $criteria->compare('ADDRESS_TYPE', $this->ADDRESS_TYPE, true);
        $criteria->compare('ADDRESS_LINE_1', $this->ADDRESS_LINE_1, true);
        $criteria->compare('ADDRESS_LINE_2', $this->ADDRESS_LINE_2, true);
        $criteria->compare('COUNTRY_ID', $this->COUNTRY_ID);
        $criteria->compare('STATE_ID', $this->STATE_ID);
        $criteria->compare('COUNTY_ID', $this->COUNTY_ID);
        $criteria->compare('TOWN_ID', $this->TOWN_ID);
        $criteria->compare('PIN_CODE', $this->PIN_CODE, true);
        $criteria->compare('FAMILY_ID', $this->FAMILY_ID);
        $criteria->compare('USER_ID', $this->USER_ID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        $this->USER_ID = Yii::app()->user->getState("userId");
        return parent::beforeSave();
    }

}