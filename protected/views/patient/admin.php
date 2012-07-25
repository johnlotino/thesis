<?php
$this->breadcrumbs=array(
	'Patients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Patient', 'url'=>array('index')),
	array('label'=>'Create Patient', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('patient-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Patients</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'patient-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date_reg',
		'fname',
		'mname',
		'lname',
		'birthdate',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
