function printForm(target)
{
    var start = "<html><head><title></title></head><body>";
    var end = "</body>";
    var bpform = document.all.item(target).innerHTML;
    var original = document.body.innerHTML;
    document.body.innerHTML = start + bpform + end;
    window.print();
    document.body.innerHTML = original;
    show_alert();
    document.location.href = "../web/index.php"; 
    return false;
}

function show_alert(){
    alert("Your application has been submitted. Please submit your requirements.");
}