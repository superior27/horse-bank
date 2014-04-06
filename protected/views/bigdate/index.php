<?php
/* @var $this BigdateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bigdates',
);

$this->menu=array(
	array('label'=>'Create Bigdate', 'url'=>array('create')),
	array('label'=>'Manage Bigdate', 'url'=>array('admin')),
);
?>

<h1>Bigdates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
