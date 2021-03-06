<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<h1>My Account - Password</h1>

<ul class="nav nav-tabs">
  <li>
    <a href="<?php echo Yii::app()->createUrl('me/profile'); ?>">Profile</a>
  </li>
  <li  class="active">
      <a href="<?php echo Yii::app()->createUrl('me/password'); ?>">Password</a>
  </li>
  <li>
      <a href="<?php echo Yii::app()->createUrl('me/role'); ?>">Role</a>
  </li>
</ul>

<?php 
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'passwordForm',
        'type'=>'vertical',
        'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
                'onsubmit'=>"return false"
    ),
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php if(Yii::app()->user->hasFlash('passChanged')): ?>
 
<div class="flash-success alert alert-success">
    <?php echo Yii::app()->user->getFlash('passChanged'); ?>
</div>
 
<?php endif; ?>

<?php if(Yii::app()->user->hasFlash('passChangeError')): ?>
 
<div class="alert alert-error">
    <?php echo Yii::app()->user->getFlash('passChangeError'); ?>
</div>
 
<?php endif; ?>

<div class="row" id="result">
<?php echo $form->errorSummary($new_model); ?>
</div>
 
<?php echo $form->passwordFieldRow($new_model, 'current_password', array('class'=>'span3')); ?>

<?php echo $form->passwordFieldRow($new_model, 'new_password', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($new_model, 'repeat_new_password', array('class'=>'span3')); ?>


<br />
<?php //echo $form->checkboxRow($model, 'checkbox'); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Save')); ?>


 
<?php $this->endWidget(); ?>
