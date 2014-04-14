<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>' '.CHtml::encode('Bem-Vindo'),
)); ?>
<?php $this->endWidget(); ?>
<!-- Docs page layout -->

  
 <!-- <div class="row-fluid div1" >
 <div class="span4"><p><h1>Bem-Vindo</h1></p></div>
  <div class="offset4 span4"><img src = "images/vidal.png" /></div>
  </div> -->


<!--<center>
		<img src="images/vidal.png">
	</center> -->
<!--
<p>Congratulations! You have successfully created your Yii application.</p>


<p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
-->
