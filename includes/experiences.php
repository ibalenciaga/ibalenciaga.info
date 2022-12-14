<div class="timeline-title experience-title">
    <i class="icon-briefcase"></i>
    <h2>Experiencia</h2>
</div>
<?php
$experiencias = array(
    array("Desarrollador Web","OARO","2021 - 2022"),
    array("Desarrollador Web","Lombok","2019 - 2020"),
    array("Desarrollador Web","Feel Free Rentals","2017 - 2018"),
    array("Desarrollador Web","Servicios Creativos Bostnan","2016 - 2017"),
    array("Administrador de Sistemas","ENTELGY","2012"),
    array("Desarrollador Aplicaciones Multiplataforma","Tecnipesa","2010"),
    array("Administrador de Sistemas","Ibermatica","2009"),
); ?>
<div class="timeline-content experience-content">
    <?php foreach ($experiencias as $item){ ?>
        <div class="content-text">
            <div class="content-title">
                <h3 class="line-title"><?=$item[0] ?></h3>
            </div>
            <div class="content-info">
                <h4><?=$item[1] ?> | <?=$item[2] ?></h4>
            </div>
        </div>
    <?php } ?>
</div>