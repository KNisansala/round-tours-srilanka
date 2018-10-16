$(document).ready(function () {
    jQuery("#txtFullName").blur(function () {
        validateEmpty("txtFullName", "spanFullName");
    });

    jQuery("#txtCountry").blur(function () {
        ValidateEmail("txtCountry", "spanCountry");
    });

    jQuery("#txtprofileimg").blur(function () {
        validateEmpty("txtprofileimg", "spanprofileimg");
    });

    jQuery("#captchacode").blur(function () {
        validateEmpty("captchacode", "capspan");
    });

    $('#btnSubmit').click(function (e) {
        e.preventDefault();
        if (!validate()) {
            return;
        }
        sendForm();
    });

    function validate() {
        if (
                validateEmpty("txtFullName", "spanFullName") &
                validateEmpty("txtCountry", "spanCountry") &
                validateEmpty("txtprofileimg", "spanprofileimg") &
                validateEmpty("captchacode", "capspan")

                )
        {
            return true;
        } else {
            return false;
        }
    }

    function sendForm() {

        var formData = new FormData($('#guestcomment')[0]);
 
        $.ajax({
            url: "post-and-get/ajax/create-guest-comment.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess)
            {
                swal({
                    title: "Alert",
                    text: "Your Post Submit Successfully .",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });

            },
            cache: false,
            contentType: false,
            processData: false
        });
    };
    function validateEmpty(field, validatorspan)
    {

        if (jQuery('#' + field).val().length != 0)
        {
            jQuery('#' + validatorspan).addClass("validated");
            jQuery('#' + validatorspan).removeClass("notvalidated");
            jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
            jQuery('#' + validatorspan).text("");

            return true;
        } else
        {
            jQuery('#' + validatorspan).addClass("notvalidated");
            jQuery('#' + validatorspan).removeClass("validated");
            jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
            jQuery('#' + validatorspan).text("This field can not be empty");

            return false;
        }
    }

});


