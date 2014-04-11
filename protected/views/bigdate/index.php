<?php
/* @var $this BigdateController */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>Administrar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
