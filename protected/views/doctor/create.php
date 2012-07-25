<?php
$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	'Create',
);
$this->content_title = 'Create New Doctor';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'user' => $user)); ?>