 $(function () {
            var path = window.location.pathname;
            path = path.replace(/\/$/, "");
            path = decodeURIComponent(path);

            $('#menu a').each(function () {
                var href = $(this).attr('href');
                if (href.indexOf(path) != -1) {
                    $(this).closest('li').find('a').addClass('active');
                }

            });

        });
