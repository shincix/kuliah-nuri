<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
    $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' => 'Tentang Kami',
        'headerIcon' => 'icon-home',
        'htmlOptions' => array(
            'style' => 'max-width: 667px;margin-top: 7%;',
            'align' => 'left',
        ),
    ));
    ?>
<style >
    li{
        list-style: none;
    }
</style>
<div>
    <h4>Tentang kami</h4>
    <ul>
        <li>
            Nama : Heri Setiyawan<br />
            Nim : 11121001<br/>
            email : herisetiyawan85@gmail.com<br/><br/>
        </li>
        <li>
            Nama : Dede Hendrik Mulyana<br />
            Nim : 11120670<br/>
        </li>
    </ul>
    
    <h4>Tujuan Program</h4>
    <ul>
        <li>
            Menyelesaikan tugas : Pembuatan program sistem pakar
        </li>
    </ul>
</div>
<?php $this->endWidget(); ?>
