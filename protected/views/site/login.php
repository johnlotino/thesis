<?php
Yii::app()->user->setFlash('info', 'Please fill out the following form with your login credentials:');
?>

<h1 class = "login"> E-Health Care Service </h1>

<div class = "myWell">
	<?php $this->widget('bootstrap.widgets.BootAlert'); ?>
	<div class = 'form'>
	<div class = 'row'>
		<div class = 'span12'>
		<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
			'id'=>'login-form',
			'type' => 'horizontal',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); 
		?>
		<?php echo $form->textFieldRow($model,'username'); ?>
		<?php echo $form->passwordFieldRow($model,'password'); ?>
		</div>
	</div>
		<div class = 'row'>
			<div class= 'span12'>
					<div class = 'span2'>
					<?php echo $form->checkBoxRow($model,'rememberMe'); ?>
					</div>
					<div class = 'span2 offset2'>
					<?php $this->widget('bootstrap.widgets.BootButton', array(
					'buttonType' => 'submit',
	    			'label'=>'Login',
	    			'icon' => 'ok',
	   				)); ?>
	   		</div>
   		</div>
   </div>
</div>
		<?php $this->endWidget(); ?>
</div>


