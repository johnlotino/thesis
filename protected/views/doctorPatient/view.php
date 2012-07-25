<?php
$this->breadcrumbs=array(
	'Doctor Patients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DoctorPatient', 'url'=>array('index')),
	array('label'=>'Create DoctorPatient', 'url'=>array('create')),
	array('label'=>'Update DoctorPatient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DoctorPatient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DoctorPatient', 'url'=>array('admin')),
);
?>

<h1>View DoctorPatient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pid',
		'did',
	),
)); ?>
