<div class="timeline-title studies-title">
    <i class="icon-graduation"></i>
    <h2>Estudios</h2>
</div>
<div class="timeline-content studies-content">
    <?php foreach ($estudios as $item){ ?>
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