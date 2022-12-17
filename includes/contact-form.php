<h2>Contacto</h2>
<span class="output_message">
<form id="contactForm" class="myform" action="../helper/sendmail.php" method="post" enctype="text/plain">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required data-error="Introduce tu nombre">
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
                <input type="button" onclick="return formSubmit();" class="btn btn-common" id="sendmail" name="submit"  value="Enviar mensaje">
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</form>

<script>
    function formSubmit(){
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var msg_subject = document.getElementById("msg_subject").value;
        var message = document.getElementById("message").value;

        var dataString = 'name='+ name + '&email=' + email + '&msg_subject=' + msg_subject + '&message=' + message ;
        $.ajax({
            url: "../../helper/sendmail.php",
            data: dataString,
            type: "POST",
            success: function(data){
                if(data ==="success"){
                    $('.output_message').addClass("success");
                    $('.output_message').html("Mensaje enviado correctamente");
                }else{
                    $('.output_message').addClass("error");
                    $('.output_message').html("El mensaje no se ha podido enviar.");
                }
            },
            error: function (){}
        });





    };
</script>