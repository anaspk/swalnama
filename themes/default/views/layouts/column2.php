<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span9">
            <?php echo $content; ?>
    </div><!-- content -->

    <div class="span3">
        <div id="sidebar">
        <?php
                array_unshift($this->menu, array('label'=>'Operations', 'itemOptions'=>array('class'=>'nav-header'))); 
                $this->widget('bootstrap.widgets.TbMenu', array(
                        'type'=>'list',
                        'items'=>$this->menu,
                        'htmlOptions'=>array('class'=>'well well-small'),
                ));
        ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>