<?php

/**
 * This is the model class for table "tbl_answer".
 *
 * The followings are the available columns in table 'tbl_answer':
 * @property integer $id
 * @property integer $userId
 * @property integer $questionId
 * @property integer $answerChoice
 * @property string $answerText
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Question $question
 */
class Answer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Answer the static model class
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
		return 'tbl_answer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('responseId, questionId', 'required'),
			array('responseId, questionId, answerChoice', 'numerical', 'integerOnly'=>true),
			array('answerText', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, questionId, answerChoice, answerText', 'safe', 'on'=>'search'),
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
			//'user' => array(self::BELONGS_TO, 'User', 'userId'),
                        'response' => array(self::BELONGS_TO, 'Response', 'responseId'),
			'question' => array(self::BELONGS_TO, 'Question', 'questionId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			//'userId' => 'User',
                        'responseId' => 'Response',
			'questionId' => 'Question',
			'answerChoice' => 'Answer Choice',
			'answerText' => 'Answer',
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
		$criteria->compare('questionId',$this->questionId);
		$criteria->compare('answerChoice',$this->answerChoice);
		$criteria->compare('answerText',$this->answerText,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getFormConfig()
        {
            $elements = array();
            
            if ( $this->question->questionType == Question::TYPE_FREEANSWER )
            {
                $elements['answerText'] = array(
                    'type' => 'textarea',
                    'class' => 'span8'
                );
            }
            else
            {
                $elements['answerChoice'] = array(
                    'type' => $this->question->multipleChoiceAllowed ? 'checkboxlist': 'radiolist',
                    'items' => $this->question->optionsList,
                );
            }
            
            return array(
                'type' => 'form',
                'model' => $this,
                'elements' => $elements,
            );
        }
}