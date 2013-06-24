<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id_trial',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nama_anak',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->textFieldRow($model,'tanggal_lahir',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nama_ibu',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->textAreaRow($model,'alamat_rumah',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'no_handphone',array('class'=>'span5','maxlength'=>25)); ?>

		<?php echo $form->textAreaRow($model,'results',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
