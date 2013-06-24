<?php
/* @var $this TbTrialController */
/* @var $model TbTrial */

$this->breadcrumbs=array(
	'Tb Trials'=>array('index'),
	$model->id_trial,
);

$this->menu=array(
	array('label'=>'List TbTrial', 'url'=>array('index')),
	array('label'=>'Create TbTrial', 'url'=>array('create')),
	array('label'=>'Update TbTrial', 'url'=>array('update', 'id'=>$model->id_trial)),
	array('label'=>'Delete TbTrial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_trial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbTrial', 'url'=>array('admin')),
);
?>

<h1>View TbTrial #<?php echo $model->id_trial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_trial',
		'nama_anak',
		'tanggal_lahir',
		'nama_ibu',
		'alamat_rumah',
		'no_handphone',
		'results',
		'date_created',
	),
)); ?>
