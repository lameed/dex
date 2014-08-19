<?php

/**
 * This is the model class for table "part".
 *
 * The followings are the available columns in table 'part':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $part_number
 * @property string $image
 * @property integer $manufacturerID
 * @property integer $supplierID
 * @property integer $equipmentID
 * @property string $DateCreated
 * @property string $LastUpdated
 *
 * The followings are the available model relations:
 * @property Images[] $images
 * @property Equipment $equipment
 * @property Manufacturer $manufacturer
 * @property Supplier $supplier
 * @property Store[] $stores
 */
class Part extends CActiveRecord
{
	public $image;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'part';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('manufacturerID, supplierID, equipmentID', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>256),
			array('part_number, image', 'length', 'max'=>2000),
			array('description, DateCreated', 'safe'),
			 array('image', 'file', 'types'=>'jpg, gif, png'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, part_number, image, manufacturerID, supplierID, equipmentID, DateCreated, LastUpdated', 'safe', 'on'=>'search'),
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
			
			'equipment' => array(self::BELONGS_TO, 'Equipment', 'equipmentID'),
			'manufacturer' => array(self::BELONGS_TO, 'Manufacturer', 'manufacturerID'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplierID'),
			'stores' => array(self::HAS_MANY, 'Store', 'part_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'part_number' => 'Part Number',
			'image' => 'Image',
			'manufacturerID' => 'Manufacturer',
			'supplierID' => 'Supplier',
			'equipmentID' => 'Equipment',
			'DateCreated' => 'Date Created',
			'LastUpdated' => 'Last Updated',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('part_number',$this->part_number,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('manufacturerID',$this->manufacturerID);
		$criteria->compare('supplierID',$this->supplierID);
		$criteria->compare('equipmentID',$this->equipmentID);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('LastUpdated',$this->LastUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Part the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
