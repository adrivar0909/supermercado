<?php
/* @var $this EnviadorController */
/* @var $model Enviador */

$this->breadcrumbs=array(
	'Enviadors'=>array('index'),
	$model->idEnviador=>array('view','id'=>$model->idEnviador),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enviador', 'url'=>array('index')),
	array('label'=>'Create Enviador', 'url'=>array('create')),
	array('label'=>'View Enviador', 'url'=>array('view', 'id'=>$model->idEnviador)),
	array('label'=>'Manage Enviador', 'url'=>array('admin')),
);
?>

<h1>Update Enviador <?php echo $model->idEnviador; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>