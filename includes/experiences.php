<div class="timeline-title experience-title">
    <i class="icon-briefcase"></i>
    <h2>Experiencia</h2>
</div>
<div class="timeline-content experience-content">
    <?php foreach ($experiencias as $key => $item){ ?>
        <div class="content-text">
            <div class="content-title" <?php echo "data-id='experience-$key'" ?>>
                <p class="line-title"><?=$item[1] ?></p>
                <p><?=$item[0] ?></p>
                <p><?=$item[2] ?></p>
            </div>
            <div class="content-info <?php echo "experience-$key" ?>">
                <p><?=$item[3] ?></p>
            </div>
        </div>
    <?php } ?>
</div>