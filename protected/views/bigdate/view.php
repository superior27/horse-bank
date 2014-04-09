<?php
/* @var $this BigdateController */
/* @var $model Bigdate */



$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Cadastrar', 'url'=>array('create')),
	array('label'=>'Atualizar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bigdate', 'url'=>array('admin')),
);
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
	),
)); ?>
