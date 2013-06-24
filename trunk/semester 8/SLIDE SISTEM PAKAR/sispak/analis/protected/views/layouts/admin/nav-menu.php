<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/include/menu-admin/menu.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/include/menu-admin/menu.js"></script>
<div id="menu">
    <ul class="menu">
        <li><a href="javascript:(0)"><span><i class="icon-home"></i> Dashboard</span></a></li>
        <li><a href="<?php print Yii::app()->createUrl('/tbQuestion/index'); ?>"><span><i class="icon-tasks"></i> Question</span></a></li>
        <li><a href="<?php print Yii::app()->createUrl('/tbTrial/index'); ?>"><span><i class="icon-tasks"></i> Result</span></a></li>
        <li class="last"><a href="<?php print Yii::app()->createUrl('/admin/logout'); ?>"><span><i class="icon-off"></i> Logout</span></a></li>
    </ul>
</div>
<!--<div id="menu">
    <ul class="menu">
        <li><a href="#" class="parent"><span>Home</span></a>
            <ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <ul>
                        <li><a href="#" class="parent"><span>Sub Item 1.1</span></a>
                            <ul>
                                <li><a href="#"><span>Sub Item 1.1.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.1.2</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
                        <li><a href="#"><span>Sub Item 1.3</span></a></li>
                        <li><a href="#"><span>Sub Item 1.4</span></a></li>
                        <li><a href="#"><span>Sub Item 1.5</span></a></li>
                        <li><a href="#"><span>Sub Item 1.6</span></a></li>
                        <li><a href="#" class="parent"><span>Sub Item 1.7</span></a>
                            <ul>
                                <li><a href="#"><span>Sub Item 1.7.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.7.2</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span>Sub Item 2</span></a></li>
                <li><a href="#"><span>Sub Item 3</span></a></li>
            </ul>
        </li>
        <li><a href="#" class="parent"><span>Product Info</span></a>
            <ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <ul>
                        <li><a href="#"><span>Sub Item 1.1</span></a></li>
                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
                    </ul>
                </li>
                <li><a href="#" class="parent"><span>Sub Item 2</span></a>
                    <ul>
                        <li><a href="#"><span>Sub Item 2.1</span></a></li>
                        <li><a href="#"><span>Sub Item 2.2</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span>Sub Item 3</span></a></li>
                <li><a href="#"><span>Sub Item 4</span></a></li>
                <li><a href="#"><span>Sub Item 5</span></a></li>
                <li><a href="#"><span>Sub Item 6</span></a></li>
                <li><a href="#"><span>Sub Item 7</span></a></li>
            </ul>
        </li>
        <li><a href="#"><span>Help</span></a></li>
        <li class="last"><a href="#"><span>Contacts</span></a></li>
    </ul>
</div>-->
<div> <a href="http://apycom.com/"></a></div>
