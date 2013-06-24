<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_quetion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_quetion),array('view','id'=>$data->id_quetion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problem_question')); ?>:</b>
	<?php echo CHtml::encode($data->problem_question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problem_solving')); ?>:</b>
	<?php echo CHtml::encode($data->problem_solving); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('for_age')); ?>:</b>
	<?php echo CHtml::encode($data->for_age); ?>
	<br />


</div>