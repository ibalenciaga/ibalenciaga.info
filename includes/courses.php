<div class="timeline-title courses-title">
    <i class="icon-badge"></i>
    <h2>Cursos</h2>
</div>
<div class="timeline-content courses-content">
    <?php foreach ($cursos as $item){ ?>
        <div class="content-text">
            <div class="content-title">
                <p class="line-title"><?=$item[0] ?></p>
                <p><?=$item[1] ?></p>
            </div>
        </div>
    <?php } ?>
</div>