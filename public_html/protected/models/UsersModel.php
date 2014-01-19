<?php

/**
 * This is the model class for table "Users".
 *
 * The followings are the available columns in table 'Users':
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property integer $type
 * @property string $avatar
 * @property string $password
 * @property string $lastLogin
 * @property string $dateCreate
 */
class UsersModel extends CActiveRecord
{

    const ROLE_STUDENT = '3';
    const ROLE_LECTURER = '2';
    const ROLE_ADMIN = '1';

    public $fullName;
    public $confirm;
    public $initialPassword;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('firstName, email, type', 'required'),
//            array('firstName, lastName, email, type', 'ext.validators.EmptyValidator', 'allowEmpty' => false),
            array('type', 'numerical', 'integerOnly' => true),
            array('lastLogin', 'safe'),
            array('firstName, lastName', 'length', 'max' => 50),
            array('email, avatar', 'length', 'max' => 100),
            array('password', 'length', 'max' => 200),
            array('lastLogin', 'safe'),
//            array('password', 'compare', 'compareAttribute' => 'confirm', 'allowEmpty' => false),
            //array('email', 'email', 'message' => "The email isn't correct", 'allowEmpty' => false),
            array('email', 'unique', 'attributeName' => 'email'),
//            array('confirm', 'safe'),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, firstName, lastName, email, type, avatar, password, lastLogin, dateCreate', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
// NOTE: you may need to adjust the relation name and the related
// class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'type' => 'Type',
            'avatar' => 'Avatar',
            'password' => 'Password',
            'lastLogin' => 'Last Login',
            'dateCreate' => 'Date Create',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
// @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('firstName', $this->firstName, true);
        $criteria->compare('lastName', $this->lastName, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('type', $this->type);
        $criteria->compare('avatar', $this->avatar, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('lastLogin', $this->lastLogin, true);
        $criteria->compare('dateCreate', $this->dateCreate, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UsersModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * Encrypt string
     *
     * @param string $string input value
     */
    public static function encrypt($string)
    {
        return md5($string);
    }

    /**
     * Get list for drop down
     */
    public static function getUserRoles()
    {
        return $roles = array(
            self::ROLE_STUDENT => 'Студент',
            self::ROLE_LECTURER => 'Преподаватель',
            self::ROLE_ADMIN => 'Администратор'
        );
    }

    /**
     * Get user's full name.
     * @param integer $id The user's id
     */
    public function getFullName()
    {
        return ($this->firstName . ' ' . $this->lastName);
    }
    
    /**
     * Event for coco uploader
     */
//    public function onFileUploaded($fullFileName, $userdata, $results)
//    {
//        //Save to session
//        $this->onAfterFileUploaded($fullFileName, 'avatar');
//    }

//    public function behaviors()
//    {
//        return array(
//            'CocoFileBehavior' => array(
//                'class' => 'application.models.behaviors.CocoFileBehavior',
//                'path' => Yii::getPathOfAlias('webroot') . '/uploads/',
//                'url' => Yii::app()->getBaseUrl(true) . '/uploads/',
//                'fields' => array('avatar'),
//                'primaryKey' => 'id',
//            )
//        );
//    }

    /**
     * Action for encrypting raw password before updating user record
     */
//    public function beforeSave()
//    {
//        if (parent::beforeSave()) {
//            if (!$this->isNewRecord) {
//                if (empty($this->confirm) && empty($this->password)) {
//                    $this->password = $this->initialPassword;
//                } else {
//                    $this->password = MemberModel::encrypt($this->password);
//                }
//            } elseif ($this->isNewRecord && !empty($this->confirm)) {
//                $this->password = MemberModel::encrypt($this->password);
//            }
//        }
//        return true;
//    }

    /**
     * Clear password for empty field
     */
//    public function afterFind()
//    {
//        $this->initialPassword = $this->password;
//        $this->password = null;
//
//        parent::afterFind();
//    }
}
