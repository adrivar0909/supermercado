<?php
/* @var $this DetallepedidoController */
/* @var $model Detallepedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDetalle'); ?>
		<?php echo $form->textField($model,'idDetalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPedido'); ?>
		<?php echo $form->textField($model,'idPedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProducto'); ?>
		<?php echo $form->textField($model,'idProducto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->