<?php
/* @var $this TbQuestionController */
/* @var $model TbQuestion */

$this->breadcrumbs=array(
	'Tb Questions'=>array('index'),
	$model->id_quetion,
);

$this->menu=array(
	array('label'=>'List TbQuestion', 'url'=>array('index')),
	array('label'=>'Create TbQuestion', 'url'=>array('create')),
	array('label'=>'Update TbQuestion', 'url'=>array('update', 'id'=>$model->id_quetion)),
	array('label'=>'Delete TbQuestion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_quetion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbQuestion', 'url'=>array('admin')),
);
?>

<h1>View TbQuestion #<?php echo $model->id_quetion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_quetion',
		'problem_question',
		'problem_solving',
	),
)); ?>
