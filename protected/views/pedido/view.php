<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->idPedido,
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'Update Pedido', 'url'=>array('update', 'id'=>$model->idPedido)),
	array('label'=>'Delete Pedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPedido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>View Pedido #<?php echo $model->idPedido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPedido',
		'idCliente',
		'idEnviador',
		'latitud',
		'longitud',
		'fecha',
		'estado',
		'monto',
	),
)); ?>
