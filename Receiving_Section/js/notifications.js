$(function(){
	$( "#notificationDetails" ).dialog({
		modal:true,
		autoOpen:false
	});
});

function viewNotificationDetails(forwardButton) {
    var application_no = $(forwardButton).closest("tr").find("td").eq(0).text();
	//var reasons = $(forwardButton).closest("tr").find("td").eq(1).text();
	//$("#reasons").empty();
	//$("#reasons").append(application_no);
	window.location.href = "saveToSession.php?application_no=" +application_no;
}

function cancelBtn(){
	$("#notificationDetails").dialog("close");
}
