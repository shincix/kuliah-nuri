<?php
$this->breadcrumbs=array(
	'Resultsl'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Results','url'=>array('index')),
array('label'=>'Manage Results','url'=>array('admin')),
);
?>

<h1>Create Results</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>