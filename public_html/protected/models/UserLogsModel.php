<?php

/**
 * This is the model class for table "UserLogs".
 *
 * The followings are the available columns in table 'UserLogs':
 * @property integer $id
 * @property string $sessionId
 * @property string $userIp
 * @property string $browser
 * @property string $operatingSystem
 * @property string $userName
 * @property string $entryTime
 * @property string $spentTime
 * @property string $refererUrl
 * @property string $pageUrl
 */
class UserLogsModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'UserLogs';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('sessionId, userIp, browser, operatingSystem, userName, entryTime, refererUrl, pageUrl', 'required'),
            array('sessionId, browser, userName', 'length', 'max' => 100),
            array('userIp, operatingSystem', 'length', 'max' => 25),
            array('refererUrl, pageUrl', 'length', 'max' => 200),
            array('spentTime', 'safe'),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, sessionId, userIp, browser, operatingSystem, userName, entryTime, spentTime, refererUrl, pageUrl', 'safe', 'on' => 'search'),
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
            'sessionId' => 'Сессия',
            'userIp' => 'Ip пользователя',
            'browser' => 'Браузер',
            'operatingSystem' => 'Операционная система',
            'userName' => 'Имя пользователя',
            'entryTime' => 'Начальное время',
            'spentTime' => 'Общее время',
            'refererUrl' => 'Url предыдущей страницы',
            'pageUrl' => 'Url страницы',
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
        $criteria->compare('sessionId', $this->sessionId, true);
        $criteria->compare('userIp', $this->userIp, true);
        $criteria->compare('browser', $this->browser, true);
        $criteria->compare('operatingSystem', $this->operatingSystem, true);
        $criteria->compare('userName', $this->userName, true);
        $criteria->compare('entryTime', $this->entryTime, true);
        $criteria->compare('spentTime', $this->spentTime, true);
        $criteria->compare('refererUrl', $this->refererUrl, true);
        $criteria->compare('pageUrl', $this->pageUrl, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UserLogsModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
