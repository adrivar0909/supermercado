<?php
/* @var $this DetallepedidoController */
/* @var $model Detallepedido */

$this->breadcrumbs=array(
	'Detallepedidos'=>array('index'),
	$model->idDetalle,
);

$this->menu=array(
	array('label'=>'List Detallepedido', 'url'=>array('index')),
	array('label'=>'Create Detallepedido', 'url'=>array('create')),
	array('label'=>'Update Detallepedido', 'url'=>array('update', 'id'=>$model->idDetalle)),
	array('label'=>'Delete Detallepedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDetalle),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detallepedido', 'url'=>array('admin')),
);
?>

<h1>View Detallepedido #<?php echo $model->idDetalle; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDetalle',
		'idPedido',
		'idProducto',
	),
)); ?>
