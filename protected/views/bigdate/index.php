<?php
/* @var $this BigdateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bigdates',
);


<h1>Bigdates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
