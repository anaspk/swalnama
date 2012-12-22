<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span7">
            <?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://placehold.it/770x400&text=First+thumbnail',
            'label'=>'First Thumbnail label',
            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
            ),
        array('image'=>'http://placehold.it/770x400&text=Second+thumbnail',
            'label'=>'Second Thumbnail label',
            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
            ),
        array('image'=>'http://placehold.it/770x400&text=Third+thumbnail',
            'label'=>'Third Thumbnail label',
            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>
        <?php echo $content; ?>
    </div><!-- content -->

    <div class="span5">
        
    </div>
</div>
<?php $this->endContent(); ?>