<?php
/* @var $this EnviadorController */
/* @var $model Enviador */

$this->breadcrumbs=array(
	'Enviadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Enviador', 'url'=>array('index')),
	array('label'=>'Manage Enviador', 'url'=>array('admin')),
);
?>

<h1>Create Enviador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>