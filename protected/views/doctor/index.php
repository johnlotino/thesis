<?php
$this->breadcrumbs=array(
	'Doctors',
);

$this->menu=array(
	array('label'=>'Create Doctor', 'url'=>array('create')),
	array('label'=>'Manage Doctor', 'url'=>array('admin')),
);
?>

<h1>Doctors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
