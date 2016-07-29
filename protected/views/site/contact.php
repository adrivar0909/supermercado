<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<!doctype html>
<html lang="es">
<head>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
function initialize() {
  var myLatlng = new google.maps.LatLng(-12.1241765,-77.0281543); //coordenadas de ubicación
  var mapOptions = {
  zoom: 15, //zoom de tu mapa
  center: myLatlng, //centrar tu mapa
  scrollwheel: false, //si colocas true en vez de false el usuario podrá hacer scroll dentro del mapa
  draggable: true, //esta opción es la manito que aparece y es usado para desplazarse en el mapa
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  var contentString = '<img src="logo.png" width="200" style="display:block;margin:auto;"><p>aquí la dirección</p>';//imagen y dirección
  var infowindow = new google.maps.InfoWindow({content: contentString});
  var marker = new google.maps.Marker({
  position: myLatlng,
  animation:google.maps.Animation.DROP,
  icon: 'icono-mapa.png', //icono de mapa
  map: map
  });
  infowindow.open(map,marker);
  google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>


<?php endif; ?>