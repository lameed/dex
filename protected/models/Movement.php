<?php



/**
 * This is the model class for table "{{movement}}".
 *
 * The followings are the available columns in table '{{movement}}':
 * @property integer $id
 * @property string $movement_from
 * @property string $movement_to
 * @property integer $subequipment_id
 * @property string $requested_by
 * @property integer $status_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class Movement extends DextronImsActiveRecord
{
	const STATUS_NOT_YET=0;
	const STATUS_DISAPPROVED=1;
const STATUS_APPROVED=2;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{movement}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('movement_from, requested_by, status_id', 'required'),
			array('subequipment_id, status_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('movement_from, movement_to, requested_by', 'length', 'max'=>2000),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, movement_from, movement_to, subequipment_id, requested_by, status_id, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'subequipment' => array(self::BELONGS_TO, 'Subequipment', 'subequipment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'movement_from' => 'Movement From',
			'movement_to' => 'Movement To',
			'subequipment_id' => 'Subequipment',
			'requested_by' => 'Requested By',
			'status_id' => 'Status',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
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
		$criteria->compare('movement_from',$this->movement_from,true);
		$criteria->compare('movement_to',$this->movement_to,true);
		$criteria->compare('subequipment_id',$this->subequipment_id);
		$criteria->compare('requested_by',$this->requested_by,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Movement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getStatusOptions()
	{
		return array(
		self::STATUS_NOT_YET=>'Not yet',
		self::STATUS_DISAPPROVED=>'Disapproved',
		self::STATUS_APPROVED=>'Approved',
		);
	}
	public function getStatusText()
		{
		$statusOptions=$this->statusOptions;
		return isset($statusOptions[$this->status_id]) ? $statusOptions[$this->status_id] : "unknown status ({$this->status_id})";
		}

}
