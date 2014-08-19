<?php

/**
 * This is the model class for table "consumables".
 *
 * The followings are the available columns in table 'consumables':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $consumableitem_id
 * @property string $DateCreated
 * @property integer $create_user_id
 * @property string $LastUpdated
 * @property integer $update_user_id
 */
class Consumables extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consumables';
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
			array('consumableitem_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>256),
			array('description', 'length', 'max'=>2000),
			array('DateCreated, LastUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, consumableitem_id, DateCreated, create_user_id, LastUpdated, update_user_id', 'safe', 'on'=>'search'),
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
			'consumableproperty' => array(self::HAS_MANY, 'consumableproperty', 'consumables_id'),
			'consumableitem' => array(self::BELONGS_TO, 'Consumableitem', 'consumableitem_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'consumableitem_id' => 'Consumableitem',
			'DateCreated' => 'Date Created',
			'create_user_id' => 'Create User',
			'LastUpdated' => 'Last Updated',
			'update_user_id' => 'Update User',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('consumableitem_id',$this->consumableitem_id);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('LastUpdated',$this->LastUpdated,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Consumables the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
