<div class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-experience-tab" data-toggle="tab" href="#nav-experience" role="tab" aria-controls="nav-experience" aria-selected="true">
                <div class="timeline-title experience-title">
                    <i class="icon-briefcase"></i>
                    <h2>Experiencia</h2>
                </div></a>
            <a class="nav-item nav-link" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-controls="nav-courses" aria-selected="false">
                <div class="timeline-title courses-title">
                    <i class="icon-badge"></i>
                    <h2>Cursos</h2>
                </div>
            </a>
            <a class="nav-item nav-link" id="nav-studies-tab" data-toggle="tab" href="#nav-studies" role="tab" aria-controls="nav-studies" aria-selected="false">
                <div class="timeline-title studies-title">
                    <i class="icon-graduation"></i>
                    <h2>Estudios</h2>
                </div>
            </a>
            <a class="nav-item nav-link" id="nav-freelance-tab" data-toggle="tab" href="#nav-freelance" role="tab" aria-controls="nav-freelance" aria-selected="false">
                <div class="timeline-title freelance-title">
                    <i class="icon-home"></i>
                    <h2>Freelance</h2>
                </div>
            </a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">
            <?php require_once "includes/experiences.php"?>
        </div>
        <div class="tab-pane fade" id="nav-courses" role="tabpanel" aria-labelledby="nav-courses-tab">
            <?php require_once "includes/courses.php"?>
        </div>
        <div class="tab-pane fade" id="nav-studies" role="tabpanel" aria-labelledby="nav-studies-tab">
            <?php require_once "includes/studies.php"?>
        </div>
        <div class="tab-pane fade" id="nav-freelance" role="tabpanel" aria-labelledby="nav-freelance-tab">
            <?php require_once "includes/freelance.php"?>
        </div>
    </div>
</div>