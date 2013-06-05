<?php

/**
 * This is the model class for table "fm_hobbies_mst".
 *
 * The followings are the available columns in table 'fm_hobbies_mst':
 * @property integer $HOBBIE_ID
 * @property string $HOBBIES_NAME
 * @property string $HOBBIES_DESC
 * @property string $HOBBIES_IMAGE_URL
 * @property string $CREATED_BY
 * @property string $CREATED_DATE
 *
 * The followings are the available model relations:
 * @property FmUserHobbies[] $fmUserHobbies
 */
class FmHobbiesMst extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FmHobbiesMst the static model class
     */
    public $hobbiesName;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_hobbies_mst';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('HOBBIES_NAME', 'required'),
            array('HOBBIES_NAME, CREATED_BY', 'length', 'max' => 200),
            array('HOBBIES_DESC, HOBBIES_IMAGE_URL', 'length', 'max' => 500),
            array('CREATED_DATE,hobbiesName', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('HOBBIES_ID, HOBBIES_NAME, HOBBIES_DESC, HOBBIES_IMAGE_URL, CREATED_BY, CREATED_DATE', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'fmUserHobbies' => array(self::HAS_MANY, 'FmUserHobbies', 'HOBBIES_ID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'HOBBIES_ID' => 'Hobbies',
            'HOBBIES_NAME' => 'Hobbies Name',
            'HOBBIES_DESC' => 'Hobbies Desc',
            'HOBBIES_IMAGE_URL' => 'Hobbies Image Url',
            'CREATED_BY' => 'Created By',
            'CREATED_DATE' => 'Created Date',
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

        $criteria->compare('HOBBIES_ID', $this->HOBBIES_ID);
        $criteria->compare('HOBBIES_NAME', $this->HOBBIES_NAME, true);
        $criteria->compare('HOBBIES_DESC', $this->HOBBIES_DESC, true);
        $criteria->compare('HOBBIES_IMAGE_URL', $this->HOBBIES_IMAGE_URL, true);
        $criteria->compare('CREATED_BY', $this->CREATED_BY, true);
        $criteria->compare('CREATED_DATE', $this->CREATED_DATE, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}