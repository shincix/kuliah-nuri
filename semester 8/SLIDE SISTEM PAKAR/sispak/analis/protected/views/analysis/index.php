<?php
/* @var $this AnalysisController */

$this->breadcrumbs = array(
    'Analysis',
);
?>
<div align="center">

    <?php
    $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' => 'Selamat datang di e-lite klinik',
        'headerIcon' => 'icon-ok-sign',
        'htmlOptions' => array(
            'style' => 'max-width: 667px;margin-top: 7%;',
            'align' => 'left',
        ),
    ));
    ?>
    <?php
    $this->renderPartial('_form', array(
        'model' => $model,
    ));
    ?>
<?php $this->endWidget(); ?>
</div>