<?php

/**
 * This is the model class for table "Lecturers".
 *
 * The followings are the available columns in table 'Lecturers':
 * @property integer $id
 * @property integer $idDepartment
 * @property string $firstName
 * @property string $lastName
 * @property string $fatherName
 * @property integer $gender
 * @property string $scientificDegree
 *
 * The followings are the available model relations:
 * @property Departments[] $departments
 * @property Facultets[] $facultets
 * @property Departments $idDepartment0
 * @property Timetable[] $timetables
 */
class LecturersModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Lecturers';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('idDepartment, firstName, lastName, fatherName, gender', 'required'),
            array('idDepartment, gender', 'numerical', 'integerOnly' => true),
            array('firstName, lastName, fatherName', 'length', 'max' => 100),
            array('scientificDegree', 'length', 'max' => 200),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, idDepartment, firstName, lastName, fatherName, gender, scientificDegree', 'safe', 'on' => 'search'),
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
            'departments' => array(self::HAS_MANY, 'DepartmentsModel', 'headDepartment'),
            'facultets' => array(self::HAS_MANY, 'FacultetsModel', 'headFacultet'),
            'idDepartment0' => array(self::BELONGS_TO, 'DepartmentsModel', 'idDepartment'),
            'timetables' => array(self::HAS_MANY, 'TimetableModel', 'idLecturers'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'idDepartment' => 'Кафедра',
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'fatherName' => 'Отчество',
            'gender' => 'Пол',
            'scientificDegree' => 'Учёная степень',
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
        $criteria->compare('idDepartment', $this->idDepartment);
        $criteria->compare('firstName', $this->firstName, true);
        $criteria->compare('lastName', $this->lastName, true);
        $criteria->compare('fatherName', $this->fatherName, true);
        $criteria->compare('gender', $this->gender);
        $criteria->compare('scientificDegree', $this->scientificDegree, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return LecturersModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
