<?php
/* @var $this EnviadorController */
/* @var $model Enviador */

$this->breadcrumbs=array(
	'Enviadors'=>array('index'),
	$model->idEnviador,
);

$this->menu=array(
	array('label'=>'List Enviador', 'url'=>array('index')),
	array('label'=>'Create Enviador', 'url'=>array('create')),
	array('label'=>'Update Enviador', 'url'=>array('update', 'id'=>$model->idEnviador)),
	array('label'=>'Delete Enviador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEnviador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enviador', 'url'=>array('admin')),
);
?>

<h1>View Enviador #<?php echo $model->idEnviador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEnviador',
		'nombre',
		'direccion',
		'fechaNacimiento',
	),
)); ?>
