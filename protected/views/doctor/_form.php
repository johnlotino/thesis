<?php 
	$form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
		'id'=>'doctor-form',
		'type' => 'horizontal',
	));
	?>
	<fieldset>
		<legend>Doctor Information</legend>
		<?php echo $form->textFieldRow($model,'fname',array('size'=>45,'maxlength'=>45,)); ?>
		<?php echo $form->textFieldRow($model,'mname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->textFieldRow($model,'lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->textFieldRow($model,'special',array('size'=>45,'maxlength'=>45)); ?>
	</fieldset>

	<fieldset>
		<legend>Username and Password</legend>
		<?php echo $form->textFieldRow($user,'login_id',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->passwordFieldRow($user,'password',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->passwordFieldRow($user,'verifyPass',array('size'=>35,'maxlength'=>35)); ?>
	</fieldset>

	<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok white', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'reset', 'icon'=>'remove', 'label'=>'Reset')); ?>
	</div>	
	
<?php $this->endWidget(); ?>

