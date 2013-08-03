<?php
/* @var $this SiteController */
/* @var $surveys Survey[] */
/* @var $users User[] */

$this->pageTitle=Yii::app()->name;

$this->menu = array(
    array('label'=>'Create New Survey', 'url'=>array('survey/create')),
    array('label'=>'Manage Surveys', 'url'=>array('survey/index')),
    '',
    array('label'=>'Add New User', 'url'=>array('user/create')),
    array('label'=>'Manage Users', 'url'=>array('user/index')),
    '',
    array('label'=>'Update Profile', 'url'=>array('user/updateProfile')),
    array('label'=>'Logout', 'url'=>array('site/logout')),
);
?>
<h1>Welcome to Open Survey</h1>
<p>Thanks for logging in!</p>
<h2>Surveys</h2>
<table class="table">
    <tr>
        <th>Survey Name</th><th>Status</th><th>Privacy Level</th>
    </tr>
    <?php $i = 0;
        foreach( $surveys as $survey ):
    ?>  
        <tr>
            <td><?php echo CHtml::encode($survey->surveyName); ?></td>
            <td><?php echo CHtml::encode($survey->statusText); ?></td>
            <td><?php echo CHtml::encode($survey->privacyText); ?></td>
        </tr>
    <?php 
        $i++;
        if ( $i >= 4 ) break;
        endforeach;
    ?>
</table>
<h2>Users</h2>
<table class="table">
    <tr>
        <th>Username</th><th>Email Address</th><th>First Name</th><th>Last Name</th>
    </tr>
    <?php $i = 0;
        foreach( $users as $user ):
    ?>  
        <tr>
            <td><?php echo CHtml::encode($user->username); ?></td>
            <td><?php echo CHtml::encode($user->emailAddress); ?></td>
            <td><?php echo CHtml::encode($user->firstName); ?></td>
            <td><?php echo CHtml::encode($user->lastName); ?></td>
        </tr>
    <?php 
        $i++;
        if ( $i >= 4 ) break;
        endforeach;
    ?>
</table>