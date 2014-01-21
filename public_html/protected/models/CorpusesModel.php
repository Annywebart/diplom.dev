<?php

/**
 * This is the model class for table "Corpuses".
 *
 * The followings are the available columns in table 'Corpuses':
 * @property integer $id
 * @property string $title
 * @property string $shortTitle
 * @property string $description
 * @property int $levels
 *
 * The followings are the available model relations:
 * @property Departments[] $departments
 * @property Timetable[] $timetables
 */
class CorpusesModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Corpuses';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('title', 'required'),
            array('title', 'length', 'max' => 200),
            array('shortTitle', 'length', 'max' => 50),
            array('description, levels', 'safe'),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, title, shortTitle, description, levels', 'safe', 'on' => 'search'),
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
            'departments' => array(self::HAS_MANY, 'DepartmentsModel', 'idCorpus'),
            'timetables' => array(self::HAS_MANY, 'TimetableModel', 'idCorpus'),
            'classrooms' => array(self::HAS_MANY, 'ClassroomsModel', 'idCorpus'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Название корпуса',
            'shortTitle' => 'Краткое название',
            'description' => 'Описание',
            'levels' => 'Количество этажей',
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('shortTitle', $this->shortTitle, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('levels', $this->levels, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return CorpusesModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    
    /**
     * Get list of corpuses
     * 
     * @return array Array with corpuses
     */
    public static function getCorpusesList()
    {
        return CHtml::listData(CorpusesModel::model()->findAll(), 'id', 'title');
    }
    
    /**
     * Get auditories of the selected corpus
     * 
     */
    public static function dynamicClassrooms($idCorpus)
    {
        $model = ClassroomsModel::model()->findAll('idCorpus=:idCorpus', array(':idCorpus' => $idCorpus));
        echo CHtml::tag('option', array('value' => ''), '', true);
        foreach ($model as $item) {
            echo CHtml::tag('option', array('value' => $item->id), CHtml::encode($item->number), true);
        }
    }
    
    /**
     * Get title of the corpus
     * 
     * @return string
     */
    public function getTitle()
    {
        if(isset($this->shortTitle)) {
            return $this->shortTitle;
        } else {
            return $this->title;
        }
    }
}
