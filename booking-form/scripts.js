
//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function () {

    jQuery("#txtFullName").blur(function () {
        validateEmpty("txtFullName", "spanFullName");
    });
    jQuery("#txtEmail").blur(function () {
        ValidateEmail("txtEmail", "spanEmail");
    });
    jQuery("#txtArrival").blur(function () {
        validateEmpty("txtArrival", "spanArrival");
    });
    jQuery("#txtDepart").blur(function () {
        validateEmpty("txtDepart", "spanDepart");
    });
    jQuery("#txtPackage").blur(function () {
        validateEmpty("txtPackage", "spanPackage");
    });
    jQuery("#txtNoOfAdults").blur(function () {
        validateEmpty("txtNoOfAdults", "spanNoOfAdults");
    });
    jQuery("#txtNoOfChildren").blur(function () {
        validateEmpty("txtNoOfChildren", "spanNoOfChildren");
    });
    jQuery("#captchacode").blur(function () {
        validateEmpty("captchacode", "capspan");
    });
    jQuery("#btnSubmit").bind('click', function () {
        
        if (!validate()) {
            return;
        }

        jQuery("#checking").show();
        sendForm();
    });

    jQuery('.input-validater').keypress(function (e) {
        if (e.keyCode == 13) {

            if (!validate()) {
                return;
            }
            jQuery("#checking").show();
            sendForm();
        }
    });

});


//--------------------------------------------------function to check button click --------------------------------------------------

function validate() {
    
    if (
            validateEmpty("txtFullName", "spanFullName") &
            ValidateEmail("txtEmail", "spanEmail") &
            validateEmpty("txtArrival", "spanArrival") &
            validateEmpty("txtDepart", "spanDepart") &
            validateEmpty("txtPackage", "spanPackage") &
            validateEmpty("txtNoOfAdults", "spanNoOfAdults") &
            validateEmpty("txtNoOfChildren", "spanNoOfChildren") &
            validateEmpty("captchacode", "capspan")

            )
    {
        
        return true;
    } else {
        
        return false;
    }
}



//--------------------------------------------------Ajax call --------------------------------------------------


function sendForm() {

    jQuery.ajax({
        url: "booking-form/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            full_name: jQuery('#txtFullName').val(),
            email: jQuery('#txtEmail').val(),
            arrival_time: jQuery('#txtArrival').val(),
            departure_time: jQuery('#txtDepart').val(),
            tour_package: jQuery('#txtPackage').val(),
            no_of_adults: jQuery('#txtNoOfAdults').val(),
            no_of_children: jQuery('#txtNoOfChildren').val(),
            message: jQuery('#txtMessage').val(),
            captchacode: jQuery('#captchacode').val()

        },
        success: function (html) {
            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#txtFullName').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txtArrival').val("");
                jQuery('#txtDepartT').val("");
                jQuery('#txtPackage').val("");
                jQuery('#txtNoOfAdults').val("");
                jQuery('#txtNoOfChildren').val("");
                jQuery('#txtMessage').val("");
                jQuery('#captchacode').val("");

            }
        }
    });
}

//-----------------   function to check empty -------------------------------------------------------

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

//--------------------------------------------------function to check email--------------------------------------------------

function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");
        return false;
    }
}
