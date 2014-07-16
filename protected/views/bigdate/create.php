<?php
/* @var $this BigdateController */
/* @var $model Bigdate */

$this->breadcrumbs=array(
	'Cadastrar Cliente'=>array('index'),
	'Cadastrar',
);

?>

<h1>Cadastrar Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>