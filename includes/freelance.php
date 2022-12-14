<div class="timeline-title freelance-title">
    <i class="icon-home"></i>
    <h2>Freelance</h2>
</div>
<?php
$freelance = array(
    array("Iparki","2018"),
    array("Ilargi Berdea","2019 - 2020")
); ?>
<div class="timeline-content freelance-content">
    <?php foreach ($freelance as $item){ ?>
        <div class="content-text">
            <div class="content-title">
                <h3 class="line-title"><?=$item[0] ?></h3>
            </div>
            <div class="content-info">
                <h4><?=$item[1] ?></h4>
            </div>
        </div>
    <?php } ?>
</div>