<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date_reg'); ?>
		<?php echo $form->textField($model,'date_reg'); ?>
		<?php echo $form->error($model,'date_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php echo $form->textField($model,'birthdate'); ?>
		<?php echo $form->error($model,'birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blood_type'); ?>
		<?php echo $form->textField($model,'blood_type',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'blood_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_addr'); ?>
		<?php echo $form->textField($model,'city_addr',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'city_addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province_addr'); ?>
		<?php echo $form->textField($model,'province_addr',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'province_addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr_zip'); ?>
		<?php echo $form->textField($model,'addr_zip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'addr_zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr_citytown_nr'); ?>
		<?php echo $form->textField($model,'addr_citytown_nr'); ?>
		<?php echo $form->error($model,'addr_citytown_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'citizenship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_phone'); ?>
		<?php echo $form->textField($model,'home_phone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'home_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office_phone'); ?>
		<?php echo $form->textField($model,'office_phone',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'office_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cellphone_1'); ?>
		<?php echo $form->textField($model,'cellphone_1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'cellphone_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'civil_status'); ?>
		<?php echo $form->textField($model,'civil_status',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'civil_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->textField($model,'photo'); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_filename'); ?>
		<?php echo $form->textField($model,'photo_filename',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'photo_filename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>60,'maxlength'=>125)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'death_date'); ?>
		<?php echo $form->textField($model,'death_date'); ?>
		<?php echo $form->error($model,'death_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'death_cause'); ?>
		<?php echo $form->textField($model,'death_cause',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'death_cause'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_update'); ?>
		<?php echo $form->textField($model,'date_update'); ?>
		<?php echo $form->error($model,'date_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history'); ?>
		<?php echo $form->textArea($model,'history',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'history'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modify_id'); ?>
		<?php echo $form->textField($model,'modify_id',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'modify_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modify_time'); ?>
		<?php echo $form->textField($model,'modify_time'); ?>
		<?php echo $form->error($model,'modify_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_id'); ?>
		<?php echo $form->textField($model,'create_id',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'create_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>
		<?php echo $form->textField($model,'login_id',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'login_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->