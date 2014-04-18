<?php
/* @var $this BigdateController */
/* @var $model Bigdate */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bigdate-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar</h1>

<p>
Você pode, opcionalmente, digitar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no início de cada um dos seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'id'=>'bigdate-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'name_client',
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
		
		
		array(
 	 	'class'=>'bootstrap.widgets.TbButtonColumn',
  		'htmlOptions'=>array('style'=>'width: 50px'),
 	),
	),
)); ?>
