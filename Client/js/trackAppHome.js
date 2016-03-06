$(function () {
    $("#cancel_popup").dialog({
        autoOpen: false,
        closeOnEscape: true,
        open: function (event, ui) {
            $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
        },
        height: 'auto',
        width: 'auto'
    });
    
    $("#accept_popup").dialog({
        autoOpen: false,
        closeOnEscape: false,
        open: function (event, ui) {
            $(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
        },
        height: 'auto',
        width: 'auto'
    });    

    $("#cancel").click(function () {        
        $("#cancel_popup").dialog("open");
    });

    $("#back_to_page").click(function () {
        $("#cancel_popup").dialog("close");
    });
    
    $("#cancel_btn").click(function () {        
        $("#cancel_popup").dialog("close");
        $("#accept_popup").dialog("open");
    });    
});