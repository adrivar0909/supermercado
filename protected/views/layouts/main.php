<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">


        <?php echo Yii::app()->bootstrap->registerAllCss();
            echo Yii::app()->bootstrap->registerCoreScripts();
        ?>
        
        
        
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--<title><?php echo CHtml::dropDownList($this->pageTitle,'asd',Yii::app()->db->createCommand('SELECT nombre FROM categoria')->queryAll(),array('prompt'=>'Tablas')); ?></title>-->
</head>

<body>


	<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toogle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="brand" href="<?php echo  Yii::app()->homeUrl; ?>">
                    <?php echo CHtml::encode(Yii::app()->name); ?>
                    </a>
                    <div class="nav-collapse collapse">
            
		<?php $this->widget('zii.widgets.CMenu',array(
                    
                     'activeCssClass'=>'active',
                     'activateParents'=>true,
                    
                    
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index'),
                                    
//      'linkOptions'=>array('id'=>'menuCompany'),
//      'itemOptions'=>array('id'=>'itemCompany'),
//      'items'=>array(
//        array('label'=>'Our Mission', 'url'=>array('/company/index')),
//        array('label'=>'About Us', 'url'=>array('/company/aboutUs')),
//        array('label'=>'Careers', 'url'=>array('/company/careers')),
//        array('label'=>'Contact Us', 'url'=>array('/company/contactUs')),
//        array('label'=>'Store Locator', 'url'=>array('/company/storeLocator')),)  
                                    ),

                           // array('label'=>'Panel de control', 'url'=>array('/site/panel'), 'visible'=>!Yii::app()->user->isGuest),
                            
                            array('label'=>'Pedido', 'url'=>array('/pedido/admin'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Detalle', 'url'=>array('/detallepedido/admin'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Clientes', 'url'=>array('/cliente/admin'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Categoria', 'url'=>array('/categoria/admin'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Producto', 'url'=>array('/producto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Envio', 'url'=>array('/enviador/admin'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Sobre nosotros', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
		)); ?>
                     </div>   
                </div>
            </div>    
	</div><!-- mainmenu -->
        
        <div class="container">
            <div class="page-header">
                <br /><br />
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                </div>
                
	<?php echo $content; ?>



	<div class="footer text-center">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
        </div>


</body>
</html>
