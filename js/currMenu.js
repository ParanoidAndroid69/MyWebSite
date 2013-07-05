 $(function () {
            var path = window.location.href;
            path = decodeURIComponent(path);
			path =path.substr(path.lastIndexOf("/") +1);
		
			$('#menu a').each(function () { 
			    var href = $(this).attr('href');
				href=href.substr(href.lastIndexOf("/") +1);
                if (href.indexOf(path) != -1) {
                   $(this).closest('li').find('a').css({'color': 'white' , 'font-size' : '20px' });
                }

            });

        });