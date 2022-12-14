<div class="timeline-title freelance-title">
    <i class="icon-home"></i>
    <h2>Freelance</h2>
</div>
<div class="timeline-content freelance-content">
    <?php foreach ($freelance as $item){ ?>
        <div class="content-text">
            <div class="content-title">
                <p class="line-title"><?=$item[0] ?></p>
                <p><?=$item[1] ?></p>
            </div>
            <div class="content-info">
                <p><?=$item[2] ?></p>
            </div>
        </div>
    <?php } ?>
</div>