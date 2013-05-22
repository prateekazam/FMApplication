<?php

/**
 * This is the model class for table "fm_relation_mst".
 *
 * The followings are the available columns in table 'fm_relation_mst':
 * @property integer $FAMILY_REL_ID
 * @property string $FAMILY_REL_DESC
 * @property string $FAMILY_REL_MST
 * @property string $CREATED_BY
 * @property string $CREATED_DATE
 */
class RelationMaster extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return RelationMaster the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_relation_mst';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('FAMILY_REL_ID, FAMILY_REL_DESC, FAMILY_REL_MST, CREATED_BY', 'required'),
            array('FAMILY_REL_ID', 'numerical', 'integerOnly' => true),
            array('FAMILY_REL_DESC, FAMILY_REL_MST', 'length', 'max' => 200),
            array('CREATED_BY', 'length', 'max' => 100),
            array('CREATED_DATE', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('FAMILY_REL_ID, FAMILY_REL_DESC, FAMILY_REL_MST, CREATED_BY, CREATED_DATE', 'safe', 'on' => 'search'),
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
            'FAMILY_REL_ID' => 'Family Rel',
            'FAMILY_REL_DESC' => 'Family Rel Desc',
            'FAMILY_REL_MST' => 'Family Rel Mst',
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

        $criteria->compare('FAMILY_REL_ID', $this->FAMILY_REL_ID);
        $criteria->compare('FAMILY_REL_DESC', $this->FAMILY_REL_DESC, true);
        $criteria->compare('FAMILY_REL_MST', $this->FAMILY_REL_MST, true);
        $criteria->compare('CREATED_BY', $this->CREATED_BY, true);
        $criteria->compare('CREATED_DATE', $this->CREATED_DATE, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

  
}