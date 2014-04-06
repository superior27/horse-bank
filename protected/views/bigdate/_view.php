<?php
/* @var $this BigdateController */
/* @var $data Bigdate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_client')); ?>:</b>
	<?php echo CHtml::encode($data->name_client); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('table')); ?>:</b>
	<?php echo CHtml::encode($data->table); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agreement')); ?>:</b>
	<?php echo CHtml::encode($data->agreement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contract')); ?>:</b>
	<?php echo CHtml::encode($data->contract); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emission_date')); ?>:</b>
	<?php echo CHtml::encode($data->emission_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('liberation_date')); ?>:</b>
	<?php echo CHtml::encode($data->liberation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('term')); ?>:</b>
	<?php echo CHtml::encode($data->term); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commission')); ?>:</b>
	<?php echo CHtml::encode($data->commission); ?>
	<br />

	*/ ?>

</div>