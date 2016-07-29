<?php
/* @var $this EnviadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enviadors',
);

$this->menu=array(
	array('label'=>'Create Enviador', 'url'=>array('create')),
	array('label'=>'Manage Enviador', 'url'=>array('admin')),
);
?>

<h1>Enviadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
