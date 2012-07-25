<?php
$this->breadcrumbs=array(
	'Doctor Patients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DoctorPatient', 'url'=>array('index')),
	array('label'=>'Manage DoctorPatient', 'url'=>array('admin')),
);
?>

<h1>Create DoctorPatient</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>