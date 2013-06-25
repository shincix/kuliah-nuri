<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$model = TbQuestion::model()->getQuetion();
?>
<div>
    <b>Selamat Bunda <?php print Yii::app()->session['trial']->nama_ibu; ?></b>, karena <b><?php print Yii::app()->session['trial']->nama_anak; ?></b> Termasuk anak sehat idaman bunda,<br/>
    <br />
    <p>Tetapi kami punya sedikit tips untuk menjaga kesehatannya, Jika <?php print $model->problem_question; ?>, <?php print $model->problem_solving?></p>
</div>
