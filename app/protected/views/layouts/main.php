<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="../jquery-ui/jquery-ui.css">
        <link rel="stylesheet" href="../style.css">
        <?php
        Yii::app()->clientScript->registerScriptFile("../jquery.js");
        Yii::app()->clientScript->registerScriptFile("../jquery-ui/jquery-ui.js");
        Yii::app()->clientScript->registerScriptFile("../bootstrap/js/bootstrap.js");
        Yii::app()->clientScript->registerScriptFile("../script.js");
        ?>
    </head>
    <body>
        <div class="nav navbar-inverse" style="color: #f9f8f7; padding: 10px; font-size: 18px;">
            <i class="glyphicon glyphicon-flag"></i>
            <?php echo CHtml::encode($this->pageTitle); ?>            
        </div>
        <div class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-star"></i>
                        บันทึกประจำวัน
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> บันทึกการติดต่อนัดหมาย</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> ตารางนัดหมาย</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> ตารางงานประจำวัน</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> จัดการข้อมูลลูกค้า</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        รายงาน
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> รายงานจำนวนลูกค้าแยกตามเดือน</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> รายงานการนัดหมายลูกค้า</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> รายงานข้อมูลการติดต่อลูกค้า แยกตามคน</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> รายงานการนัดหมายแยกตามสถานะ</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> รายงานคำชม, ข้อแนะนำ จากลูกค้า</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-cog"></i>
                        ตั้งค่า
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#" onclick="return configGroupCustomer()"><i class="glyphicon glyphicon-cog"></i> ประเภทลูกค้า</a></li>
                        <li><a href="#" onclick="return configVisitType()"><i class="glyphicon glyphicon-cog"></i> ประเภทการติดต่อ</a></li>
                        <li><a href="#" onclick="return configEmployee()"><i class="glyphicon glyphicon-cog"></i> พนักงาน</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-question-sign"></i>
                        ช่วยเหลือ
                    </a>
                </li>                
            </ul>
        </div>
        <div style="padding-left: 10px; padding-right: 10px;">
            <div id="content"></div>
        </div>
    </body>
</html>