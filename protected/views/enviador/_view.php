<?php
/* @var $this EnviadorController */
/* @var $data Enviador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEnviador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEnviador), array('view', 'id'=>$data->idEnviador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />


</div>