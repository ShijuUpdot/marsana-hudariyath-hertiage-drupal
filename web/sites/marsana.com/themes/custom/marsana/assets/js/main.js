
jQuery(function($){
    
  
    ///////////////////////////////////////////////////////////////   START DOCUMENT READY  ///////////////////////////////////////////////////////////////
    $(document).ready(function() {
        // HEADER LINKS
        $('#burger-icon').click(function(){
            $(this).toggleClass('open');
            $('.header').removeClass('darkHeader');
            $('.menu-wrapper').toggleClass('open');
            $('.header').toggleClass('open');
            $('.map-wrapper').removeClass('open');
            $('#map-icon').removeClass('active');
            if($(this).hasClass('open')){
                disableScroll();
            }else{
                enableScroll();
                
            }
        });
        $('.menu-links a').click(function(){
            $('#burger-icon').removeClass('open');
            $('.menu-wrapper').removeClass('open');
            $('.header').removeClass('open');
            $('.map-wrapper').removeClass('open');
            $('.contact-wrapper').removeClass('open');
            $('#map-icon').removeClass('active');
            $('#contact-icon').removeClass('active');
            enableScroll();
            setTimeout(function(){
                var offset = -150;
                $('html, body').animate({
                    scrollTop: ($(window.location.hash).offset().top + offset) + 'px'
                }, 0, 'swing');
                $('.interactive-listing-links li').removeClass('active');
                var hasImage = $(window.location.hash).attr('data-img');
                $('.interactive-image img').attr('src', hasImage);
                $(window.location.hash).addClass('active');
                $(window.location.hash).find($('.dynamic-content')).css('display', 'block');
            }, 100);
            
        });
        $('.header-right li').click(function(){
            $(this).toggleClass('active');
        });
                    


        var clickedData, targetData, clickedLink, targetLink ;
        $('#map-icon').click(function(){
            $('.map-wrapper').toggleClass('open');
            $('.menu-wrapper').removeClass('open');
            $('.header').removeClass('open');
            $('.header').toggleClass('mapHeader');
            $('.contact-wrapper').removeClass('open');
            $('#burger-icon').removeClass('open');
            $('#burger-icon').removeClass('active');
            $('#contact-icon').removeClass('active');
            $('body').toggleClass('overflow-hidden');
            $('.map-links').removeClass('open');
            if($('.map-wrapper').hasClass('open')){
                $('.map-links .upper-part a').click(function(){
                    $('.map-links .upper-part a').each(function(){
                        $(this).removeClass('active');
                    });
                    $(this).addClass('active');
                    clickedData = $(this).attr('data-target');
                    $('.map-points .zoomTarget').each(function(){
                        targetData = $(this).attr('data-target');
                        $(this).removeClass('active');
                        if (targetData == clickedData){
                            $(this).addClass('active');
                        }
                    });

                    setTimeout(function() { 
                        $(".zoomTarget.active").click();
                    }, 100);
                }); 
            }
        });
        $('#contact-icon').click(function(){
            $('.contact-wrapper').slideDown();
        });
        $('.close-btn').click(function(){
            $('.contact-wrapper').slideUp();
        });



        $('.close-toolbar').click(function(){
            $('.covid-toolbar').slideUp();
        });
        //BIG M ANIMATION ON HOVER
        $('.strips-links li').hover(function(){
            var thisImgSrc = $(this).attr('data-img');
            var thisMainClass = $(this).attr('data-class');
            $(this).css('z-index','111');
            
            $('.strips-links li h2').css('opacity','0');
            $(this).find('h2').css('opacity','1');
            $('.big-logo-wrapper').css('background-image','url(' + thisImgSrc + ')');
            $('.strips-wrapper').addClass(thisMainClass);
            
        }, function(){
            $('.strips-links li').css('z-index','1');
            var lastClass = $('.strips-wrapper').attr('class').split(' ').pop();
                $('.strips-wrapper').removeClass(lastClass);
        });
        $('.strips-links').hover(
            function(){},
            function(){
                $('.big-logo-wrapper').css('background-image','');
                $('.strips-links li').css('z-index','1');
                $('.strips-links li h2').css('opacity','1');
            }
        );

        //STRIPS CHANGE COLOR ON HOVER

        $('.new-strips-links li').hover(function(){
            var thisMainClass = $(this).attr('data-class');
            $(this).css('z-index','111');
            
            $('.new-strips-links li h2').css('opacity','0');
            $(this).find('h2').css('opacity','1');
            $('.new-strips-wrapper').addClass(thisMainClass);
            
        }, function(){
            $('.new-strips-links li').css('z-index','1');
            var lastClass = $('.new-strips-wrapper').attr('class').split(' ').pop();
                $('.new-strips-wrapper').removeClass(lastClass);
                $('.new-strips-links li h2').css('opacity','1');
        });
        $('.new-strips-links').hover(
            function(){
                $('.new-strips-links li').css('z-index','1');
                $('.new-strips-links li h2').css('opacity','1');
            }
        );

        
        if($(window).width() <= 1024){
            //INTERACTIVE LINKS MOBILE
            $('.interactive-listing-links > ul > li > a').click(function(){
                //$('.dynamic-content').slideUp();
                $(this).parent().find($('.dynamic-content')).slideToggle();
                $(this).parent().toggleClass('active');
                return false;
            });
        }else{
            //INTERACTIVE LINKS DESKTOP
            $('.interactive-listing-links > ul > li > a').click(function(){
                var thisImg = $(this).parent().attr('data-img');
                
                if($(this).parent().hasClass('active')){
                    $(this).parent().removeClass('active');
                    
                }else{
                    $('.tab-pane.active .interactive-listing-links li').removeClass('active');
                    $(this).parent().addClass('active');
                }
                
                $('.interactive-image img').attr('src', thisImg);
            });
        }


        $('.mobile-strips-links > ul > li > h2').click(function(){
            $('.mobile-strips-links')
            var thisMainClass = $(this).parent().attr('data-class');
            $('.mobile-strips-links .strip-content').addClass(thisMainClass);
            $(this).parent().find($('.strip-content')).fadeIn();
            
        })
        $('.close-strips').click(function(){
            $(this).parent().fadeOut();
            var lastClass = $('.mobile-strips-links .strip-content').attr('class').split(' ').pop();
            $('.mobile-strips-links .strip-content').removeClass(lastClass);
        })

        $('.new-mobile-strips-links > ul > li > h2').click(function(){
            $('.new-mobile-strips-links')
            var thisMainClass = $(this).parent().attr('data-class');
            $('.new-mobile-strips-links .strip-content').addClass(thisMainClass);
            $(this).parent().find($('.strip-content')).fadeIn();
            
        })
        $('.close-strips').click(function(){
            $(this).parent().fadeOut();
            var lastClass = $('.new-mobile-strips-links .strip-content').attr('class').split(' ').pop();
            $('.new-mobile-strips-links .strip-content').removeClass(lastClass);
        })

        $('.map-legend').click(function(){
            $('.map-links').addClass("open");
        });
        $('.map-points').click(function(){
            $('.map-links').removeClass("open");
        });

        

        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
        var eltTop, eltLeft, scrnW, scrnH;
        scrnW = $( window ).width();
        scrnH = $( window ).height();
        if(isMobile){
            $("#dom_overlay_container").css("display", "none");
            $('.map-legend').click(function(){
                $(".map-wrapper").addClass("overflow-hidden");
            });
            $(".map-wrapper .map-links .upper-part a").click(function(){
                $('.map-links').removeClass("open");
                $(".map-wrapper").removeClass("overflow-hidden");
            });
            $(".map-points").click(function(){
                $(".map-wrapper").removeClass("overflow-hidden");
            });
            var distanceM = $('.new-mobile-strips-links').offset().top - 50;
            $(window).scroll(function() {
                if ( $(this).scrollTop() >= distanceM ) {
                    $("#scroll-burger-icon").removeClass("d-none");
                    $("#burger-icon").addClass("d-none");
                } else {
                    $("#scroll-burger-icon").addClass("d-none");
                    $("#burger-icon").removeClass("d-none");
                }
            });
            $("#scroll-burger-icon").click(function(){
                $("#scroll-burger-icon").addClass("d-none");
                $("#burger-icon").removeClass("d-none");
                $('html, body').animate({scrollTop:0}, 'slow');
                $('.header').removeClass("darkHeader");
                
            });
            $(".numbered-points .zoomTarget").click(function(){
                $(".map-points").addClass("scaled");
                $(".zoom-reset").addClass("display-reset");
                $(".numbered-points .zoomTarget").each(function(){
                    $(this).removeClass("active");
                })
                $(this).addClass("active");
                eltTop = $(this).position().top - scrnH / 2;
                eltLeft = $(this).position().left - scrnW / 2;
                $('.map-wrapper').animate({
                    scrollTop: eltTop - 400,
                    scrollLeft: eltLeft - 400
                }, 0);
                console.log(eltTop, eltLeft)
            });
        }
        else{
           // var distanceD = $('.new-strips-links').offset().top - 50;
            $(window).scroll(function() {
                var distanceD = $('.new-strips-links').offset().top - 50;
                if ( $(this).scrollTop() >= distanceD ) {
                    $("#scroll-burger-icon").removeClass("d-none");
                    $("#burger-icon").addClass("d-none");
                } else {
                    $("#scroll-burger-icon").addClass("d-none");
                    $("#burger-icon").removeClass("d-none");
                }
            });
            $("#scroll-burger-icon").click(function(){
                $("#scroll-burger-icon").addClass("d-none");
                $("#burger-icon").removeClass("d-none");
                $('html, body').animate({scrollTop:0}, 'slow');
            });
            $(".numbered-points .zoomTarget").click(function(){
                $(".map-points").addClass("scaled");
                $(".zoom-reset").addClass("display-reset");
                $(".numbered-points .zoomTarget").each(function(){
                    $(this).removeClass("active");
                })
                $(this).addClass("active");
                eltTop = $(this).position().top - scrnH / 2;
                eltLeft = $(this).position().left - scrnW / 2;
                $('.map-wrapper').animate({
                    scrollTop: eltTop,
                    scrollLeft: eltLeft
                }, 0);
                console.log(eltTop, eltLeft)
            });
        }


        $('.eat-menu-links a').click(function(){
            
            eatNavigation ();
        });

        $(".anchorInside").click(function(){
            clickedLink = $(this).attr('data-target');
            $('.fnbModal').each(function(){
                targetLink = $(this).attr('id');
                //console.log(targetLink);
                $(this).removeClass('show');
                if (targetLink == clickedLink){
                    $(this).addClass('show');
                    $("body").addClass("modal-open");
                }
            });
        });

        $(".anchorInside").each(function(){
            var cLink = $(this).attr('data-target');
            var aLink = $(this);
            var flag = 0;
              $('.fnbModal').each(function(){
                  tLink = $(this).attr('id');
                  if (tLink == cLink){
                      flag = 1;
                  } 
              });
              if(flag == 0){
                 aLink.parent().html(aLink.html());
              }
          });
          
        $(".fnbModal .modal-header .close").click(function(){
            $(this).parent().parent().parent().parent().removeClass("show");
            $("body").removeClass("modal-open");
        });
        $(".zoom-reset").click(function(){
            $(".map-points").removeClass("scaled");
            $(this).removeClass("display-reset");
            //$(".map-points").removeClass("scaled");
            //$(this).removeClass("display-reset");
            $(".numbered-points .zoomTarget").each(function(){
                $(this).removeClass("active");
            })
        })

    });
    ///////////////////////////////////////////////////////////////   END DOCUMENT READY  ///////////////////////////////////////////////////////////////
    /* $(".map-wrapper").scroll(function(){
        console.log("scrolled");
        $(".zoomContainer").css("transform-origin", "0 0 !important");
    }); */
    

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
         //>=, not <=
        if (scroll >= 10) {
            //clearHeader, not clearheader - caps H
            $(".header").addClass("darkHeader");
        }else {
            $(".header").removeClass("darkHeader");
        }
    }); //missing );


    ///////////////////////////////////////////////////////////////   START WINDOW LOAD  ///////////////////////////////////////////////////////////////
   
    $(window).on('load', function(){
        if(window.location.hash) {
            eatNavigation ();
        };
        $('.interactive-listing-wrapper .filter .nav-item a').click(function(){
            setTimeout(function(){
                dataImgCurrentTab = $('.tab-pane.show').find($('.interactive-listing-links li.active')).attr('data-img');
                // alert(dataImgCurrentTab);
                $('.interactive-image img').attr('src', dataImgCurrentTab);
            }, 600);    
        });    
    });
    
    function eatNavigation (){
            var offset = -200;
            $('.interactive-listing-links li.active').removeClass('active');
            var hasImage = $(window.location.hash).attr('data-img');
            $('.interactive-image img').attr('src', hasImage);
            $(window.location.hash).addClass('active');
            $(window.location.hash).find($('.dynamic-content')).css('display', 'block');
            //Toggle main tab that includes the active content
            setTimeout(function(){
                parentTabID = $('.interactive-listing-links li.active').closest('.tab-pane').attr('aria-labelledby');
                //alert(parentTabID);
                $('.interactive-listing-wrapper .filter .nav-item a#'+ parentTabID +'').trigger( "click" );
            },600);
            //console.log(restoHash);
            setTimeout(function(){
                $('.tab-pane:not(.active)').find($('.interactive-listing-links li')).eq(0).addClass('active');
            },1000);
            setTimeout(function(){
                //smooth scroll to the anchor id
                var topOfTheActiveSection = $($(window.location.hash)).offset().top;
                //alert(topOfTheActiveSection);
                $('html, body').animate({
                    //scrollTop: ($(window.location.hash).offset().top + offset + 'px'
                    scrollTop: topOfTheActiveSection + offset + 'px'
                }, 0, 'swing');
            },950);
    }
    ///////////////////////////////////////////////////////////////   END WINDOW LOAD  ///////////////////////////////////////////////////////////////
    
    
    ///////////////   FADE IN ELEMENTS ON SCROLL  ///////////////
    var targetFadeIn = $('.fade-in-elements');
    var targetHeight = targetFadeIn.outerHeight() + 100;
    $(document).scroll(function (e) {
        var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
        if (scrollPercent >= 0) {
            targetFadeIn.css('opacity', 1 - scrollPercent);
        }
    });

    ///////////////   FADE OUT ELEMENTS ON SCROLL  ///////////////
    var targetFadeOut = $('.fade-out-elements');
    var targetHeight = targetFadeOut.outerHeight() + 100;
    $(document).scroll(function (e) {
        var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
        if (scrollPercent >= 0) {
            targetFadeOut.css('opacity', 0 - scrollPercent);
        }
    });




    ///////////////   START DATA SCROLL  ///////////////
    $.fn.moveIt = function(){
        var $window = $(window);
        var instances = [];
        
        $(this).each(function(){
        instances.push(new moveItItem($(this)));
        });
        
        window.addEventListener('scroll', function(){
        var scrollTop = $window.scrollTop();
        instances.forEach(function(inst){
            inst.update(scrollTop);
        });
        }, {passive: true});
    } 
    var moveItItem = function(el){
        this.el = $(el);
        this.speed = parseInt(this.el.attr('data-scroll-speed'));
    };
    moveItItem.prototype.update = function(scrollTop){
        this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
    }; 
    // Initialization
    $(function(){
        $('[data-scroll-speed]').moveIt();
    });
    ///////////////   END DATA SCROLL  ///////////////



    function disableScroll(){
        var lastScrollTop = $('body').scrollTop();
        $('body').addClass("lock-scroll");
        //$('body').css("top", "-" + lastScrollTop + "px");
    }
    
    function enableScroll(){
        var lastScrollTop = $('body').scrollTop();
        $('body').removeClass("lock-scroll");
        //$('body').css("top", "0px");
        //$('body').scrollTop(lastScrollTop);
    }

});
// home slider //
var swiper = new Swiper('.slider-main .swiper-container', {
    centeredSlides: true,
    effect: 'fade',
	loop: true,
    autoplay: {
        delay: 8000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
var slideActive = jQuery('.slider-main .swiper-slide').first();
var bulletActive = jQuery('.slider-main .swiper-pagination-bullet').first();
slideActive.removeClass("swiper-slide-active");
bulletActive.removeClass("swiper-pagination-bullet-active");
setTimeout(function(){
    slideActive.addClass("swiper-slide-active");
    bulletActive.addClass("swiper-pagination-bullet-active");
},500);
jQuery(function($) {
    // Here, could test if this is a touch device with not mouse, and, if so, don't enable.
    debiki.Utterscroll.enable();
 });