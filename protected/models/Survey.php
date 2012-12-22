<?php

/**
 * This is the model class for table "tbl_survey".
 *
 * The followings are the available columns in table 'tbl_survey':
 * @property integer $id
 * @property integer $userId
 * @property string $surveyName
 * @property string $surveyDescription
 * @property string $welcomeMessage
 * @property string $goodbyeMessage
 * @property integer $status
 * @property integer $privacyLevel
 * @property string $creationDate
 * @property string $publishDate
 * @property string $endDate
 *
 * The followings are the available model relations:
 * @property Question[] $questions
 * @property User $user
 */
class Survey extends CActiveRecord
{
        const STATUS_CREATED = 0;
        const STATUS_PUBLISHED = 1;
        
        const PRIVACY_PUBLIC = 0;
        const PRIVACY_REGISTERED = 1;
        const PRIVACY_INVITED = 2;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Survey the static model class
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
		return 'tbl_survey';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, surveyName, welcomeMessage, goodbyeMessage, status, privacyLevel, creationDate', 'required'),
			array('userId, status, privacyLevel', 'numerical', 'integerOnly'=>true),
			array('surveyName', 'length', 'max'=>45),
			array('surveyDescription', 'length', 'max'=>255),
			array('publishDate, endDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, surveyName, surveyDescription, welcomeMessage, goodbyeMessage, status, privacyLevel, creationDate, publishDate, endDate', 'safe', 'on'=>'search'),
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
			'questions' => array(self::HAS_MANY, 'Question', 'surveyId'),
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
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
			'surveyName' => 'Survey Name',
			'surveyDescription' => 'Survey Description',
			'welcomeMessage' => 'Welcome Message',
			'goodbyeMessage' => 'Goodbye Message',
			'status' => 'Status',
			'privacyLevel' => 'Privacy Level',
			'creationDate' => 'Creation Date',
			'publishDate' => 'Publish Date',
			'endDate' => 'End Date',
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
		$criteria->compare('surveyName',$this->surveyName,true);
		$criteria->compare('surveyDescription',$this->surveyDescription,true);
		$criteria->compare('welcomeMessage',$this->welcomeMessage,true);
		$criteria->compare('goodbyeMessage',$this->goodbyeMessage,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('privacyLevel',$this->privacyLevel);
		$criteria->compare('creationDate',$this->creationDate,true);
		$criteria->compare('publishDate',$this->publishDate,true);
		$criteria->compare('endDate',$this->endDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function startNewResponse()
        {
            $response = new Response;
            
            $response->surveyId = $this->id;
            $response->userId = Yii::app()->user->id;
            $response->status = Response::STATUS_STARTED;
            $response->save();
            
            return $response;
        }
        
        public function getStatusOptions()
        {
            return array(
                self::STATUS_CREATED => 'Draft',
                self::STATUS_PUBLISHED => 'Published',
            );
        }
        
        public function getStatusText()
        {
            $statusOptions = $this->statusOptions;
            return ( isset($statusOptions[$this->status]) ? 
                $statusOptions[$this->status] : "Unknown status code {$this->status}" );
        }
        
        public function getPrivacyOptions()
        {
            return array(
                self::PRIVACY_PUBLIC => 'Anyone can find survey and participate in it',
                self::PRIVACY_REGISTERED => 'Any registered user can participate',
                self::PRIVACY_INVITED =>'Only invited registered users can participate',
            );
        }
        
        public function getPrivacyText()
        {
            $privacyOptions = $this->privacyOptions;
            return ( isset($privacyOptions[$this->privacyLevel]) ?
                    $privacyOptions[$this->privacyLevel] : "Unknown privacy level code {$this->privacyLevel}");
        }
}