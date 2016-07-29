<?php
/* @var $this DetallepedidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detallepedidos',
);

$this->menu=array(
	array('label'=>'Create Detallepedido', 'url'=>array('create')),
	array('label'=>'Manage Detallepedido', 'url'=>array('admin')),
);
?>

<h1>Detallepedidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
