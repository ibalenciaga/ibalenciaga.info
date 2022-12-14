<div class="timeline-title courses-title">
    <i class="icon-badge"></i>
    <h2>Cursos</h2>
</div>
<div class="timeline-content experience-content">
    <?php foreach ($cursos as $item){ ?>
        <div class="content-text">
            <div class="content-title">
                <h3 class="line-title"><?=$item[0] ?></h3>
            </div>
            <div class="content-info">
                <h4><?=$item[1]?></h4>
            </div>
        </div>
    <?php } ?>
</div>