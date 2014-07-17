<?php
/* @var $this BigdateController */
/* @var $model Bigdate */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'List Bigdate', 'url'=>array('index')),
	array('label'=>'Create Bigdate', 'url'=>array('create')),
	array('label'=>'View Bigdate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bigdate', 'url'=>array('admin')),
);
?>

<h1>Atualizar Informações <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>