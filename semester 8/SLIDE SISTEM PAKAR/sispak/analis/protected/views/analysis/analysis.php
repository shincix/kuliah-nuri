<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$model = TbQuestion::model()->getQuetion();
?>

<div align="center">
    <?php
    $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' => 'Analysis e-lite klinik '.Yii::app()->session['resultinfo']['no'].'/'.Yii::app()->session['resultinfo']['total'],
        'headerIcon' => 'icon-ok-sign',
        'htmlOptions' => array(
            'style' => 'max-width: 667px;margin-top: 7%;',
            'align' => 'left',
        ),
    ));
    if ($model != NULL) {
        ?>
        <style>
            #answer input, label{
                display: inline-block;
                float: left;
                text-indent: 8px;
            }

            #answer input{
                margin-left: 32px;
            }


        </style>

        <div class="raw">
            <?php print CHtml::beginForm('', 'post'); ?>
            <div><?php print Yii::app()->session['resultinfo']['no']; ?>. <?php print $model->problem_question ?></div>
            <div><?php
                print CHtml::hiddenField('id_quetion', $model->id_quetion);
                print CHtml::radioButtonList('answer', '', array(
                            '1' => 'Yes',
                            '0' => 'No',
                                ), array(
                            'separator' => '<div class="clearfix"></div>',
                            'onchange' => 'this.form.submit()',
                ));
                ?></div>
        </div>
    <?php } else { ?>
        Tidak menemukan data di database
    <?php } ?>
    <?php $this->endWidget(); ?>
</div>
