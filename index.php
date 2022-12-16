<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "layout/head.php"?>
</head>

<body>
<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <?php require_once "layout/header.php"?>
</header>
<!-- Header Area wrapper End -->
<!--Cookies start -->
<?php require_once "includes/cookies.php"?>
<!--Cookies end -->
<!-- About Section Start -->
<section id="about" class="section-padding">
    <?php require_once "includes/about.php"?>
</section>
<!-- About Section End -->
<!-- Services Section Start -->
<?php
    require_once "includes/datos.php"
?>

<section id="services" class="services section-padding">
    <?php require_once "includes/services.php"?>
</section>
<!-- Services Section End -->
<!-- Resume Section Start -->
<section id="resume" class="section-padding timeline">
    <?php require_once "includes/timeline.php"?>
</section>
<!-- Resume Section End -->

<!-- Contact Section Start -->
<section id="contact" class="section-padding contact">
    <?php require_once "includes/contact.php"?>
</section>
<!-- Contact Section End -->
<!-- Footer Section Start -->
<footer class="footer-area section-padding">
    <?php require_once "layout/footer.php"?>
</footer>
<!-- Footer Section End -->
<!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
</a>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.6.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/sendmail.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/cookies.js"></script>
<script src='https://www.google.com/recaptcha/api.js?render=6LeeQd4UAAAAAI8s7UjxycarhGg_oGKOj8dmo1cR'>
</script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LeeQd4UAAAAAI8s7UjxycarhGg_oGKOj8dmo1cR', {
            action: 'formulario'
        })
            .then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
    });
</script>
</body>

</html>