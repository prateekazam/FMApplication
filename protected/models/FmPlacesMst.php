<?php

/**
 * This is the model class for table "fm_places_mst".
 *
 * The followings are the available columns in table 'fm_places_mst':
 * @property integer $woeid
 * @property string $iso
 * @property string $name
 * @property string $language
 * @property string $type
 * @property integer $parent
 */
class FmPlacesMst extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FmPlacesMst the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_places_mst';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('woeid, iso, name, language, type, parent', 'required'),
            array('woeid, parent', 'numerical', 'integerOnly' => true),
            array('iso, language', 'length', 'max' => 6),
            array('type', 'length', 'max' => 30),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('woeid, iso, name, language, type, parent', 'safe', 'on' => 'search'),
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
            'woeid' => 'Woeid',
            'iso' => 'Iso',
            'name' => 'Country',
            'language' => 'Language',
            'type' => 'Type',
            'parent' => 'Parent',
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

        $criteria->compare('woeid', $this->woeid);
        $criteria->compare('iso', $this->iso, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('language', $this->language, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('parent', $this->parent);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

//    public function getAllCountry() {
//        $country = new CDbCriteria;
//        //'type="Country" and language="ENG" '
//        $country->compare('type', 'Country');
//        $country->compare('language', 'ENG');
//        $country->order = 'NAME DES';
//        return findAll($country);
//    }

}