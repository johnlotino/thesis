<?php
$this->breadcrumbs=array(
	'Doctor Patients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DoctorPatient', 'url'=>array('index')),
	array('label'=>'Create DoctorPatient', 'url'=>array('create')),
	array('label'=>'View DoctorPatient', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DoctorPatient', 'url'=>array('admin')),
);
?>

<h1>Update DoctorPatient <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>