<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
<div align="center" style="margin-top: 5%;">
    <?php
    $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' => 'Private Access',
        'headerIcon' => 'icon-lock',
        'htmlOptions' => array(
            'style' => 'max-width: 245px;',
            'align' => 'left',
        ),
    ));
    ?>
    <div class="form">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="row buttons">
            <?php
            echo CHtml::submitButton('Login', array(
                'class' => 'btn btn-primary btn-small'
            ));
            ?>
        </div>

        <?php $this->endWidget(); ?>
    </div><!-- form -->
    <?php $this->endWidget(); ?>
</div>
