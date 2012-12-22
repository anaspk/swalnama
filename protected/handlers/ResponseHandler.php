<?php

class ResponseHandler
{
    public function startNewResponse( $surveyId )
    {
        $survey = Survey::model()->findByPk( $surveyId );
        return $survey->startNewResponse();
    }
    
    public function enterAnswer( $responseId, $questionId, $answer )
    {
        $response = Response::model()->findByPk( $responseId );
        
    }
    
    public function completeResponse( $responseId )
    {
        $response = Response::model()->findByPk( $responseId );
        $response->status = Response::STATUS_COMPLETED;
        $response->save();
    }
}