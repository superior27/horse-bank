<?php
/* @var $this BigdateController */
/* @var $model Bigdate */
/*
$this->breadcrumbs=array(
	'Cadastrar Cliente'=>array('index'),
	'Relatório',
);*/


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

<h1>Relatório Cliente</h1>

<p>
Você pode, opcionalmente, digitar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no início de cada um dos seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'id'=>'bigdate-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name_client',
		'nick_name',
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
		'commission',
		'bank',
		/*'address',
		'complement',
		'address_number',
		'city',
		'neighborhood',
		'state_acronym',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
  			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
