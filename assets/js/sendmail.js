$(window).on('load', function(){
    $(document).on('submit', '.myform', function (e) {
        // Add text 'loading...' right after clicking on the submit button.
        $('.output_message').text('Loading...');

        var form = $(this);
        $.ajax({
            url: "./sendmail.php",
            method: "post",
            data: new FormData($(".myform")[0]),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (result) {
                console.log(result);
                if (result.status == 'success') {
                    $('.output_message').text('Message Sent!');
                } else {
                    $('.output_message').text('Error Sending email!');
                }
            }
        });
    });
});