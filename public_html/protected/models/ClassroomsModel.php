<?php

/**
 * This is the model class for table "Classrooms".
 *
 * The followings are the available columns in table 'Classrooms':
 * @property integer $id
 * @property integer $idCorpus
 * @property integer $number
 * @property integer $level
 * @property integer $type
 * @property integer $seats
 *
 * The followings are the available model relations:
 * @property Groups $idCorpus0
 * @property Departments[] $departments
 * @property Timetable[] $timetables
 */
class ClassroomsModel extends CActiveRecord
{

    const LECTURE_CLASSROOM = 1;
    const NORMAL_CLASSROOM = 2;
    const COMPUTER_CLASSROOM = 3;
    const PRACTICAL_CLASSROOM = 4;
    const DECANAT_ROOM = 5;
    const DEPARTMENT_ROOM = 6;
    
    public static $classroomTypeList = array(
        self::LECTURE_CLASSROOM => 'Лекционная аудитория',
        self::NORMAL_CLASSROOM => 'Обычная аудитория',
        self::COMPUTER_CLASSROOM => 'Компьютерная аудитория',
        self::PRACTICAL_CLASSROOM => 'Лабораторный кабинет',
        self::DECANAT_ROOM => 'Деканат',
        self::DEPARTMENT_ROOM => 'Кафедра',
    );

    
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Classrooms';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('idCorpus, number, level', 'required'),
            array('idCorpus, number, level, type, seats', 'numerical', 'integerOnly' => true),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, idCorpus, number, level, type, seats', 'safe', 'on' => 'search'),
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
            'corpus' => array(self::BELONGS_TO, 'CorpusesModel', 'idCorpus'),
            'departments' => array(self::HAS_MANY, 'DepartmentsModel', 'idClassroom'),
            'timetables' => array(self::HAS_MANY, 'TimetableModel', 'idClassroom'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'idCorpus' => 'Корпус',
            'number' => 'Номер аудитории',
            'level' => 'Этаж',
            'type' => 'Тип',
            'seats' => 'Количество мест',
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
        $criteria->compare('idCorpus', $this->idCorpus);
        $criteria->compare('number', $this->number);
        $criteria->compare('level', $this->level);
        $criteria->compare('type', $this->type);
        $criteria->compare('seats', $this->seats);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ClassroomsModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
