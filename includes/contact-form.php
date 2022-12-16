<h2>Contacto</h2>
<form id="contactForm" class="myform" action="../sendmail.php" method="post" enctype="text/plain">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre" required data-error="Introduce tu nombre">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Introduce tu email">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" placeholder="Asunto" id="msg_subject" class="form-control" name="asunto" required data-error="Introduce un asunto">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea class="form-control" name="mensaje" id="message" placeholder="Mensaje" rows="5" data-error="Introduce un mensaje" required></textarea>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </div>
            <div class="submit-button">
                <input type="submit" class="btn btn-common" id="sendmail" name="send"  value="Enviar mensaje"/>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <span class="output_message">
</form>