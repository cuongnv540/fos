<?php
$this->breadcrumbs = array(
    'User' => array('signin'),
    'Log in',
);
?>
<div class="center_form">
    <div class="row text-center">
        <h1> Sign In</h1>
    </div>
    <div style="height:50px"></div>
    <form method='post'>
        <?php echo CHtml::errorSummary($form); ?>
        <div class="row">
            <?php echo CHtml::activeTextField($form, 'username', array('class' => 'span6 offset3', 
                'placeholder' => 'Username')); ?>
        </div>
        <div class="row">
            <?php echo CHtml::activePasswordField($form, 'password', array('class' => 'span6 offset3', 
                'placeholder' => 'Password')); ?>
        </div>
        <div style="height:20px"></div>
        <div class="row" style="color: blue; font-size: 8px">
            <label class="span6 offset3">
                <?php echo CHtml::activeCheckBox($form, 'rememberMe'); ?>
                Log in automatically
            </label>
        </div>
        <div class="row">
            <div class="span6 offset3">
                <?php echo CHtml::link('Forget your password ?', array('user/forgetPassword')); ?>
            </div>
        </div>
        <div style="height:20px"></div>
        <div class="row"><?php echo CHtml::submitButton('Sign in', array('class' => 'span2 offset5')); ?></div>
    </form>
</div>