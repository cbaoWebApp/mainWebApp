$(document).ready(function () {
    $(".collapsible .contents").hide();
    $(".collapsible .rotate").click(function () {
        if ($(this).css("transform") === 'none') {
            $(this).css("transform", "rotate(90deg)");
            $(this).next().next().toggle();
        } else {
            $(this).css("transform", "");
            $(this).next().next().toggle();
        }
    });
});

function apply_redirect() {
    window.location.assign('../registration/bpForm.php');
}

function back_redirect() {
    window.location.assign('../web/index.php');
}

$(function () {
    $("#login-popup").dialog({
        autoOpen: false,
        closeOnEscape: true,
        open: function (event, ui) {
            $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
        },
        position: {
            my: "center center",
            at: "center center",
            of: window,
            collision: "none"
        },
        height: 'auto',
        width: 'auto'
    });

    $("#trackApplication").click(function () {
        $("#err_area").html("");
        $("#login-popup").dialog("open");
    });
    $("#cancel").click(function () {
        $("#inputEmail").val("");
        $("#inputPassword").val("");
        $("#login-popup").dialog("close");
        $("#err_area").html("");
    });
});


