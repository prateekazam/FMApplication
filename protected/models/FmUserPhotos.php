<?php

/**
 * This is the model class for table "fm_user_photos".
 *
 * The followings are the available columns in table 'fm_user_photos':
 * @property integer $USER_PHOTO_ID
 * @property integer $USER_ID
 * @property string $IMAGE_NAME
 * @property string $IMAGE_PATH_LOC
 * @property string $FOLDER_NAME
 *
 * The followings are the available model relations:
 * @property FmUserBasicInf $uSER
 */
class FmUserPhotos extends CActiveRecord {

    public $file;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return FmUserPhotos the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fm_user_photos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('file', 'file', 'allowEmpty'=>false),
            array('file', 'safe'),
            array('file', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => false, 'on' => 'update,insert'),
            array('USER_PHOTO_ID, USER_ID, IMAGE_NAME, IMAGE_PATH_LOC, FOLDER_NAME', 'safe', 'on' => 'search'),
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
            'USER_PHOTO_ID' => 'User Photo',
            'USER_ID' => 'User',
            'IMAGE_NAME' => 'Image Name',
            'IMAGE_PATH_LOC' => 'Image Path Loc',
            'FOLDER_NAME' => 'Folder Name',
            'file' =>'Choose File Location'
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

        $criteria->compare('USER_PHOTO_ID', $this->USER_PHOTO_ID);
        $criteria->compare('USER_ID', $this->USER_ID);
        $criteria->compare('IMAGE_NAME', $this->IMAGE_NAME, true);
        $criteria->compare('IMAGE_PATH_LOC', $this->IMAGE_PATH_LOC, true);
        $criteria->compare('FOLDER_NAME', $this->FOLDER_NAME, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        $this->USER_ID = Yii::app()->user->getState("userId");
        return parent::beforeSave();
    }

}