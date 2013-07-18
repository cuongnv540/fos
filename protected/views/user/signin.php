<div style="height:70px"></div>
<h1> Sign In</h1>
<?php
$this->breadcrumbs = array(
    'User' => array('signin'),
    'Log in',
);
?>

<?php if (Yii::app()->user->hasFlash('sucessful')): ?>
    <div class="success alert">
        <?php echo Yii::app()->user->getFlash('sucessful'); ?>
    </div>
<?php endif; ?>
<?php if (Yii::app()->user->hasFlash('fail')): ?>
    <div class="danger alert">
        <?php echo Yii::app()->user->getFlash('fail'); ?>
    </div>
<?php endif; ?>

<form method='post'>
    <?php echo CHtml::errorSummary($form); ?>
    <div class="">
        <?php echo CHtml::activeTextField($form, 'username', array('class' => '', 'placeholder' => 'Username')); ?>
    </div>
    <div class="">
        <?php echo CHtml::activePasswordField($form, 'password', array('class' => '', 'placeholder' => 'Password')); ?>
    </div>
    <div style="height:20px"></div>
    <div class="" style="color: blue; font-size: 8px">
        <label>
            <?php echo CHtml::activeCheckBox($form, 'rememberMe'); ?>
            Log in automatically
        </label>
    </div>
    <div class=""><?php echo CHtml::link('Forget your password ?', array('user/forgetPassword')); ?></div>
    <div style="height:20px"></div>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','type' => 'primary', 'label'=>'Sign in')); ?>

</form>