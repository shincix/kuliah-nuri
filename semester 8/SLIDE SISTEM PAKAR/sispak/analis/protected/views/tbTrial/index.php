<?php
$this->breadcrumbs=array(
	'Results',
);

$this->menu=array(
array('label'=>'Create Results','url'=>array('create')),
array('label'=>'Manage Results','url'=>array('admin')),
);
?>

<h1>Tb Trials</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
