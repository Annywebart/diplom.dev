<?php

/**
 * This is the model class for table "Timetable".
 *
 * The followings are the available columns in table 'Timetable':
 * @property integer $id
 * @property integer $idLesson
 * @property integer $week
 * @property integer $dayOfWeek
 * @property integer $idGroup
 * @property integer $idLecturers
 * @property string $title
 * @property integer $idCorpus
 * @property integer $idClassroom
 * @property string $shortTitle
 *
 * The followings are the available model relations:
 * @property Classrooms $idClassroom0
 * @property Lessons $idLesson0
 * @property Groups $idGroup0
 * @property Lecturers $idLecturers0
 * @property Corpuses $idCorpus0
 */
class TimetableModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Timetable';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('idLesson, week, dayOfWeek, idGroup, idLecturers, idCorpus, idClassroom', 'required'),
            array('idLesson, week, dayOfWeek, idGroup, idLecturers, idCorpus, idClassroom', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 200),
            array('shortTitle', 'length', 'max' => 50),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, idLesson, week, dayOfWeek, idGroup, idLecturers, title, idCorpus, idClassroom, shortTitle', 'safe', 'on' => 'search'),
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
            'idClassroom0' => array(self::BELONGS_TO, 'ClassroomsModel', 'idClassroom'),
            'idLesson0' => array(self::BELONGS_TO, 'LessonsModel', 'idLesson'),
            'idGroup0' => array(self::BELONGS_TO, 'GroupsModel', 'idGroup'),
            'idLecturers0' => array(self::BELONGS_TO, 'LecturersModel', 'idLecturers'),
            'idCorpus0' => array(self::BELONGS_TO, 'CorpusesModel', 'idCorpus'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'idLesson' => 'Id Lesson',
            'week' => 'Week',
            'dayOfWeek' => 'Day Of Week',
            'idGroup' => 'Id Group',
            'idLecturers' => 'Id Lecturers',
            'title' => 'Title',
            'idCorpus' => 'Id Corpus',
            'idClassroom' => 'Id Classroom',
            'shortTitle' => 'Short Title',
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
        $criteria->compare('idLesson', $this->idLesson);
        $criteria->compare('week', $this->week);
        $criteria->compare('dayOfWeek', $this->dayOfWeek);
        $criteria->compare('idGroup', $this->idGroup);
        $criteria->compare('idLecturers', $this->idLecturers);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('idCorpus', $this->idCorpus);
        $criteria->compare('idClassroom', $this->idClassroom);
        $criteria->compare('shortTitle', $this->shortTitle, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TimetableModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
