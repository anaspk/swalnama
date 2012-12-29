<?php

class ResponseController extends Controller
{
    public $layout='//layouts/column1';
    
    public function filters()
    {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }
    
    public function accessRules()
    {
        return array(
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                        'actions'=>array('create', 'delete'),
                        'users'=>array('@'),
                ),
                array('deny',  // deny all users
                        'users'=>array('*'),
                ),
        );
    }
    
    public function actionCreate( $surveyId = 0 )
    {
        if ( $surveyId == 0 )
        {
            $this->redirect(array('site/index'));
        }
        
        $survey = Survey::model()->findByPk( $surveyId );
        
        if ( !is_null( $survey ) )
        {
            $model = new Response;
            $model->surveyId = $surveyId;
            $model->userId = Yii::app()->user->id;
            $model->status = Response::STATUS_STARTED;
            
            Yii::import('bootstrap.widgets.TbForm');
            $form = TbForm::createForm( $model->formConfig, $model, array(
                'type' => 'horizontal', 'htmlOptions' => array( 'class' => 'well' ),
            ) );
            $this->render( 'create', array('form' => $form) );
        }
    }
    
    public function actionDelete()
    {
        
    }
}
?>
