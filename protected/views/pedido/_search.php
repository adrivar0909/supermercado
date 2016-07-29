<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPedido'); ?>
		<?php echo $form->textField($model,'idPedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCliente'); ?>
		<?php echo $form->textField($model,'idCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEnviador'); ?>
		<?php echo $form->textField($model,'idEnviador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latitud'); ?>
		<?php echo $form->textField($model,'latitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'longitud'); ?>
		<?php echo $form->textField($model,'longitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->