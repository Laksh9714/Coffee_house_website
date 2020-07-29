$(document).ready(function() {
    $("<span id = 'fusrname'></span>").insertAfter("#fname");
    $("<span id = 'lusrname'></span>").insertAfter("#lname");
    $("<span id = 'pwd'></span>").insertAfter("#password");
    $("<span id = 'mail_span'></span>").insertAfter("#email");
    $("<span id = 'contact'></span>").insertAfter("#phone");
    $("<span id = 'address'></span>").insertAfter("#street");
    $("<span id = 'zcode'></span>").insertAfter("#zipcode");

    $("#fname").focus(function () {
        $("#fusrname").removeClass("ok").removeClass("error").addClass("info").text("Please enter first name");
    });

    $("#lname").focus(function () {
        $("#lusrname").removeClass("ok").removeClass("error").addClass("info").text("Please enter last name");
    });

    $("#email").focus(function () {
        $("#mail_span").removeClass("ok").removeClass("error").addClass("info").text("Please enter email including '@'.");
    });

    $("#password").focus(function () {
        $("#pwd").removeClass("ok").removeClass("error").addClass("info").text("Please enter password(at least 6 characters long)");
    });

    $("#phone").focus(function () {
        $("#contact").removeClass("ok").removeClass("error").addClass("info").text("Please enter 10 digit contact number");
    });
    
    $("#street").focus(function () {
        $("#address").removeClass("ok").removeClass("error").addClass("info").text("Please enter street address");
    });

    $("#zipcode").focus(function () {
        $("#zcode").removeClass("ok").removeClass("error").addClass("info").text("Please enter zip code");
    });


    $("#fname").blur(function () {
        if ($(this).val() == '') {
            $("#fusrname").css("display", "none");
        }
        else {
            if (/^[a-z0-9]+$/i.test($(this).val())) {
                $("#fusrname").removeClass("info").removeClass("error").addClass("ok").text("OK");
            }
            else {
                $("#fusrname").removeClass("info").removeClass("ok").addClass("error").text("Error");
            }
        }
    });

    $("#username").blur(function () {
        if ($(this).val() == '') {
            $("#usrname").css("display", "none");
        }
        else {
            if (/^[a-z0-9]+$/i.test($(this).val())) {
                $("#usrname").removeClass("info").removeClass("error").addClass("ok").text("OK");
            }
            else {
                $("#usrname").removeClass("info").removeClass("ok").addClass("error").text("Error");
            }
        }
    });

    $("#password").blur(function () {
        if ($(this).val() == '') {
            $("#pwd").css("display", "none");
        }
        else {
            if ($(this).val().length >= 6) {
                $("#pwd").removeClass("info").removeClass("error").addClass("ok").text("OK");
            }
            else {
                //$("#pwd").css("display", "inline");
                $("#pwd").removeClass("info").removeClass("ok").addClass("error").text("Error").addClass("error").text("Error");
            }
        }
    });

    $("#email").blur(function () {
        if ($(this).val() == '') {
            $("#mail_span").css("display", "none");
        }
        else {
            if ($(this).val().indexOf("@") > 0) {
                $("#mail_span").removeClass("info").removeClass("error").addClass("ok").text("OK");
            }
            else {
                $("#mail_span").removeClass("info").removeClass("ok").addClass("error").text("Error");
            }
        }
    });
});

