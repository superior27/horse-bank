<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>

<h1>Login</h1>

<!--<p>Please fill out the following form with your login credentials:</p>-->

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Os Campos com <span class="required">*</span> são obrigatórios.</p>
	<div class="row-fluid">
		<div class="span3">
	<?php echo $form->textFieldRow($model,'username'); ?>

	<?php echo $form->passwordFieldRow($model,'password',array(
        
    )); ?>
</div>
</div>

	<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

	<div class="row-fluid">
		<div class="offset1 span3">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Entrar',
            'size'=>'large',
        )); ?>
    </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
