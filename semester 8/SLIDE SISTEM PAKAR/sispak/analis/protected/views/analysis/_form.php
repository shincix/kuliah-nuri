<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'tb-trial-form',
    'type' => 'horizontal',
//    'htmlOptions'=>array('class'=>'span10'),
    'enableAjaxValidation' => TRUE,
    'clientOptions' => array(
        'validateOnSubmit' => TRUE,
    ),
        ));
?>

<?php echo $form->textFieldRow($model, 'nama_anak', array('class' => 'span3', 'maxlength' => 200)); ?>

<?php
echo $form->datepickerRow($model, 'tanggal_lahir', array(
    'hint' => '<i>contoh: 16-08-1999</i>',
    'prepend' => '<i class="icon-calendar"></i>',
    'options' => array(
        'format' => 'dd-mm-yyyy',
    ),
));
?>

<?php echo $form->textFieldRow($model, 'nama_ibu', array('class' => 'span3', 'maxlength' => 200)); ?>

<?php echo $form->textAreaRow($model, 'alamat_rumah', array('rows' => 6, 'cols' => 50, 'class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'no_handphone', array('class' => 'span3', 'maxlength' => 25)); ?>


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
