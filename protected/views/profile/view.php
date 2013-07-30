<?php
/* @var $this ProfileController */
/* @var $model Profile */
?>
<script src='<?php echo Yii::app()->baseUrl; ?>/js/show_profile.js'></script>
<?php $this->widget('bootstrap.widgets.TbAlert'); ?>

<h1><?php echo $profile->name; ?>'s timeline</h1>

<?php
    if (Yii::app()->user->is_admin) {
        echo CHtml::link('Edit this profile',
            array('profile/update', 'id' => $profile->id),
            array('class' => 'btn btn-warning')
        );
    }
    echo '&nbsp;';
    echo CHtml::button('Show profile', array(
        'id' => 'show_btn',
        'class' => 'btn btn-primary',
    ));
?>
<div class="none"></div>
<div id="profile_info" hidden="hidden">
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $profile,
        'attributes' => array(
            'email',
            'name',
            'phone',
            'address',
            'employee_code',
            'position',
            'date_of_birth',
        ),
    ));
    ?>
</div>
<div id="activity">
    <?php

    foreach ($activities as $activity) {
        $this->renderPartial('_activity', array(
            'activity' => $activity,
            'profile' => $profile,
        ));
    }
    ?>
</div>
<?php $this->widget('ext.yiinfinite-scroll.YiinfiniteScroller', array(
    'contentSelector' => '#activity',
    'itemSelector' => 'div.content-item',
    'loadingText' => 'Loading...',
    'donetext' => 'This is the end...',
    'pages' => $pages,
)); ?>