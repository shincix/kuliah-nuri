<?php
$this->breadcrumbs=array(
	'Resultsl'=>array('index'),
	$model->id_trial=>array('view','id'=>$model->id_trial),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Results','url'=>array('index')),
	array('label'=>'Create Results','url'=>array('create')),
	array('label'=>'View Results','url'=>array('view','id'=>$model->id_trial)),
	array('label'=>'Manage Results','url'=>array('admin')),
	);
	?>

	<h1>Update Results <?php echo $model->id_trial; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>