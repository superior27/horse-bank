<?php
/* @var $this BigdateController */
/* @var $model Bigdate */

$this->breadcrumbs=array(
	'Bigdates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bigdate', 'url'=>array('index')),
	array('label'=>'Create Bigdate', 'url'=>array('create')),
	array('label'=>'View Bigdate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bigdate', 'url'=>array('admin')),
);
?>

<h1>Update Bigdate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>