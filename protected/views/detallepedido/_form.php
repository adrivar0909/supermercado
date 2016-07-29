<?php
/* @var $this DetallepedidoController */
/* @var $model Detallepedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detallepedido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idDetalle'); ?>
		<?php echo $form->textField($model,'idDetalle'); ?>
		<?php echo $form->error($model,'idDetalle'); ?>
	</div>


        <div class="row">
		<?php echo $form->labelEx($model,'idPedido'); ?>		
                <?php echo $form->dropDownList($model,'idPedido', CHtml::listData(Cliente::model()->findAll(),'idPedido','idPedido')); ?> 
		<?php echo $form->error($model,'idPedido'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'idProducto'); ?>
		<?php echo $form->textField($model,'idProducto'); ?>
		<?php echo $form->error($model,'idProducto'); ?>
	</div>
        -->
        <div class="row">
		<?php echo $form->labelEx($model,'idProducto'); ?>		
                <?php echo $form->dropDownList($model,'idProducto', CHtml::listData(Cliente::model()->findAll(),'idPro','descripcion')); ?> 
		<?php echo $form->error($model,'idProducto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->