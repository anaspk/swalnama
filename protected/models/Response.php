<?php

/**
 * This is the model class for table "tbl_response".
 *
 * The followings are the available columns in table 'tbl_response':
 * @property integer $id
 * @property integer $userId
 * @property integer $surveyId
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Answer[] $answers
 * @property User $user
 * @property Survey $survey
 */
class Response extends CActiveRecord
{
        const STATUS_STARTED = 1;
        const STATUS_COMPLETED = 2;
	
        /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Response the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_response';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, surveyId', 'required'),
			array('userId, surveyId, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, surveyId, status', 'safe', 'on'=>'search'),
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
			'answers' => array(self::HAS_MANY, 'Answer', 'responseId'),
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
			'survey' => array(self::BELONGS_TO, 'Survey', 'surveyId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'surveyId' => 'Survey',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('surveyId',$this->surveyId);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function addAnswer( $questionId, $answer )
        {
            
        }
}