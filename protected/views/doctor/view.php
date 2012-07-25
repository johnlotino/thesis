<?php
$this->bootBreadcrumbs=array(
	'Doctors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Edit Doctor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Manage Doctor', 'url'=>array('admin'), 'visible' => Yii::app()->user->checkAccess('admin')),
);

$this->content_title = $model->lname . ', ' . $model->fname . ' ' . $model->mname;
?>

<?php $this->widget('bootstrap.widgets.BootDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'login_id',
		'fname',
		'mname',
		'lname',
		'special',
		'status',
		'history',
		'modify_id',
		'modify_time',
		'create_id',
		'create_time',	
	),
)); ?>
