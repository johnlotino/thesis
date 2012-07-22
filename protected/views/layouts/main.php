<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/myCss.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class = "container">
<div class = "row">
	<div class="span12">
	<?php $this->widget('bootstrap.widgets.BootNavbar', array(
		'fixed' => false,
		'collapse' => true,
		'brand' => Yii::app()->name,
		'brandUrl' => '#',
		'items' => array(
		array(
			'class' => 'bootstrap.widgets.BootMenu',
			'items' => array(
				array('label' => 'Home', 'url' => array('site/index')),
				array('label' => 'Patients', 'url' => '#'),
		)),
		array(
			'class' => 'bootstrap.widgets.BootMenu',
			'htmlOptions' => array('class' => 'pull-right'),
			'items' => 
			array(
				array('label' => $this->fullname, 'url' => 'doctor/' . $this->user_id, 'visible' => ($this->user_type == 'd')),
				array('label' => $this->fullname, 'url' => 'person/' . $this->user_id, 'visible' => $this->user_type == 'p'),
					array(
						'label' => 'Options', 
						'url' => '#',
						'items' => array(
						array(
							'label' => 'Logout', 
							'url' => array('site/logout'),
							
						),
					),
			))),
	)));?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	</div>
</div>
	<?php echo $content; ?>
<div class = "row">
	<div class = "span12">
		<div class = "footer">
		Copyright &copy; <?php echo date('Y'); ?> by Revitalize.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
		</div><!-- footer -->
	</div><!-- row -->
</div>
</div>
</body>
</html>