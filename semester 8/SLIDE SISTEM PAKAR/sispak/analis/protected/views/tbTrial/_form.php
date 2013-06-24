<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'tb-trial-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'nama_anak', array('class' => 'span5', 'maxlength' => 200)); ?>

<?php echo $form->textFieldRow($model, 'tanggal_lahir', array('class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'umur', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nama_ibu', array('class' => 'span5', 'maxlength' => 200)); ?>

<?php echo $form->textAreaRow($model, 'alamat_rumah', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<?php echo $form->textFieldRow($model, 'no_handphone', array('class' => 'span5', 'maxlength' => 25)); ?>

<?php echo $form->textAreaRow($model, 'results', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textFieldRow($model, 'date_created', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
