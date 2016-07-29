<?php
/* @var $this DetallepedidoController */
/* @var $model Detallepedido */

$this->breadcrumbs=array(
	'Detallepedidos'=>array('index'),
	$model->idDetalle=>array('view','id'=>$model->idDetalle),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detallepedido', 'url'=>array('index')),
	array('label'=>'Create Detallepedido', 'url'=>array('create')),
	array('label'=>'View Detallepedido', 'url'=>array('view', 'id'=>$model->idDetalle)),
	array('label'=>'Manage Detallepedido', 'url'=>array('admin')),
);
?>

<h1>Update Detallepedido <?php echo $model->idDetalle; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>