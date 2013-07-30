<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/invite_people.js'); ?>
<div class='clear'></div>
<div class='row'>
    <div class='span12'>
        <h3 style='color: red;'>Click the button to invite people</h3> 
    </div>
</div>
<?php
foreach ($users as $user) {
    echo CHtml::button(
        $user->username, 
        array(
            'sender_id' => $this->current_user->id,
            'poll_id' => $poll->id,
            'class' => 'btn btn-info',
            'receiver_id' => $user->id,
        )
    );
    echo '&nbsp;';
}
?>
<hr style='color: #808080'>
<div class='row'>
    <div class='span12'>
        <a id='close-window' href='#'>Close</a>
    </div>
</div>