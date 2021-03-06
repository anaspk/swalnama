<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		if ( !Yii::app()->user->isGuest )
                    $this->redirect(array('dashboard'));
                
                $this->layout = 'index';
                $this->render('index');
	}

        public function actionDashboard()
        {
            if ( Yii::app()->user->isGuest )
                $this->redirect(array('index'));
            
            $surveys = Survey::model()->findAll('userId=:userId', array('userId'=>Yii::app()->user->id));
            $users = User::model()->findAll();
                
            $this->layout = 'column2';
            $this->render('dashboard', array('users'=>$users, 'surveys'=>$surveys));
        }
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
        
        /**
	 * Displays the login page
	 */
	public function actionLogin()
	{
                //first of all check if the user is already signed in or not
                if ( !Yii::app()->user->isGuest )
                    $this->redirect(array('dashboard'));
                
//		// if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}
            
            $model = new LoginForm();
            Yii::import( 'bootstrap.widgets.TbForm');
            $form = TbForm::createForm( 'application.views.site.formConfigs.login', $model, array(
                'type' => 'horizontal',
            ) );
            if ( $form->submitted('login') && $form->validate() && $model->login() )
                $this->redirect( array('dashboard') );
            else
                $this->render( 'login', array('form'=>$form) );
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}