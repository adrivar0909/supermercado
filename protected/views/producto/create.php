<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<h1>Create Producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>