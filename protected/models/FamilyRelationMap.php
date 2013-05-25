<?php

/**
 * This is the model class for table "fm_user_family_relation_map".
 *
 * The followings are the available columns in table 'fm_user_family_relation_map':
 * @property integer $USER_FAMILY_MAP_ID
 * @property integer $FAMILY_ID
 * @property integer $FAMILY_REL_ID
 * @property integer $USER_ID
 * @property string $CREATED_BY
 * @property string $CREATED_DATE
 * @property integer $USER_LEVEL_ID
 *
 * The followings are the available model relations:
 * @property FmUserBasicInf $uSER
 * @property FmFamilyRegistration $fAMILY
 * @property FmRelationMst $fAMILYREL
 */
class FamilyRelationMap extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FamilyRelationMap the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_user_family_relation_map';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
//            array('FAMILY_ID, FAMILY_REL_ID, USER_ID, CREATED_BY, CREATED_DATE, USER_LEVEL_ID', 'required'),
//            array('FAMILY_ID, FAMILY_REL_ID, USER_ID, USER_LEVEL_ID', 'numerical', 'integerOnly' => true),
//            array('CREATED_BY', 'length', 'max' => 45),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('USER_FAMILY_MAP_ID, FAMILY_ID, FAMILY_REL_ID, USER_ID, CREATED_BY, CREATED_DATE, USER_LEVEL_ID', 'safe'),
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
            'fAMILY' => array(self::BELONGS_TO, 'FmFamilyRegistration', 'FAMILY_ID'),
            'fAMILYREL' => array(self::BELONGS_TO, 'FmRelationMst', 'FAMILY_REL_ID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'USER_FAMILY_MAP_ID' => 'User Family Map',
            'FAMILY_ID' => 'Family',
            'FAMILY_REL_ID' => 'Family Rel',
            'USER_ID' => 'User',
            'CREATED_BY' => 'Created By',
            'CREATED_DATE' => 'Created Date',
            'USER_LEVEL_ID' => 'User Level',
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

        $criteria->compare('USER_FAMILY_MAP_ID', $this->USER_FAMILY_MAP_ID);
        $criteria->compare('FAMILY_ID', $this->FAMILY_ID);
        $criteria->compare('FAMILY_REL_ID', $this->FAMILY_REL_ID);
        $criteria->compare('USER_ID', $this->USER_ID);
        $criteria->compare('CREATED_BY', $this->CREATED_BY, true);
        $criteria->compare('CREATED_DATE', $this->CREATED_DATE, true);
        $criteria->compare('USER_LEVEL_ID', $this->USER_LEVEL_ID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}