<h2 class="section-title wow flipInX" data-wow-delay="0.4s">Conocimientos</h2>
<div class="container services-item">
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <!-- Services item -->
        <?php foreach ($conocimientos as $conocimiento){ ?>
            <div class="icon fadeInDown" data-wow-delay="0.5s">
                <img class="img-fluid" src="assets/img/conocimientos/<?=$conocimiento?>.png" alt="Conociemientos de <?=$conocimiento?>" title="Conociemientos de <?=$conocimiento?>">
            </div>
        <?php } ?>

</div>