<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPro), array('view', 'id'=>$data->idPro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCat')); ?>:</b>

	<?php echo CHtml::encode($data->idCat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>