<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_trial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_trial),array('view','id'=>$data->id_trial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_anak')); ?>:</b>
	<?php echo CHtml::encode($data->nama_anak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ibu')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ibu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_rumah); ?>
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('no_handphone')); ?>:</b>
	<?php echo CHtml::encode($data->no_handphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('results')); ?>:</b>
	<?php echo CHtml::encode($data->results); ?>
	<br />-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	*/ ?>

</div>