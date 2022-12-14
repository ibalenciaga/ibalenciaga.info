<div class="timeline-title studies-title">
    <i class="icon-graduation"></i>
    <h2>Estudios</h2>
</div>
<div class="timeline-content studies-content">
    <?php foreach ($estudios as $item){ ?>
        <div class="content-text">
            <div class="content-title">
                <p class="line-title"><?=$item[0] ?></p>
                <p><?=$item[2] ?></p>
                <!--<p><?=$item[1] ?></p>-->
            </div>
        </div>
    <?php } ?>
</div>