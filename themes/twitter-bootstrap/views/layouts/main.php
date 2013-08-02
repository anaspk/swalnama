<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }
        footer {
            text-align: center;
        }
        #home-sidebar {
            text-align: center;
        }
    </style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php
    $navbarRightEntries = array( // configure any common settings here
        'class'=>'bootstrap.widgets.TbMenu',
        'htmlOptions'=>array('class'=>'pull-right'),
    );
    if ( Yii::app()->user->isGuest )
    {
        $navbarRightEntries['items'] = array(
                    array('label'=>'Sign Up', 'url'=>CHtml::normalizeUrl(array('user/signup'))),
                    array('label'=>'Login', 'url'=>CHtml::normalizeUrl(array('site/login'))),
            );
    }
    else
    {
        $navbarRightEntries['items'] = array(
                    array('label'=>'Welcome, ' . Yii::app()->user->name, 'url'=>CHtml::normalizeUrl(''),
                        'items'=>array(
                            array('label'=>'Dashboard','url'=>CHtml::normalizeUrl(array('site/dashboard'))),
                            array('label'=>'Update Profile', 'url'=>CHtml::normalizeUrl(array('user/updateProfile'))),
                            '',
                            array('label'=>'Logout', 'url'=>CHtml::normalizeUrl(array('site/logout'))),
            )));
    }
?>

<div class="container-fluid">
    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
        //'type'=>'inverse',
        'brand'=>'OpenSurvey',
        'brandUrl'=>Yii::app()->request->baseUrl,
        'collapse'=>true,
        'items'=>array(
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'items'=>array(
                    array('label'=>'Home', 'url'=>CHtml::normalizeUrl(array('site/index'))),
                    array('label'=>'About', 'url'=>CHtml::normalizeUrl(array('site/page', 'view'=>'about'))),
                    array('label'=>'Contact', 'url'=>CHtml::normalizeUrl(array('site/contact'))),
                ),
            ),
            $navbarRightEntries, // login/sign up or account management links depending upon
                            // whether the current user is signed in or not
        ),
    ));
    ?>
    <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
            )); ?>
    <?php endif?><!-- breadcrumbs -->

    <?php echo $content; ?>

</div><!-- page -->
<footer class="footer">
    <div class="container-fluid well">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
    </div><!-- footer -->
</footer>

</body>
</html>
