function myFunction() {
	//document.getElementById("myP").style.visibility = "hidden";
	window.print();
}


//var img = "";
function downloadBtn() {
	$('#target').html2canvas({
		onrendered : function(canvas) {
			var img = canvas.toDataURL();
			//img now contains an IMG URL. Display on page for now...
			//$('<img>',{src:img}).appendTo($('body'));

			//var url = img.src.replace(/^data:image\/[^;]/, 'data:application/octet-stream');
			//window.open(url);

			SaveToDisk(img, 'image.png');
            //window.open(img);
		}
	});

	
	
}

function SaveToDisk(fileURL, fileName) {
    // for non-IE
    if (!window.ActiveXObject) {
        var save = document.createElement('a');
        save.href = fileURL;
        save.target = '_blank';
        save.download = fileName || 'unknown';

        var event = document.createEvent('Event');
        event.initEvent('click', true, true);
        save.dispatchEvent(event);
        (window.URL || window.webkitURL).revokeObjectURL(save.href);
    }

    // for IE
    else if ( !! window.ActiveXObject && document.execCommand)     {
        var _window = window.open(fileURL, '_blank');
        _window.document.close();
        _window.document.execCommand('SaveAs', true, fileName || fileURL)
        _window.close();
    }
}