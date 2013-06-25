<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div align="center">
<?php
    $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' => 'Hasil analisis e-lite klinik',
        'headerIcon' => 'icon-ok-sign',
        'htmlOptions' => array(
            'style' => 'max-width: 667px;margin-top: 7%;',
            'align' => 'left',
        ),
    )); ?>
    <div class="raw">
        <?php print $model->results; ?>
    </div>
    <div align="center"><?php print CHtml::link('Re-Test',$this->createUrl('index'),array(
        'class'=>'btn btn-primary btn-small',
    )); ?></div>
<?php $this->endWidget(); ?>
</div>
