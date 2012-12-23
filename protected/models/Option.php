<?php

/**
 * This is the model class for table "tbl_option".
 *
 * The followings are the available columns in table 'tbl_option':
 * @property integer $id
 * @property integer $questionId
 * @property string $optionStatement
 *
 * The followings are the available model relations:
 * @property Question $question
 */
class Option extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Option the static model class
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
		return 'tbl_option';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('questionId, optionStatement', 'required'),
			array('questionId', 'numerical', 'integerOnly'=>true),
			array('optionStatement', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, questionId, optionStatement', 'safe', 'on'=>'search'),
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
			'questionId' => 'Question',
			'optionStatement' => 'Option Statement',
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
		$criteria->compare('questionId',$this->questionId);
		$criteria->compare('optionStatement',$this->optionStatement,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}