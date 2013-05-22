<?php

/**
 * This is the model class for table "fm_family_photos".
 *
 * The followings are the available columns in table 'fm_family_photos':
 * @property integer $FAMILY_PHOTO_ID
 * @property integer $FAMILY_ID
 * @property string $IMAGE
 * @property integer $USER_ID
 */
class FamilyPhoto extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FamilyPhoto the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_family_photos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('FAMILY_ID, IMAGE, USER_ID', 'required'),
            array('FAMILY_ID, USER_ID', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('FAMILY_PHOTO_ID, FAMILY_ID, IMAGE, USER_ID', 'safe', 'on' => 'search'),
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
            'FAMILY_PHOTO_ID' => 'Family Photo',
            'FAMILY_ID' => 'Family',
            'IMAGE' => 'Image',
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

        $criteria->compare('FAMILY_PHOTO_ID', $this->FAMILY_PHOTO_ID);
        $criteria->compare('FAMILY_ID', $this->FAMILY_ID);
        $criteria->compare('IMAGE', $this->IMAGE, true);
        $criteria->compare('USER_ID', $this->USER_ID);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Saves the name, size, type and data of the uploaded file
     */
    public function beforeSave() {
        $file = CUploadedFile::getInstance($this, 'IMAGE');

        $this->file_name = $file->name;
        $this->file_type = $file->type;
        $this->file_size = $file->size;
        $this->IMAGE = file_get_contents($file->tempName);

        return parent::beforeSave();
    }

}