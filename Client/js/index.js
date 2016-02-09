function apply_redirect() {
    window.location.assign('../registration/bpForm.php');
}

$(function () {
    $("#login-popup").dialog({
        autoOpen: false,
        closeOnEscape: true,
        open: function (event, ui) {
            $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
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


