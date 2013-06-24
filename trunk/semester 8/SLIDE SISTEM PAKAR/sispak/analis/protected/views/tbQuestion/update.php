<?php
$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->id_quetion=>array('view','id'=>$model->id_quetion),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Question','url'=>array('index')),
	array('label'=>'Create Question','url'=>array('create')),
	array('label'=>'View Question','url'=>array('view','id'=>$model->id_quetion)),
	array('label'=>'Manage Question','url'=>array('admin')),
	);
	?>

	<h1>Update Question <?php echo $model->id_quetion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>