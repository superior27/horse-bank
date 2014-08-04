<?php
/* @var $this BigdateController */
/* @var $model Bigdate */
/*
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);*/

?>

<h1>Detalhes #<?php echo $model->name_client; ?></h1>

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
		'broker',
		'emission_date',
		'liberation_date',
		'term',
		'status',
		'value',		
		'bank',
		'address',
		'complement',
		'address_number',
		'city',
		'neighborhood',
		'state_acronym',
	),
)); ?>
