<?php
/* @var $this DetallepedidoController */
/* @var $model Detallepedido */

$this->breadcrumbs=array(
	'Detallepedidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detallepedido', 'url'=>array('index')),
	array('label'=>'Manage Detallepedido', 'url'=>array('admin')),
);
?>

<h1>Create Detallepedido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>