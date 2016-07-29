<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


        
        <div class="row">
		<?php echo $form->labelEx($model,'idCliente'); ?>		
                <?php echo $form->dropDownList($model,'idCliente', CHtml::listData(Cliente::model()->findAll(),'idCliente','nombre')); ?> 
		<?php echo $form->error($model,'idCliente'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'idEnviador'); ?>		
                <?php echo $form->dropDownList($model,'idEnviador', CHtml::listData(Enviador::model()->findAll(),'idEnviador','nombre')); ?> 
		<?php echo $form->error($model,'idEnviador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitud'); ?>
		<?php echo $form->textField($model,'latitud'); ?>
		<?php echo $form->error($model,'latitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitud'); ?>
		<?php echo $form->textField($model,'longitud'); ?>
		<?php echo $form->error($model,'longitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->