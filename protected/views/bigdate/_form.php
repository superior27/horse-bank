<?php
/* @var $this BigdateController */
/* @var $model Bigdate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bigdate-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class ="alert">
		<h2>Dados do Cliente</h2>
	</div>
	</br>

	<div class="row-fluid">
		<div class="span3">
			<?php echo $form->labelEx($model,'name_client'); ?>
			<?php echo $form->textField($model,'name_client',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'name_client'); ?>
		</div>
		<div class="span3">
			<?php echo $form->labelEx($model,'nick_name'); ?>
			<?php echo $form->textField($model,'nick_name',array('size'=>60,'maxlength'=>256)); ?>
			<?php echo $form->error($model,'nick_name'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'cpf'); ?>
			<?php echo $form->textField($model,'cpf',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'cpf'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'phone'); ?>
			<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'phone'); ?>
		</div>
	</div>

</br>

	<div class="row-fluid">
		<div class="span3">
			<?php 
				echo $form->labelEx($model,'state_acronym'); 
				$select =array('empty');
		   	    echo $form->dropDownList($model, 'state_acronym',
			 		array('AC' => 'AC', 'AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA','CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA','MG'=>'MG',
			 			  'MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB','PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN','RO'=>'RO','RR'=>'RR','RS'=>'RS',
			 			   'SC'=>'SC','SE'=>'SE','SP'=>'SP','TO'=>'TO'),
			 		array('empty' => '(Escolha um Estado)'));
	 		?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'city'); ?>
			<?php echo $form->textField($model,'city',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'city'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'neighborhood'); ?>
			<?php echo $form->textField($model,'neighborhood',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'neighborhood'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'address'); ?>
			<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'address'); ?>
		</div>	

		
	</div>
</br>


	<div class="row-fluid">
		<div class="span3">
			<?php echo $form->labelEx($model,'complement'); ?>
			<?php echo $form->textField($model,'complement',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'complement'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'address_number'); ?>
			<?php echo $form->textField($model,'address_number',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'address_number'); ?>
		</div>

		
	</div>

</br>

	<div class ="alert">
		<h2>Informações Financeiras</h2>
	</div>

</br>
	<div class="row-fluid">
		<div class="span3">
			<?php echo $form->labelEx($model,'table'); ?>
			<?php echo $form->textField($model,'table',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'table'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'agreement'); ?>
			<?php echo $form->textField($model,'agreement',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'agreement'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'contract'); ?>
			<?php echo $form->textField($model,'contract',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'contract'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'broker'); ?>
			<?php echo $form->textField($model,'broker'); ?>
			<?php echo $form->error($model,'broker'); ?>
		</div>

		
	</div>

</br>

	<div class="row-fluid">

		<div class="span3">
			<?php echo $form->labelEx($model,'emission_date'); ?>
			<?php echo $form->dateField($model,'emission_date'); ?>
			<?php echo $form->error($model,'emission_date'); ?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'liberation_date'); ?>
			<?php echo $form->dateField($model,'liberation_date'); ?>
			<?php echo $form->error($model,'liberation_date'); ?>
		</div>

		<div class="span3">
			<?php 
			echo $form->labelEx($model,'term');
		 	$select =array('empty');
		    echo $form->dropDownList($model, 'term',
		 		array('6' => '6', '12'=>'12','18'=>'18','24'=>'24','36'=>'36',
		 			'48'=>'48','58'=>'58','59'=>'59','60'=>'60'),
		 		array('empty' => '(Defina o Prazo)'));
	 		?>
		</div>

		<div class="span3">
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'status'); ?>
		</div>

	
	</div>

</br>

	<div class="row-fluid">
			
		<div class="span3">
			<?php echo $form->labelEx($model,'value'); ?>
			<?php echo $form->textField($model,'value'); ?>
			<?php echo $form->error($model,'value'); ?>
		</div>
	
		<div class="span3">
			<?php 
			echo $form->labelEx($model,'bank');
		 	$select =array('empty');
		    echo $form->dropDownList($model, 'bank',
		 		array('Bradesco' => 'Bradesco', 'BMG'=>'BMG','BV'=>'BV','Mercantil'=>'Mercantil','Itau/BMG'=>'Itau/BMG','Intermedium'=>'Intermedium','outros'=>'outros'),
		 		array('empty' => '(Escolha um Banco)'));
	 		?>
		</div>
	</div>
</br>

	<div class="row-fluid">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Cadastrar',
            'size'=>'large',
        )); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->