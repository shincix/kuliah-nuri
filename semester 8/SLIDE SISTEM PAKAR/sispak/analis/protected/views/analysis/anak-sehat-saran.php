<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//$model = TbQuestion::model()->getQuetion();
$problem = explode(',', substr(Yii::app()->session['result']['res'], 0, -1));
?>
<div>
    <b>Bunda <?php print Yii::app()->session['trial']->nama_ibu; ?></b>, kelihatanya <b><?php print Yii::app()->session['trial']->nama_anak; ?></b> Termasuk anak yang cukup sehat,<br/>
    <br />
    <p>untuk menjaga kesehatannya kami memiliki beberapa saran sebagai berikut, 
    <ul>
        <?php
        foreach ($problem as $probid) {
            $model = TbQuestion::model()->findByPk($probid);
            if ($model != NULL) {
                ?>
                <li><?php print $model->problem_solving ?></li>
    <?php }
} ?>
    </ul>
</p>
</div>
