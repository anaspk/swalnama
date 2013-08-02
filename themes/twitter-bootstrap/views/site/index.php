<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="row-fluid">
    <div class="span8">
        <div class="hero-unit">
            <h1>Welcome</h1>
            <h2>To OpenSurvey</h2>
            <p>A free and open solution to all your surveying and response collection needs.</p>
            <a href="<?php echo CHtml::normalizeUrl(array('user/signup')); ?>" class="btn btn-primary btn-large">Get Started Now ...</a>
        </div>
    </div><!-- span8 -->

    <div class="span4">
        <div class="well" id="home-sidebar">
            <p>
                Already have an account?
            </p>
            <a href="<?php echo CHtml::normalizeUrl(array('site/login')); ?>" class="btn btn-large btn-success">Sign In</a>
            <br /><br /><i class="icon-arrow-up"></i>
            <hr />
            <i class="icon-arrow-down"></i>
            <p>
                Don't have an account yet?
            </p>
            <a href="<?php echo CHtml::normalizeUrl(array('user/signup')); ?>" class="btn btn-large btn-primary">Sign Up</a>
        </div>
    </div><!-- span4 -->
</div>
<div class="row-fluid">
    <div class="span12">
        
    </div><!-- span12 -->
</div>