<?php
/* @var $this BigdateController */
/* @var $model Bigdate */


?>
<h1>Atualizar <?php echo $model->name_client; ?></h1>

<?php $this->renderPartial('_form_admin', array('model'=>$model)); ?>