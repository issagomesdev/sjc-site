(function($) {

    /*search features*/
    var featureList = $('.quick-feature-list ul');
    var featureTerms = $('.quick-feature-list ul li');
    $('#search-features').keyup(function(e) {
        var inputVal = $(this).val();
        if (e.keyCode === 27) { $(this).val(''); }

        var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
            reg = RegExp(val, 'i'),
            text;

        featureTerms.show().filter(function() {
            text = $(this).data('label').replace(/\s+/g, ' ');
            return !reg.test(text);
        }).hide();
        featureList.each(function(i, v) {
            var listItems = $(this).find('li:visible');
            var noResults = $(this).next('.no-results');
            console.log(noResults);
            if( listItems.length == 0) {
                noResults.remove();
                $(this).after('<small class="no-results">No feature matching "' +  inputVal + '"</small>');
            } else {
                noResults.remove();
            };
        }); 
        
    });

    /*open list*/
    $('.view-all-features').click(function(e) {
        $(this).prev().toggleClass('open');

    });

    /* Stop Carousel if user mouses over the video */
    $('iframe').on('mouseover', function () {
       $('#heroCarousel').carousel('pause');
    });

    /*video controls*/
    $('#video-modal').on('shown.bs.modal', function (event) {
        document.getElementById('day-to-day').play();
    });
    $('#video-modal').on('hide.bs.modal', function (event) {
        document.getElementById('day-to-day').pause();
    });

    /* Set Active Nav */
    $(function() { setNavigation(); });
    function setNavigation() {

        var re = new RegExp(window.location.origin + "/", "g")
        var path = window.location.href.replace(re, '');

        /* Check for raw path match */
        $('nav > li > a').each(function() {
            var href = $(this).attr('href');
            if(path.substring(0, href.length) === href) {
                $('a[href="' + href + '"]').addClass('active');
                return false;                
            }
        });

        path = window.location.pathname;
        path = path.replace(/\//, "");
        path = decodeURIComponent(path);

        if('' === path) {
            $('nav a[href="/"]').addClass('active');
            return false;
        }

        /* Top Nav Search */
        $('nav a').each(function() {
            var href = $(this).attr('href');

            if(path.substring(0, href.length) === href) {
                $(this).addClass('active');
                return false;                
            }
        });

        var re = new RegExp(window.location.origin + "/", "g");
        path = window.location.href.replace(re, '');

        /* Contact Form Search */
        $('.contact-section a').each(function() {
            var href= $(this).attr('href');

            if(path.substring(0, href.length) === href) {

                var active_form = $('.contact-section.active a').attr('href');
                $('form' + active_form).addClass('hidden');
                $('form' + href).removeClass('hidden');
                $('.contact-section.active').removeClass('active');
                $(this).parent().addClass('active');
                return false;
            }
        }); 
    }

    /*ScrollShow - updates features list active class*/
    function updateNav(e) {
        var attrID = $(this).attr('id');
        var slideIndex = $(e.relatedTarget).index();
        var nav = $('*[data-target="#' + attrID + '"]');
        nav.each(function(i) {
            if($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(nav[slideIndex]).addClass("active");
    }
    $('.scrollshow-carousel').on('slide.bs.carousel', updateNav);

    /* Sticky Header */
    var currentPosition = 0;
    $(window).scroll(function() {
        var windowTop = $(this).scrollTop();
        $('body').toggleClass("has-scrolled", windowTop > 130);

        /*fire event on section scrolltop*/
        var sectionTop = $('#split-timeline .timeline-section');
        var newPosition;
        var almaPartial = $('.vs-alma').outerHeight() * 2/3;
        sectionTop.each(function(i,v) {
            var thisTop = $(this).offset().top - almaPartial;
            if(windowTop > thisTop) {
                newPosition = $(this).data("carousel-position");
            }
        });
        if (newPosition !== currentPosition) {
            currentPosition = newPosition;
            $('#carousel-legacy').carousel(currentPosition);
            $('#carousel-alma').carousel(currentPosition);
        }
    });

    function checkWidth() {
        var windowSize = $(window).width();
        var windowHeight = $(window).height();
        var scrollshowsWrap = $(".scrollshow-carousel-wrapper"),
            navHeight = $("header.navbar").outerHeight(),
            ssHeight;
        if (windowSize >= 768) {
            /*for homepage*/
            $(".question").stick_in_parent();

            /*sets device column height to features list height*/
            scrollshowsWrap.each(function(i) {
                ssHeight = $(this).closest('.row').height();
                $(this).css('height', ssHeight + 'px');
            });

            $('.scrollshow-carousel').each(function(i) {
                var offset = navHeight + $(this).closest('.scrollshow-features').find('.scrollshow-header').outerHeight();
                $(this).stick_in_parent({ offset_top: offset, inner_scrolling: false });
            });
            /*stickykit wasn't recalculating cover. had to destroy to reposition*/
            $(".cover").trigger("sticky_kit:detach");
            $(".cover").stick_in_parent({ offset_top: windowHeight - 140 });
            $(".scrollshow-header").stick_in_parent({ offset_top: navHeight });
            $(".legacy-vs-alma").stick_in_parent();

        } else {
            /*detach stickykit for mobile*/
            $('.scrollshow-carousel, .cover, .scrollshow-header').each(function(i) {
                $(this).trigger("sticky_kit:detach");
            });
            /*remove height from column*/
            scrollshowsWrap.each(function(i) {
                $(this).css('height', '');
            });
        }
    }
    $(window).on("load", checkWidth());
    $(window).resize(checkWidth);
    $(".timeline-section h2").stick_in_parent({ offset_top: $("header.navbar").outerHeight() });

    /* Modal Contact Form */
    toggleContactModal = function() {
        _kmq.push(['record', 'Clicked Demo Button']);
        $('#modal-weblead').toggle();
    }

    toggleMobileNav = function() {
        $('.mobile-nav').toggle();
    }

    /* Resume Upload */
    var wrapper = $('<div/>').css({height:0, width:0, 'overflow':'hidden'});
    var fileInput = $(':file').wrap(wrapper);

    fileInput.change(function() {
        $this = $(this);
        $('.placeholder-input').html($this.val().replace(/C:\\fakepath\\/i, ''));
    });

    $('#file').click(function() {
        fileInput.click();
    }).show();


    /* End Resume Upload */

    /* Start Leadership Popovers */
    $('.pop').popover({
        container: 'body',
        content: function () { return $($(this).data('popover-content')).html(); },
        html: true,
        trigger: 'click'
    });

    var visiblePopover;
    $('body').on('click', function (evt) {
        if (visiblePopover && !$(evt.target).closest('.popover').length) {
            visiblePopover.popover('toggle');
        }
    });
    $('.pop').on('shown.bs.popover', function (evt) {
        var popover = $(this);
        setTimeout(function () { visiblePopover = popover }, 100);
    });
    $('.pop').on('hide.bs.popover', function (evt) {
        visiblePopover = null;
    });
    /* End Leadership Popovers */

    /* Contact Form Toggles */
    $('.contact-section').click(function() {
        var active_form = $('.contact-section.active a').attr('href');

        $('form' + active_form).addClass('hidden');
        $('.contact-section.active').removeClass('active');
        $(this).addClass('active');

        var new_form = $(this).find('a').attr('href');
        $('form' + new_form).removeClass('hidden');
    }); 
    /* End Contact Form Toggles */

    /* News Section Toggles */
    $('.news-section').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
        $('.news-section.active').removeClass('active');
        $(this).addClass('active');
    });

    $('.news-section-tall').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
        $('.news-section-tall.active').removeClass('active');
        $(this).addClass('active');
    });

    $('.about-link').on('click', function(e){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });

    /* Dropdown color hack */
    $('.lead-gen-form-container select').change(function() {
        $('.lead-gen-form-container select').removeClass('placeholder-grey').addClass('dark-text');
    }); 

    /* SalesForce Return show success msg */
    if('true' == getParameterByName('submitted')) { 
        $('.form-msg-container').show();
    }
    
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");

        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);

        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    /* weblead form validation */
    $('#contact-form input[type="submit"]').click(function() {
        webLeadValidate('#contact-form');
        return false;
    });

    /* Standards Based Gradebook Landing PageContact form validation */
    $('#sbg-contact-form input[type="submit"]').click(function() {
        webLeadValidate('#sbg-contact-form');
        return false;
    });  

    /* Backwards Design Curriculum Landing Page Contact form validation */
    $('#bdc-contact-form input[type="submit"]').click(function() {
        webLeadValidate('#sbg-contact-form');
        return false;
    });

    /* weblead modal form validation */
    $('#contact-form-modal input[type="submit"]').click(function() {
        webLeadValidate('#contact-form-modal');
        return false;
    });

    /* Price Lock form validation */
    $('#price_lock_form input[type="submit"]').click(function() {
        webLeadValidate('#price_lock_form');
        return false;
    });

    /* media inquiry form validation */
    $('#media-inquiry input[type="submit"]').click(function() {
        mediaInquiryValidate('#media-inquiry');
        return false;
    });

    webLeadValidate = function(form) {
            
        /* Build array of required field objects */
        var formFields = [];

        if(form !== "#price_lock_form")
            var allInputs = $(form).find(":input");
            $(allInputs).each(function(index, value) {
                if ($(this).prop('required')) {
                    formFields.push({selector: '#' + $(this).attr('id'), value: $(this).val()});
                }
            });

        var result = formValidate(formFields);
        if(!result.empty) {

            if(form == '#contact-form-modal' || form == '#contact-form' || form == '#price_lock_form') {
                $('input[name="retURL"]').val(window.location.href + "?submitted=true");
            }

            _kmq.push(['identify', $(form + ' #email').val()]);

            if(form === "#price_lock_form") {
             
                _kmq.push(['set', {'name': $(form + ' #first-name').val()}]);
            
            } else {
             
                _kmq.push(['set', {'name': $(form + ' #first-name').val() + ' ' + $(form + ' #last-name').val()}]);
            }
            
            _kmq.push(['set', {'organization': $(form + ' #organization').val()}]);
            _kmq.push(['set', {'url': window.location.href}]);

            form.submit();

        } else {

            var msg = "";
            $(result.errors).each(function(idx, err) {
                msg += "<p>" + err + "</p>";
            });

            $("<div class='error-msg row'><div class='alert alert-danger'>" + msg + "</div></div>").insertAfter('.newsletter-submit');

            return false;
        }
    }

    mediaInquiryValidate = function(form) {
            
        /* Build array of required field objects */
        var formFields = [];

        formFields.push({selector: '#media_last_name', msg: 'Please enter your last name.', value: $(form + ' #media_last_name').val()});
        formFields.push({selector: '#media_first_name', msg: 'Please enter your first name.', value: $(form + ' #media_first_name').val()});
        formFields.push({selector: '#media_name', msg: 'Please enter your organization name.', value: $(form + ' #media_name').val()});
        formFields.push({selector: '#media_email', msg: 'Please enter your email address.', value: $(form + ' #media_email').val()});
        formFields.push({selector: '#media_phone', msg: 'Please enter your phone number.', value: $(form + ' #media_phone').val()});
        formFields.push({selector: '#media_message', msg: 'Please enter your message.', value: $(form + ' #media_message').val()});

        var result = formValidate(formFields);
        if(!result.empty) {

            $('input[name="retURL"]').val(window.location.href + "?submitted=true");

            _kmq.push(['record', 'Submitted Media Inquiry Form']);
            _kmq.push(['identify', $(form + ' #media_email').val()]);
            _kmq.push(['set', {'name': $(form + ' #media_first_name').val() + ' ' + $(form + ' #media_last_name').val()}]);
            _kmq.push(['set', {'organization': $(form + ' #media_name').val()}]);
            _kmq.push(['set', {'url': window.location.href}]);

            form.submit();

        } else {

            var msg = "";
            $(result.errors).each(function(idx, err) {
                msg += "<p>" + err + "</p>";
            });

            $("<div class='error-msg row'><div class='alert alert-danger'>" + msg + "</div></div>").insertAfter('.newsletter-submit');

            return false;
        }
    }

    formValidate = function(formFields) {

        var empty = false;
        var errors = [];

        // clear errors
        $('.error-msg').remove();
        $('.input-error').removeClass('input-error');

        $(formFields).each(function(idx, obj) {

            if('' === obj.value || !obj.value) {
                empty = true;
                errors.push(obj.msg);
                $(obj.selector).addClass('input-error');
            }
        });

        return {empty: empty, errors: errors};
    }

    /*toggle active class*/
    var toggleActive = function(){
        $(".icon-circle-graph li.active").removeClass('active')
            .next().add(".icon-circle-graph li:first").last().addClass("active");
        $(".circle-list li.active").removeClass('active')
            .next().add(".circle-list li:first").last().addClass("active");
    }
    setInterval(toggleActive, 2500);

    /*shuffle array*/
    function shuffle(array) {
        var currentIndex = array.length, temporaryValue, randomIndex;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }
    function split(array) {
        var arrayOne, arrayTwo;
        var l = array.length / 2;
        arrayOne = array.filter(function(i) { return i < l; });
        arrayTwo = array.filter(function(i) { return i >= l; });
        /*in order for the marquee to wrap cleanly, 
         * it needs the first 3 elements in the array copied to the end.
         * The second array needs 4 becuase of the offset
         * */
        arrayOne.push($(arrayOne[0]).clone(), $(arrayOne[1]).clone(), $(arrayOne[2]).clone());
        arrayTwo.push($(arrayTwo[0]).clone(), $(arrayTwo[1]).clone(), $(arrayTwo[2]).clone(), $(arrayTwo[3]).clone());
        return [arrayOne, arrayTwo];
    }

    /*testimonials randomizer*/
    var infiniteScroll = $('#testimonial-infinite-scroll');
    quotes = infiniteScroll.find('blockquote');
    quotes.remove(); 
    quotes = shuffle(quotes);
    quotes = split(quotes);
    var groups = $('.group');
    $(quotes).each(function(i, v) {
        $(quotes[i]).each(function(ii, vv) {
            $(groups[i]).append(vv);
        });
    });
    $(infiniteScroll).css("visibility", "visible");


    $(window).on('click', function() {
        if(!event.target.matches('.btn-drop')) {
            $('.btn-dropdown-list').removeClass('active');
        }
    })
    /*btn dropdown*/
    $('.btn-dropdown').on('click', function() {
        $(this).find('.btn-dropdown-list').toggleClass('active');
    });

//Cycle for flip animation on homepage
    function timedCycleActive(nodeList, interval, delay) {
        var i = 0,
            extra = 10;
        window.setTimeout(function() {
            var cycle = setTimeout(quickenCycle, interval);
            nodeList[i].classList.add('active');
            function quickenCycle() {
                //cycle active class
                nodeList[i].classList.remove('active');
                nodeList[i + 1] ? i++ : i = 0;
                nodeList[i].classList.add('active');

                if(interval > 230) {
                    interval*=.85;
                } else if(extra > 0) {
                    extra--;
                } else {
                    nodeList[i].classList.remove('active');
                    nodeList[nodeList.length-1].classList.add('active');
                    return;
                }
                cycle = setTimeout(quickenCycle, interval);
            }
        }, delay);
    }
    var heroAnimSel = document.querySelectorAll('.vertflip span');
    if (heroAnimSel.length) {
        timedCycleActive(heroAnimSel, 2000, 3700)
    }

})(jQuery);
