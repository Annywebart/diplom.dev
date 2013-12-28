<?php

/**
 * This is the model class for table "Departments".
 *
 * The followings are the available columns in table 'Departments':
 * @property integer $id
 * @property integer $idFacultet
 * @property string $title
 * @property string $description
 * @property integer $headDepartment
 * @property integer $idCorpus
 * @property integer $idClassroom
 *
 * The followings are the available model relations:
 * @property Lecturers $headDepartment0
 * @property Facultets $idFacultet0
 * @property Corpuses $idCorpus0
 * @property Classrooms $idClassroom0
 * @property Lecturers[] $lecturers
 * @property Specialities[] $specialities
 */
class DepartmentsModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Departments';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('idFacultet, title, headDepartment, idCorpus, idClassroom', 'required'),
            array('idFacultet, headDepartment, idCorpus, idClassroom', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 200),
            array('description', 'safe'),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, idFacultet, title, description, headDepartment, idCorpus, idClassroom', 'safe', 'on' => 'search'),
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
            'headDepartment0' => array(self::BELONGS_TO, 'LecturersModel', 'headDepartment'),
            'idFacultet0' => array(self::BELONGS_TO, 'FacultetsModel', 'idFacultet'),
            'idCorpus0' => array(self::BELONGS_TO, 'CorpusesModel', 'idCorpus'),
            'idClassroom0' => array(self::BELONGS_TO, 'ClassroomsModel', 'idClassroom'),
            'lecturers' => array(self::HAS_MANY, 'LecturersModel', 'idDepartment'),
            'specialities' => array(self::HAS_MANY, 'SpecialitiesModel', 'idDepartment'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'idFacultet' => 'Id Facultet',
            'title' => 'Title',
            'description' => 'Description',
            'headDepartment' => 'Head Department',
            'idCorpus' => 'Id Corpus',
            'idClassroom' => 'Id Classroom',
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
        $criteria->compare('idFacultet', $this->idFacultet);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('headDepartment', $this->headDepartment);
        $criteria->compare('idCorpus', $this->idCorpus);
        $criteria->compare('idClassroom', $this->idClassroom);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return DepartmentsModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
