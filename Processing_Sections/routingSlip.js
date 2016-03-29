$(function() {
	$( "#routingSlipHistory" ).dialog({
		modal:true,
		autoOpen:false
	});
	$("#viewRSHistory").click(function(){
		$("#routingSlipHistory").dialog("open");
	});
	
	$("#deficient, #approve").change(function(){
		if($("#deficient").is(":checked")){
            $("#commentsTextArea").attr("disabled", false);
            $("#commentsTextArea").focus();
        }
        else if($("#approve").is(":checked")){
            $("#commentsTextArea").attr("disabled", true);
        }
    });
});
