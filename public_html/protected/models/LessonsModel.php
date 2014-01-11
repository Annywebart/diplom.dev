<?php

/**
 * This is the model class for table "Lessons".
 *
 * The followings are the available columns in table 'Lessons':
 * @property integer $id
 * @property string $timeStart
 * @property string $timeEnd
 * @property string $title
 *
 * The followings are the available model relations:
 * @property Timetable[] $timetables
 */
class LessonsModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Lessons';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('timeStart, timeEnd', 'required'),
            array('title', 'length', 'max' => 50),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, timeStart, timeEnd, title', 'safe', 'on' => 'search'),
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
            'timetables' => array(self::HAS_MANY, 'TimetableModel', 'idLesson'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Номер',
            'timeStart' => 'Начало пары',
            'timeEnd' => 'Конец пары',
            'title' => 'Пара',
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
        $criteria->compare('timeStart', $this->timeStart, true);
        $criteria->compare('timeEnd', $this->timeEnd, true);
        $criteria->compare('title', $this->title, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Lessons the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * Get list of lessons
     * 
     * @return array Array with lessons
     */
    public static function getLessonsList()
    {
        return CHtml::listData(LessonsModel::model()->findAll(), 'id', 'title');
    }

    /**
     * Get time of lessons
     * 
     * @return array Array with lessons
     */
    public static function getTime($id, $sepsrator = '')
    {
        $model = LessonsModel::model()->findByPk($id);
        return '<span>' . date('H:i', strtotime($model->timeStart)) . '</span>' . $sepsrator . '<span>' . date('H:i', strtotime($model->timeEnd)) . '<span>';
    }
    
    public static function isActiveNow($id, $dayOfWeek)
    {
        $model = LessonsModel::model()->findByPk($id);
        if(date("w") == $dayOfWeek) {
            if (date("H:i") >= $model->timeStart && date("H:i") <= $model->timeEnd) {
                return true;
            }
        }
    }
}
