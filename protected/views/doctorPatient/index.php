<?php
$this->breadcrumbs=array(
	'Doctor Patients',
);

$this->menu=array(
	array('label'=>'Create DoctorPatient', 'url'=>array('create')),
	array('label'=>'Manage DoctorPatient', 'url'=>array('admin')),
);
?>

<h1>Doctor Patients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
