<?php
$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctor', 'url'=>array('index')),
	array('label'=>'Create Doctor', 'url'=>array('create')),
	array('label'=>'View Doctor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Doctor', 'url'=>array('admin')),
);
?>

<h1>Update Doctor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>