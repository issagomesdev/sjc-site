(function($) {
    $( window ).on('load', function() {
        var browser = $(window);
        var columnMatch = [
            {
                parent: '.column-match',
                children: ['h4.sub', 'p.description']
            },
            {
                parent: '#packages',
                children: ['.lead-p', '.panel-footer']
            }
        ];


        function setColumnHeight() {
            var h = -1;
            $(columnMatch).each(function(i, v) {
                var p = v.parent;
                if($(p).length) {
                    $(v.children).each(function(ii, vv) {
                        var column = $(p + ' ' + vv);
                        column.each(function(iii, vvv) {
                            h = h > $(vvv).outerHeight() ? h : $(vvv).outerHeight();
                        })
                        column.css('min-height', h);
                    })
                } }) }
        function removeColumnHeight() {
            $(columnMatch).each(function(i, v) {
                var p = v.parent;
                if($(p).length) {
                    $(v.children).each(function(ii, vv) {
                        $(p + ' ' + vv).css('min-height', '');
                    });
                }
            });
        }
        browser.resize(function() {
            if(browser.width() >= 992) {
                setColumnHeight();
            } else {
                removeColumnHeight();
            }
        });
        if(browser.width() >= 992) {
            setColumnHeight();
        };
    });
})(jQuery);
