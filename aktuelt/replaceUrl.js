//Replace urls
$(document).ready(function(){  
	var rootUrl = 'http://kbnn.no/';
	
	$(' img').each(function(){
		var oldHref = $(this).attr('src');
		$(this).attr('src',rootUrl+oldHref);
	});


	//----------Navbar-------------------
	$('.dropdown-menu li a').each(function(){
		var oldHref = $(this).attr('href');
		$(this).attr('href',rootUrl+oldHref);
	});

	var oldHref = $('.navbar-brand').attr('href');
	$('.navbar-brand').attr('href', rootUrl+oldHref );


	//-------------Footer---------------------
	$('#footer-links a').each(function(){
		var oldHref = $(this).attr('href');
		$(this).attr('href',rootUrl+oldHref);
		console.log($(this).attr('href'));
	});

	var oldHref = $('#vilkar').attr('href');
	$('#vilkar').attr('href', rootUrl+oldHref );
});
