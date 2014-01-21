<?php

/**
 * This is the model class for table "Facultets".
 *
 * The followings are the available columns in table 'Facultets':
 * @property integer $id
 * @property string $title
 * @property string $code
 * @property string $description
 * @property integer headFacultet
 * @property integer $idCorpus
 * @property integer $idClassroom
 *
 * The followings are the available model relations:
 * @property Specialities[] $specialities
 */
class FacultetsModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Facultets';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, code, idCorpus, idClassroom', 'required'),
            array('headFacultet, idCorpus, idClassroom', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 200),
            array('code', 'length', 'max' => 10),
            array('description, headFacultet', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, code, description, headFacultet, idCorpus, idClassroom', 'safe', 'on' => 'search'),
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
            'specialities' => array(self::HAS_MANY, 'SpecialitiesModel', 'idFacultet'),
            'corpus' => array(self::BELONGS_TO, 'CorpusesModel', 'idCorpus'),
            'classroom' => array(self::BELONGS_TO, 'ClassroomsModel', 'idClassroom'),
            'head' => array(self::BELONGS_TO, 'LecturersModel', 'headFacultet'),
        );
    }

    public function scopes()
    {
        return array(
            'sortByCodeAsc' => array(
                'order' => 'code ASC'
            ),
            'sortByCodeDesc' => array(
                'order' => 'code DESC'
            ),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Название факультета',
            'code' => 'Сокращение',
            'description' => 'Описание',
            'headFacultet' => 'Декан факультета',
            'idCorpus' => 'Корпус',
            'idClassroom' => 'Деканат',
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
        $criteria->compare('code', $this->code, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('headFacultet', $this->headFacultet, true);
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
     * @return FacultetsModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * Get list of facultets
     * 
     * @return array Array with facultets
     */
    public static function getFacultetsList()
    {
        return CHtml::listData(FacultetsModel::model()->sortByCodeAsc()->findAll(), 'id', 'code');
    }

    /**
     * Get list of facultets by letters of the alphabet
     * 
     * @return array Array with facultets
     */
    public static function getFacultetsByLetter()
    {
        $facultets = FacultetsModel::model()->findAll();
        $letters = array();
        foreach ($facultets as $item) {
            $codeArray = preg_split('//u', $item->code, -1, PREG_SPLIT_NO_EMPTY);
            $letters[$codeArray[0]][] = $item;
        }
        return $letters;
    }

}
