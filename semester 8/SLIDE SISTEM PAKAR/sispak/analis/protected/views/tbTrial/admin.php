<?php
$this->breadcrumbs = array(
    'Resultsl' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Results', 'url' => array('index')),
    array('label' => 'Create Results', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('tb-trial-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Tb Trials</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'tb-trial-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_trial',
        'nama_anak',
        'umur',
//		'tanggal_lahir',
//		'nama_ibu',
//		'alamat_rumah',
//		'no_handphone',
        /*
          'results',
          'date_created',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
