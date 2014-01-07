<?php

/**
 * This is the model class for table "Pages".
 *
 * The followings are the available columns in table 'Pages':
 * @property integer $id
 * @property integer $parentId
 * @property string $alias
 * @property string $menu_name
 * @property string $page_title
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 * @property string $content
 * @property string $date_create
 * @property string $date_update
 */
class PagesModel extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Pages';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('parentId, alias, menu_name, page_title, meta_title, meta_desc, meta_key, content, date_create, date_update', 'required'),
            array('parentId', 'numerical', 'integerOnly' => true),
            array('alias, page_title', 'length', 'max' => 100),
            array('menu_name', 'length', 'max' => 50),
            array('meta_title, meta_desc, meta_key', 'length', 'max' => 255),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, parentId, alias, menu_name, page_title, meta_title, meta_desc, meta_key, content, date_create, date_update', 'safe', 'on' => 'search'),
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
            'parentId' => 'Parent',
            'alias' => 'Alias',
            'menu_name' => 'Menu Name',
            'page_title' => 'Page Title',
            'meta_title' => 'Meta Title',
            'meta_desc' => 'Meta Desc',
            'meta_key' => 'Meta Key',
            'content' => 'Content',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
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
        $criteria->compare('parentId', $this->parentId);
        $criteria->compare('alias', $this->alias, true);
        $criteria->compare('menu_name', $this->menu_name, true);
        $criteria->compare('page_title', $this->page_title, true);
        $criteria->compare('meta_title', $this->meta_title, true);
        $criteria->compare('meta_desc', $this->meta_desc, true);
        $criteria->compare('meta_key', $this->meta_key, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('date_create', $this->date_create, true);
        $criteria->compare('date_update', $this->date_update, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PagesModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}
