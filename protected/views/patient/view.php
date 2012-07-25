<?php
$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Patient', 'url'=>array('index')),
	array('label'=>'Create Patient', 'url'=>array('create')),
	array('label'=>'Update Patient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patient', 'url'=>array('admin')),
);
?>

<h1>View Patient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_reg',
		'fname',
		'mname',
		'lname',
		'birthdate',
		'blood_type',
		'city_addr',
		'province_addr',
		'addr_zip',
		'addr_citytown_nr',
		'citizenship',
		'home_phone',
		'office_phone',
		'cellphone_1',
		'sex',
		'email',
		'civil_status',
		'photo',
		'photo_filename',
		'religion',
		'death_date',
		'death_cause',
		'date_update',
		'status',
		'history',
		'modify_id',
		'modify_time',
		'create_id',
		'create_time',
		'login_id',
	),
)); ?>
