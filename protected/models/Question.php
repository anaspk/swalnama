<?php

/**
 * This is the model class for table "tbl_question".
 *
 * The followings are the available columns in table 'tbl_question':
 * @property integer $id
 * @property integer $surveyId
 * @property string $statement
 * @property integer $questionType
 * @property boolean $multipleChoiceAllowed
 * @property boolean $isCompulsory
 *
 * The followings are the available model relations:
 * @property Option[] $options
 * @property Answer[] $answers
 * @property Survey $survey
 */
class Question extends CActiveRecord
{
        const TYPE_MULTIPLE = 1;
        const TYPE_FREEANSWER = 2;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Question the static model class
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
		return 'tbl_question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('surveyId, statement, questionType, isCompulsory', 'required'),
			array('surveyId, questionType, multipleChoiceAllowed, isCompulsory', 'numerical', 'integerOnly'=>true),
			array('statement', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, surveyId, statement, questionType, multipleChoiceAllowed, isCompulsory', 'safe', 'on'=>'search'),
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
                        'options' => array(self::HAS_MANY, 'Option', 'questionId'),
			'answers' => array(self::HAS_MANY, 'Answer', 'questionId'),
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
			'surveyId' => 'Survey',
			'statement' => 'Question Statement',
			'questionType' => 'Question Type',
                        'questionTypeText' => 'Question Type',
			'multipleChoiceAllowed' => 'Allow Multiple Answers?',
			'isCompulsory' => 'Is Compulsory?',
                        'isCompulsoryText' => 'Is Compulsory?'
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
		$criteria->compare('surveyId',$this->surveyId);
		$criteria->compare('statement',$this->statement,true);
		$criteria->compare('questionType',$this->questionType);
		$criteria->compare('multipleChoiceAllowed',$this->multipleChoiceAllowed);
		$criteria->compare('isCompulsory',$this->isCompulsory);
                $criteria->condition = 'surveyId=:survey_id';
                $criteria->params = array( ':survey_id' => $this->surveyId );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getQuestionTypes()
        {
            return array(
                self::TYPE_MULTIPLE => 'Multiple Choice Question',
                self::TYPE_FREEANSWER => 'Free Answer',
            );
        }
        
        public function getQuestionTypeText()
        {
            $questionTypes = $this->questionTypes;
            
            return (isset($questionTypes[$this->questionType]) ? 
                    $questionTypes[$this->questionType] : 
                    '' );
        }
        
        public function getIsCompulsoryText()
        {
            return ( $this->isCompulsory ) ? 'Yes' : 'No';
        }
        
        public function getOptionsList()
        {
            $optionsList = array();
            foreach( $this->options as $option )
            {
                $optionsList[$option->id] = $option->optionStatement;
            }
            return $optionsList;
        }
}