<?php
/* @var $this UserController */
/* @var $model User */


?>

<h1>Atualizar <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>