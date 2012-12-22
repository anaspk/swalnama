<?php

/**
 * This is the model class for table "tbl_question".
 *
 * The followings are the available columns in table 'tbl_question':
 * @property integer $id
 * @property integer $surveyId
 * @property string $statement
 * @property integer $questionType
 * @property integer $multipleChoiceAllowed
 * @property integer $isCompusory
 *
 * The followings are the available model relations:
 * @property Answer[] $answers
 * @property Survey $survey
 */
class Question extends CActiveRecord
{
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
			array('surveyId, statement, questionType, multipleChoiceAllowed, isCompusory', 'required'),
			array('surveyId, questionType, multipleChoiceAllowed, isCompusory', 'numerical', 'integerOnly'=>true),
			array('statement', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, surveyId, statement, questionType, multipleChoiceAllowed, isCompusory', 'safe', 'on'=>'search'),
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
			'statement' => 'Statement',
			'questionType' => 'Question Type',
			'multipleChoiceAllowed' => 'Multiple Choice Allowed',
			'isCompusory' => 'Is Compusory',
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
		$criteria->compare('isCompusory',$this->isCompusory);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}