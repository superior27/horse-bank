<?php
/* @var $this BigdateController */
/* @var $model Bigdate */

?>

<h1>Cliente <?php echo $model->name_client; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name_client',
		'cpf',
		'table',
		'agreement',
		'contract',
		'emission_date',
		'liberation_date',
		'term',
		'status',
		'value',
		'commission',
		'commission_value',
	),
)); ?>
