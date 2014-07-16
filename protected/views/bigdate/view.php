<?php
/* @var $this BigdateController */
/* @var $model Bigdate */

$this->breadcrumbs=array(
	'Bigdates'=>array('index'),
	$model->id,
);



<h1>View Bigdate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name_client',
		'nick_name',
		'cpf',
		'phone',
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
		'bank',
		'address',
		'complement',
		'address_number',
		'city',
		'neighborhood',
		'state_acronym',
	),
)); ?>
