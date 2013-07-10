 $(function () {
	 
	if (window.location.host!="www.enzomanso.com")
		var mainUrl="/www.enzomanso.com/";  //we are into test machine
	else {
		var mainUrl="/"; // we are into prod machine
		}

	if (window.location.pathname==mainUrl)
	$('#menu a:first').addClass('curpage');
	else 
	   $('#menu a').each(function() {
				if (this.href == window.location.href) {
        			$(this).addClass('curpage');
														}
				
				
									});

				});
				