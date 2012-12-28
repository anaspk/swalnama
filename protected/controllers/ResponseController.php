<?php

class ResponseController extends Controller
{
    public $layout='//layouts/column1';
    
    public function filters() {
        return array(
            
        );
    }
    
    public function accessRules() {
        return array(
            
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
                'type' => 'horizontal',
            ) );
            $this->render( 'create', array('form' => $form) );
        }
    }
}
?>
