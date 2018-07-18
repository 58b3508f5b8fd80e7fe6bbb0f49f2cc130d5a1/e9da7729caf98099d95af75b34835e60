// JavaScript contact form Document
$(document).ready(function () {
    $('form#contact-form').submit(function () {
        $('form#contact-form .error').remove();
        var hasError = false;
        $('.requiredField').each(function () {
            if (jQuery.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<span class="error">You forgot to enter your ' + labelText + '</span>');
                $(this).addClass('inputError');
                hasError = true;
            } else if ($(this).hasClass('email')) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test(jQuery.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<span class="error">You entered an invalid ' + labelText + '</span>');
                    $(this).addClass('inputError');
                    hasError = true;
                }
            }
        });
        if (!hasError) {
            $('form#contact-form input.submit').fadeOut('normal', function () {
                $(this).parent().append('');
            });

            $('#submitEmail').attr('class','icon fa fa-spinner fa-spin');
            $.ajax({
                url: "/contact",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('form#contact-form').slideUp("fast", function () {
                        $(this).before('<div class="alert alert-success"><h3 class="text-center text-success">Thanks for contacting us, your  message has been sent successfully.</h3></div>');
                        $("#loader").hide();
                    })
                    alert(data.message);
                    $('#submitEmail').attr('class','icon fa fa-send');
                },
                error: function(){
                    alert('Oops! An error occurred.\nPlease try again.')
                    $('#submitEmail').attr('class','icon fa fa-send');
                }
            });

            return false;
        }

    });
});