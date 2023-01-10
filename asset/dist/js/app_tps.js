// $('.treeview-menu').find('a').click(function(e) {
// 	// var uri = $(this).attr('link');
// 	// if(uri)
// 	// {
// 	// 	$.ajax({
// 	// 	url: uri,
// 	// 	type: 'GET',
// 	// 	dataType:'html',
// 	// 	beforeSend : function()
// 	// 	{
// 	// 		// $('.content-wrapper').empty();
// 	// 	}
// 	// })
// 	// .done(function(data) {
// 	// 	// console.log(data);
// 	// 	$('.content-wrapper').html(data);	
// 	// })
// 	// .fail(function() {
// 	// 	console.log("error");
// 	// })
// 	// .always(function() {
// 	// 	console.log("complete");

// 	// });
// 	// e.preventDefault()

// 	// } 
// 	$.get($(this).attr('href'));
	
// });
$(document).ajaxStart(function() { Pace.restart(); });
function loadjscssfile(filename, filetype){
    if (filetype=="js"){ //if filename is a external JavaScript file
        var fileref=document.createElement('script')
        fileref.setAttribute("type","text/javascript")
        fileref.setAttribute("src", filename)
    }
    else if (filetype=="css"){ //if filename is an external CSS file
        var fileref=document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", filename)
    }
    if (typeof fileref!="undefined")
        document.getElementsByTagName("head")[0].appendChild(fileref)
    }