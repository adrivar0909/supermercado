<?php
/* @var $this DetallepedidoController */
/* @var $data Detallepedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDetalle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDetalle), array('view', 'id'=>$data->idDetalle)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPedido')); ?>:</b>
	<?php echo CHtml::encode($data->idPedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::encode($data->idProducto); ?>
	<br />


</div>