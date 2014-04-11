<?php
/* @var $this BigdateController */
/* @var $model Bigdate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bigdate-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_client'); ?>
		<?php echo $form->textField($model,'name_client',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_client'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'table'); ?>
		<?php echo $form->textField($model,'table',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'table'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agreement'); ?>
		<?php echo $form->textField($model,'agreement',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'agreement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contract'); ?>
		<?php echo $form->textField($model,'contract',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contract'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emission_date'); ?>
		<?php echo $form->dateField($model,'emission_date'); ?>
		<?php echo $form->error($model,'emission_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'liberation_date'); ?>
		<?php echo $form->dateField($model,'liberation_date'); ?>
		<?php echo $form->error($model,'liberation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'term'); ?>
		<?php echo $form->textField($model,'term',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'term'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value'); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commission'); ?>
		<?php echo $form->textField($model,'commission'); ?>
		<?php echo $form->error($model,'commission'); ?>
	</div>

	<div class="">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'info',
            'label'=>'Cadastrar',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->