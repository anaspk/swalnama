<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property string $dateOfBirth
 * @property integer $gender
 * @property integer $country
 *
 * The followings are the available model relations:
 * @property Answer[] $answers
 * @property Survey[] $surveys
 */
class User extends CActiveRecord
{
        const GENDER_MALE = 1;
        const GENDER_FEMALE = 2;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, firstName, emailAddress', 'required'),
			array('gender, country', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('password', 'length', 'max'=>40),
			array('firstName, lastName', 'length', 'max'=>25),
			array('emailAddress', 'length', 'max'=>150),
			array('dateOfBirth', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, firstName, lastName, emailAddress, dateOfBirth, gender, country', 'safe', 'on'=>'search'),
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
			'answers' => array(self::HAS_MANY, 'Answer', 'userId'),
			'surveys' => array(self::HAS_MANY, 'Survey', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
                        'fullName' => 'Full Name',
			'emailAddress' => 'Email Address',
			'dateOfBirth' => 'Date of Birth',
			'gender' => 'Gender',
			'country' => 'Country',
                        'genderText' => 'Gender',
                        'countryText' => 'Country',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('emailAddress',$this->emailAddress,true);
		$criteria->compare('dateOfBirth',$this->dateOfBirth,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('country',$this->country);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getFullName()
        {
            return $this->firstName . ' ' . $this->lastName;
        }
        
        public function getGenderOptions()
        {
            return array(
                0=>'Please select',
                self::GENDER_MALE=>'Male',
                self::GENDER_FEMALE=>'Female',
            );
        }
        
        public function getGenderText()
        {
            $genderOptions = $this->genderOptions;
            return ( ( isset($this->gender) && isset($genderOptions[$this->gender]) && $this->gender != 0 ) ? 
                    $genderOptions[$this->gender] : '' );
        }
        
        public function getCountries()
        {
            return array(
                0=>'Please select',
                1=>'Afghanistan', 2=>'Akrotiri', 3=>'Albania', 4=>'Algeria',
                5=>'American Samoa', 6=>'Andorra', 7=>'Angola', 8=>'Anguilla', 
                9=>'Antarctica', 10=>'Antigua and Barbuda', 11=>'Argentina',
                12=>'Armenia', 13=>'Aruba', 14=>'Ashmore and Cartier Islands',
                15=>'Australia', 16=>'Austria', 17=>'Azerbaijan', 18=>'Bahamas, The',
                19=>'Bahrain', 20=>'Bangladesh', 21=>'Barbados', 22=>'Bassas da India', 
                23=>'Belarus', 24=>'Belgium', 25=>'Belize', 26=>'Benin',
                27=>'Bermuda', 28=>'Bhutan', 29=>'Bolivia', 30=>'Bosnia and Herzegovina',
                31=>'Botswana', 32=>'Bouvet Island', 33=>'Brazil', 34=>'British Indian Ocean Territory',
                35=>'British Virgin Islands', 36=>'Brunei', 37=>'Bulgaria',
                38=>'Burkina Faso', 39=>'Burma', 40=>'Burundi', 41=>'Cambodia',
                42=>'Cameroon', 43=>'Canada', 44=>'Cape Verde', 45=>'Cayman Islands',
                46=>'Central African Republic', 47=>'Chad', 48=>'Chile', 
                49=>'China', 50=>'Christmas Island', 51=>'Clipperton Island', 
                52=>'Cocos (Keeling) Islands', 53=>'Colombia', 54=>'Comoros',
                55=>'Congo, Democratic Republic of the', 56=>'Congo, Republic of the',
                57=>'Cook Islands', 58=>'Coral Sea Islands', 59=>'Costa Rica',
                60=>"Cote d'Ivoire", 61=>'Croatia', 62=>'Cuba', 63=>'Cyprus',
                64=>'Czech Republic', 65=>'Denmark', 66=>'Dhekelia', 67=>'Djibouti',
                68=>'Dominica', 69=>'Dominican Republic', 70=>'Ecuador', 71=>'Egypt',
                72=>'El Salvador', 73=>'Equatorial Guinea', 74=>'Eritrea', 75=>'Estonia',
                76=>'Ethiopia', 77=>'Europa Island', 78=>'Falkland Islands (Islas Malvinas)',
                79=>'Faroe Islands', 80=>'Fiji', 81=>'Finland', 82=>'France',
                83=>'French Guiana', 84=>'French Polynesia', 85=>'French Southern and Antarctic Lands',
                86=>'Gabon', 87=>'Gambia, The', 88=>'Gaza Strip', 89=>'Georgia', 90=>'Germany',
                91=>'Ghana', 92=>'Gibraltar', 93=>'Glorioso Islands', 94=>'Greece', 95=>'Greenland',
                96=>'Grenada', 97=>'Guadeloupe', 98=>'Guam', 99=>'Guatemala', 
                100=>'Guernsey', 101=>'Guinea', 102=>'Guinea-Bissau', 103=>'Guyana',
                104=>'Haiti', 105=>'Heard Island and McDonald Islands', 106=>'Holy See (Vatican City)',
                107=>'Honduras', 108=>'Hong Kong', 109=>'Hungary', 110=>'Iceland',
                111=>'India', 112=>'Indonesia', 113=>'Iran', 114=>'Iraq',
                115=>'Ireland', 116=>'Isle of Man', 117=>'Israel', 118=>'Italy',
                119=>'Jamaica', 120=>'Jan Mayen', 121=>'Japan', 122=>'Jersey',
                123=>'Jordan', 124=>'Juan de Nova Island', 125=>'Kazakhstan',
                126=>'Kenya', 127=>'Kiribati', 128=>'Korea, North', 129=>'Korea, South',
                130=>'Kuwait', 131=>'Kyrgyzstan', 132=>'Laos', 133=>'Latvia',
                134=>'Lebanon', 135=>'Lesotho', 136=>'Liberia', 137=>'Libya', 
                138=>'Liechtenstein', 139=>'Lithuania', 140=>'Luxembourg', 141=>'Macau',
                142=>'Macedonia', 143=>'Madagascar', 144=>'Malawi', 145=>'Malaysia', 
                146=>'Maldives', 147=>'Mali', 148=>'Malta', 149=>'Marshall Islands', 150=>'Martinique',
                151=>'Mauritania', 152=>'Mauritius', 153=>'Mayotte', 154=>'Mexico',
                155=>'Micronesia, Federated States of', 156=>'Moldova', 157=>'Monaco', 
                158=>'Mongolia', 159=>'Montserrat', 160=>'Morocco', 161=>'Mozambique', 
                162=>'Namibia', 163=>'Nauru', 164=>'Navassa Island', 165=>'Nepal', 
                166=>'Netherlands', 167=>'Netherlands Antilles', 168=>'New Caledonia',
                169=>'New Zealand', 170=>'Nicaragua', 171=>'Niger', 172=>'Nigeria', 
                173=>'Niue', 174=>'Norfolk Island', 175=>'Northern Mariana Islands', 176=>'Norway',
                177=>'Oman', 178=>'Pakistan', 179=>'Palau', 180=>'Panama', 181=>'Papua New Guinea',
                182=>'Paracel Islands', 183=>'Paraguay', 184=>'Peru', 185=>'Philippines', 186=>'Pitcairn Islands',
                187=>'Poland', 188=>'Portugal', 189=>'Puerto Rico', 190=>'Qatar', 191=>'Reunion',
                192=>'Romania', 193=>'Russia', 194=>'Rwanda', 195=>'Saint Helena', 196=>'Saint Kitts and Nevis',
                197=>'Saint Lucia', 198=>'Saint Pierre and Miquelon', 199=>'Saint Vincent and the Grenadines',
                200=>'Samoa', 201=>'San Marino', 202=>'Sao Tome and Principe', 203=>'Saudi Arabia', 
                204=>'Senegal', 205=>'Serbia and Montenegro', 206=>'Seychelles', 207=>'Sierra Leone',
                208=>'Singapore', 209=>'Slovakia', 210=>'Slovenia', 211=>'Solomon Islands', 212=>'Somalia',
                213=>'South Africa', 214=>'South Georgia and the South Sandwich Islands', 215=>'Spain',
                216=>'Spratly Islands', 217=>'Sri Lanka', 218=>'Sudan', 219=>'Suriname', 220=>'Svalbard',
                221=>'Swaziland', 222=>'Sweden', 223=>'Switzerland', 224=>'Syria', 225=>'Taiwan',
                226=>'Tajikistan', 227=>'Tanzania', 228=>'Thailand', 229=>'Timor-Leste', 230=>'Togo',
                231=>'Tokelau', 232=>'Tonga', 233=>'Trinidad and Tobago', 234=>'Tromelin Island',
                235=>'Tunisia', 236=>'Turkey', 237=>'Turkmenistan', 238=>'Turks and Caicos Islands',
                239=>'Tuvalu', 240=>'Uganda', 241=>'Ukraine', 242=>'United Arab Emirates',243=>'United Kingdom',
                244=>'United States', 245=>'Uruguay', 246=>'Uzbekistan', 247=>'Vanuatu',248=>'Venezuela',
                249=>'Vietnam', 250=>'Virgin Islands', 251=>'Wake Island', 252=>'Wallis and Futuna',
                253=>'West Bank', 254=>'Western Sahara', 255=>'Yemen', 256=>'Zambia', 257=>'Zimbabwe',
            );
        }
        
        public function getCountryText()
        {
            $countries = $this->countries;
            return ( (isset($this->country) && isset($countries[$this->country]) && $this->country != 0 ) ?
                $countries[$this->country] : '' );
        }
}