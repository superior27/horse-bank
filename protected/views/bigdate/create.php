<?php
/* @var $this BigdateController */
/* @var $model Bigdate */

$this->breadcrumbs=array(
	'Bigdates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bigdate', 'url'=>array('index')),
	array('label'=>'Manage Bigdate', 'url'=>array('admin')),
);
?>

<h1>Create Bigdate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>