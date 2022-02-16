jQuery(function($) {
    'use strict';

    // Mean Menu
    $('.mean-menu').meanmenu({
        meanScreenWidth: '991',
    });

    // Sticky Nav
    $(window).on('scroll', function() {
        $(window).scrollTop() >= 100 ?
        $('.navbar-area').addClass('stickyadd') :
        $('.navbar-area').removeClass('stickyadd');
    });

    // Smooth Scrolling
    $('a.nav-link').on('click', function(e) {
        var $this = $(this);
        $('html, body')
        .stop()
        .animate({
            scrollTop: $($this.attr('href')).offset().top - 60,
        }, 1000 );
        e.preventDefault();
    });

    // Search Popup
    $('.search-btn').on('click', function() {
        $('.search-popup').toggle(300);
    });

    // Popup Video
    $('.youtube-popup').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
    });

    // Hero Slider
    $('.home-slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        autoplay:true,
        smartSpeed: 500,
    });

    // Team Slider
    $('.team-slider').owlCarousel({
        loop: false,
        margin: 15,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            1400: {
                items: 4
            }
        },
    });

    // Gallery Slider
    $('.gallery-slider').owlCarousel({
        loop: false,
        margin: 20,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });

    // Testimonial Slider
    let testimonialSlider = $('.testimonial-slider').owlCarousel({
        items: 1,
        dots: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });
    $('.dot').on('click', function() {
        testimonialSlider.trigger('to.owl.carousel', [$(this).index(), 300]);
        $('.dot').removeClass('active');
        $(this).addClass('active');
    });

    // Client Slider
    $('.client-slider').owlCarousel({
        loop: true,
        margin: 20,
        items: 1,
        smartSpeed: 950,
    });

    // Partner Slider
    $('.partner-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        smartSpeed: 2000,
        margin: 30,
        autoplayHoverPause: true,
        autoplay: true,
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1024: {
                items: 4,
            },
            1200: {
                items: 5,
            },
        },
    });

    // Back To Top
    $('body').append(`<div class='go-top'><i class='envy envy-angle-up'></i></div>`);
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $('.go-top').addClass('active');
        if (scrolled < 600) $('.go-top').removeClass('active');
    });
    $('.go-top').on('click', function() {
        $('html, body').animate({
            scrollTop: '0',
        }, 500 );
    });

    // Count Time 
    function makeTimer() {
        var endTime = new Date('September 20, 2021 17:00:00 PDT');
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < '10') {
            hours = '0' + hours;
        }
        if (minutes < '10') {
            minutes = '0' + minutes;
        }
        if (seconds < '10') {
            seconds = '0' + seconds;
        }
        $('#days').html(days + '<span>Days</span>');
        $('#hours').html(hours + '<span>Hours</span>');
        $('#minutes').html(minutes + '<span>Minutes</span>');
        $('#seconds').html(seconds + '<span>Seconds</span>');
    }
    setInterval(function() {
        makeTimer();
    }, 0);

    // Subscribe Form
    $('.newsletter-form').validator().on('submit', function(event) {
        if (event.isDefaultPrevented()) {
            // Handle The Invalid Form...
            formErrorSub();
            submitMSGSub(false, 'Please enter your email correctly.');
        } else {
            // Everything Looks Good!
            event.preventDefault();
        }
    });

    function callbackFunction(resp) {
        if (resp.result === 'success') {
            formSuccessSub();
        } else {
            formErrorSub();
        }
    }

    function formSuccessSub() {
        $('.newsletter-form')[0].reset();
        submitMSGSub(true, 'Thank you for subscribing!');
        setTimeout(function() {
            $('#validator-newsletter').addClass('hide');
        }, 4000)
    }

    function formErrorSub() {
        $('.newsletter-form').addClass('animated shake');
        setTimeout(function() {
            $('.newsletter-form').removeClass('animated shake');
        }, 1000)
    }

    function submitMSGSub(valid, msg) {
        if (valid) {
            var msgClasses = 'validation-success';
        } else {
            var msgClasses = 'validation-danger';
        }
        $('#validator-newsletter').removeClass().addClass(msgClasses).text(msg);
    }

    // AJAX MailChimp
    $('.newsletter-form').ajaxChimp({
        url: 'https://hibootstrap.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9', // Your url MailChimp
        callback: callbackFunction
    });

    // Preloader
    $(window).on('load', function(e) {
        $('.preloader-main')
        .delay(2000)
        .queue(function() {
            $(this).remove();
        });
    });

    //////////// Slider Change Calue for calculator

    const sipCalculator = (sip, roi, year,check) => {
        var totalAmt = 0, arr = [],
         months = year*12,
         addprevious = sip*((roi/12)/100);
        
        for(var b=1; b <= months ; b++){
            totalAmt = totalAmt  +  (sip+addprevious) + (totalAmt*((roi/12)/100)) 
           // arr.push(FV)
        }

        var investedAmt = Math.round(sip*months),
        estReturn = Math.round(totalAmt-investedAmt)
        $('#sipInvestedAmt').text('Rs. '+investedAmt.toLocaleString());
        $('#sipEstAmt').text('Rs. '+estReturn.toLocaleString());
        $('#sipTotalAmt').text('Rs. '+Math.round(totalAmt).toLocaleString());

        pieChart('Invested amount','Est. returns',investedAmt,estReturn,check) 
    }


    const pieChart = (head1,head2,val1,val2,check) => {

            var xValues = [head1, head2];
            var yValues = [val1, val2];
            var barColors = [ "#3cafdc", "#00729f" ];
            
            if(check == true){

                const chart = Chart.getChart("sipCalChat");
                chart.destroy();
                chart = new Chart("sipCalChat", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        borderColor:'rgba(0,0,0,0)',
                        data: yValues
                        }]
                    }           
                });
            } 
            else{
                var chart = new Chart("sipCalChat", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        borderColor:'rgba(0,0,0,0)',
                        data: yValues
                        }]
                    }           
                });
            }
            
    }


    var s = parseFloat($('#sipAmt').val()), r= parseFloat($('#sipRoi').val()), t= parseFloat($('#sipTime').val())
    sipCalculator(s,r,t,false)

    $(document).on('input change','.type-range',function(){
        const minVal = $(this).attr('min');
        const maxVal = $(this).attr('max');
        const bgVal = ($(this).val()-minVal)*100/(maxVal-minVal);

        $(this).css({'background-size': bgVal+'% 100%'})
        $(this).siblings().children('.type-input').val($(this).val())

        s = parseFloat($('#sipAmt').val()), r= parseFloat($('#sipRoi').val()), t= parseFloat($('#sipTime').val())
        sipCalculator(s,r,t, true)
    });

    $('.type-input').on('keyup',function(){
        var mminVal = $(this).attr('min'); 
        var mmaxVal =$(this).attr('max');
        var mVal = $(this).val();
    
        if(parseInt(mVal) > parseInt(mmaxVal)){
            $(this).val(mmaxVal);
        }
        var bgVal = (mVal-mminVal)*100/(mmaxVal-mminVal);
        $(this).parent().siblings('.type-range').val(mVal).css({'background-size': bgVal+'% 100%'})

        s = parseFloat($('#sipAmt').val()), r= parseFloat($('#sipRoi').val()), t= parseFloat($('#sipTime').val())
        sipCalculator(s,r,t,true)
       
    });
   
    $('.team-outer-box').on('click',function(){
        if(!($(this).hasClass('active'))){
          $(this).addClass('active').siblings().removeClass('active')
        }
    })

    $('.job-box').on('click',function(){
        const child= $(this).children('.jobs');
        if(!(child.hasClass('active'))){
            $('.jobs').removeClass('active').slideUp();
            child.slideDown(()=>{
                child.addClass('active')
            });
        }
    })
   
    $('.faq-item').on('click',function(){
        const tthis= $(this);
        if(!(tthis.hasClass('active'))){
            tthis.children('.job-description').slideDown(()=>{
                tthis.addClass('active')
            });
        }
    })

    $.each($('.job-box'),function(){
        if($(this).children().length == 0){ $(this).hide(); }
        var count = $(this).find('.faq-item').length
        $(this).find('.job-role-count span').text(count)
    });


    $('.count').each(function () {
        var $this = $(this);
        
        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 4000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });


}(jQuery));