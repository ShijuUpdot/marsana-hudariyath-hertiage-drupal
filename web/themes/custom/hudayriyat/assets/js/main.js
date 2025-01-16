jQuery(function (i) {
  i(document).ready(function () {
  var e = i(".dropdown-select"),
          t = (i(".dropdown-select-ul"), i(".dropdown-select-ul li"));
      e.on("click", function () {
          i(this).parent(".dropdown-container").toggleClass("active");
      }),
          t.on("click", function () {
              var e = i(this);
              if (!e.hasClass("optgroup")) {
                  var t = e.parent("ul"),
                      o = t.siblings(".dropdown-select"),
                      s = e.html(),
                      n = e.attr("data-value"),
                      a = "#" + t.attr("data-role");
                      if(t.attr("data-role")=='edit-locations'  && s.indexOf('All Locations')==-1) {
                        s = '<img src="/images/static/location.svg">' + s;
                      }
          if(t.attr("data-role")=='edit-aexperience' || t.attr("data-role")=='edit-sort-by') {
            i('.dark-overlay').addClass("d-block");
            i('.ajax-progress-fullscreen').hide();
                        i(a).val(n).change();
                      }
                  e.siblings("li").removeClass("selected"), e.siblings("li").children().attr("checked", !1), e.addClass("selected"), e.children().attr("checked", !0), i(a).val(n), o.html(s);
              }
              e.parent("ul").parent().toggleClass("active");
          }),
          i("#menu-burger").click(function () {
              var e = i("#overlay-menu"),
                  t = i("#menu-burger .menu-icon"),
                  o = i("#menu-burger");
              (body = i("body")),
                  body.addClass("overflow-hidden"),
                  e.hasClass("open")
                      ? (e.removeClass("open"), t.removeClass("open"), o.removeClass("open"), body.removeClass("overflow-hidden"))
                      : (e.addClass("open"), t.addClass("open"), o.addClass("open"), body.addClass("overflow-hidden"));
          }),
          (log = i(".details-rating .rating-txt span")),
          i('.details-rating [type*="radio"]').change(function () {
              var e = i(this);
              log.html(e.attr("value"));
          }),
          i(".close-toolbar").click(function () {
              i(".covid-bar").slideUp();
          }),
          i(".close-toolbar-booking").click(function () {
              i(".booking-bar").slideUp();
          }),
          i("input.form-checkbox").click(function () {
              i(this).is(":checked") ? i(this).parent().addClass("active") : i(this).parent().removeClass("active");
          });
  }),
      i(window).on("load", function () {
          i(window).width() < 600 && i(".mobileShowLess").hide();
      }),
      (i.fn.moveIt = function () {
          var e = i(window),
              o = [];
          i(this).each(function () {
              o.push(new t(i(this)));
          }),
              window.addEventListener(
                  "scroll",
                  function () {
                      var t = e.scrollTop();
                      o.forEach(function (e) {
                          e.update(t);
                      });
                  },
                  { passive: !0 }
              );
      });
  var t = function (e) {
      (this.el = i(e)), (this.speed = parseInt(this.el.attr("data-scroll-speed")));
  };
  (t.prototype.update = function (e) {
      this.el.css("transform", "translateY(" + -e / this.speed + "px)"), this.el.css("margin-bottom", -e / this.speed + "px");
  }),
      i(function () {
          i("[data-scroll-speed]").moveIt();
      }),
      (i.fn.moveItX = function () {
          var e = i(window),
              o = [];
          i(this).each(function () {
              o.push(new s(i(this)));
          }),
              window.addEventListener(
                  "scroll",
                  function () {
                      var t = e.scrollTop();
                      o.forEach(function (e) {
                          e.update(t);
                      });
                  },
                  { passive: !0 }
              );
      });
  var s = function (e) {
      (this.el = i(e)), (this.speed = parseInt(this.el.attr("data-scroll-speed-x")));
  };
  (s.prototype.update = function (e) {
      this.el.css("transform", "translateX(" + -e / this.speed + "px)");
  }),
      i(function () {
          i("[data-scroll-speed-x]").moveItX();
      });
     
    
      jQuery('.filter-button-group').on( 'click', 'li', function() {
          //jQuery('.card-holder').show();
          jQuery('.card-holder').removeClass("d-none");
          var filter = jQuery(this).attr("data-filter"); // get the value of the input, which we filter on
          if(filter === "all"){
            //jQuery('.card-holder').show();
            jQuery('.card-holder').removeClass("d-none");
          }
          else{
            //jQuery('.card-holder:not([data-tag=' + filter + '])').css('display','none');
            jQuery('.card-holder:not([data-tag=' + filter + '])').addClass("d-none");
          }
          jQuery('.tab-pane').each(function(){
            var hideElts = jQuery(this).find('.card-holder').not('.d-none').length;
            var msg = jQuery(this).find('.msg');
            msg.addClass('d-none');
            if(hideElts == 0){
              msg.removeClass('d-none');
            }
          });
      })

});

/* index page js -- changes by PNWS */

jQuery(function (i) {
  var ww = i(window);
  ww.on('load', function () { 
  var current_progress = 0;
  var interval = setInterval(function () {
    current_progress += 1;
    jQuery("#dynamic")
      .css("width", current_progress + "%")
      .attr("aria-valuenow", current_progress)
      .text(current_progress + "% Complete");
    if (current_progress > 100) {
      clearInterval(interval);
    }
  }, 55);



  ////////////////////Preloader-cookie setup/////////////////////////////

  function createCookie(name, value, days, path) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else expires = "";
    document.cookie = name + "=" + value + expires + "; path=" + path;
  }

  function readCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
  }

  var cookiePopup = readCookie('seen-hudayriyat');

  if (cookiePopup != null){// && cookiePopup == 'yes') {
    showPageDirectly();
  } else {
      // Set/update cookie
      var cookieExpiry = 30;
      var cookiePath = "/";
      createCookie('seen-hudayriyat', 'dyes', cookieExpiry, cookiePath);
      //cookiebarBox.style.display = 'block';
      preloadFunction();
  }
jQuery('#menu-burger').click(function(e) {
    jQuery(this).css('z-index','200');
});

////////////////////Preloader-cookie setup/////////////////////////////


  ////////////////// RANDOM PRELOADER //////////////////
  var preloaderId = ['orange-bg', 'blue-bg', 'red-bg', 'navy-bg'];
  var m = Math.floor(Math.random() * preloaderId.length);
  var preloaderClass = preloaderId[m]
  jQuery('#preloader').addClass(preloaderClass);
  
  ////////////////// Initialize Swiper //////////////////
  var titles = ["321 Sports", "Circuit X", "Bike Park", "OCR Park", "Hudayriyat Courts", "Hudayriyat Beach", "Jogging Track", "Cycling Track"];

  var swiperH = new Swiper('.swiper-container-main', {
    //direction: 'vertical',
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    preventClicks: false,
    preventClicksPropagation: false,
    touchRatio: 0,
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination-main',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (titles[index]) + '</span>';
      },
    },
    breakpoints: {
      640: {
        direction: 'horizontal',
      },
      1024: {
        direction: 'vertical',
      }
    },
  });
  var swiperV = new Swiper('.swiper-container-v', {
    //direction: 'vertical',
    observer: true,
    observeParents: true,
    touchRatio: 0,
    preventClicks: false,
    preventClicksPropagation: false,
    navigation: {
      nextEl: '.swiper-arrows-v .swiper-button-next',
      prevEl: '.swiper-arrows-v .swiper-button-prev',
    },
    breakpoints: {
      640: {
        direction: 'horizontal',
        slidesPerView: 1,
        spaceBetween: 0,
      },
      1024: {
        direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 30,
      }
    },
  });
  swiperH.on('slideChange', function () {
    jQuery('.swiper-pagination-bullet-active').prevAll().addClass("before");
    jQuery('.swiper-pagination-bullet-active').nextAll().removeClass("before");
    jQuery('.swiper-pagination-bullet-active').removeClass("before");
  });
  
  var swiperFull = new Swiper('.breaking-img .swiper-container', {
    pagination: {
      cssMode: true,
      el: '.swiper-pagination',
      clickable: true,
    },
    //effect: 'fade',
  });
  
  jQuery('.swiper-menu .swiper-container').each(function (index) {
    var mySwiper = new Swiper(jQuery(this)[0],{
      navigation: {
        nextEl: '.swiper-menu .swiper-button-next',
        prevEl: '.swiper-menu .swiper-button-prev',
      },
      observer: true,
      observeParents: true,
      touchRatio: 0,
      preventClicks: false,
      preventClicksPropagation: false,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 30,
        }
      }
    });
  });

  jQuery('.swiper-menu .swiper-container').each(function (index) {
    var mySwiper = new Swiper(jQuery(this)[0],{
      navigation: {
        nextEl: '.swiper-menu .swiper-button-next',
        prevEl: '.swiper-menu .swiper-button-prev',
      },
      observer: true,
      observeParents: true,
      touchRatio: 0,
      preventClicks: false,
      preventClicksPropagation: false,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 30,
        }
      }
    });
  });

});
});



/////////////////// PRELOADER //////////////
var myVar;
function preloadFunction() {
  document.getElementById('menu-burger').style.opacity = 0;
  //showPreloader();
  myVar = setTimeout(displaying, 6000);
  myVar = setTimeout(showPage, 6100);
}
function showPreloader() {
  document.getElementById('preloader').classList.add('blue-bg');
  document.getElementsByTagName("body")[0].classList.add("blue-bg");
  document.getElementsByTagName("body")[0].classList.add("overflow-hidden");
  document.getElementById("preloader").style.visibility = "visible";
  document.getElementById("preloader").style.opacity = 1;
}
function showPage() {
  document.getElementsByTagName("body")[0].classList.remove("overflow-hidden");
  document.getElementById("preloader").style.visibility = "hidden";
  document.getElementById("preloader").style.opacity = 0;
  document.getElementById("preloader").style.transition = "visibility 0s, opacity 0.5s linear";

  // document.getElementById("page-content").style.visibility = "visible";
  // document.getElementById("page-content").style.opacity = 1;
}
function showPageDirectly() {
  document.getElementById('menu-burger').style.opacity = 1;
  document.getElementsByTagName("body")[0].classList.remove("overflow-hidden");
   if(document.getElementById("preloader")) {
             document.getElementById("preloader").style.visibility = "hidden";
             document.getElementById("preloader").style.opacity = 0;
             document.getElementById("preloader").style.transition = "visibility 0s, opacity 0.5s linear";
         }
    //document.getElementById("preloader").style.transition = "visibility 0s, opacity 0.5s linear";

  // document.getElementById("page-content").style.visibility = "visible";
  // document.getElementById("page-content").style.opacity = 1;
}
function displaying() {
  document.getElementById('menu-burger').style.opacity = 1;

  // document.getElementById("page-content").style.visibility = "visible";
  // document.getElementById("page-content").style.opacity = 1;

  document.getElementsByTagName("body")[0].classList.remove("overflow-hidden");
}
/////////////////// NEWS FEED //////////////
jQuery(function () {
  /*
  var result = [
    { shortCode: "COudt72pgia", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COudt72pgia.jpg"},
    { shortCode: "COqBYSkp8Jm", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COqBYSkp8Jm.jpg"},
    { shortCode: "COmnjkiJubP", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COmnjkiJubP.jpg" },
    { shortCode: "COkqfi9J8yC", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COkqfi9J8yC.jpg"},
    { shortCode: "COiOj5Xp8dH", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COiOj5Xp8dH.jpg"},
    { shortCode: "COfN74DJt3P", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COfN74DJt3P.jpg" },
    { shortCode: "COdSJaeJJHR", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COdSJaeJJHR.jpg"},
    { shortCode: "COXkhPeJ5Ni", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COXkhPeJ5Ni.jpg"},
    { shortCode: "COSux_iJxKn", displayUrl:"https://stmodonprod.blob.core.windows.net/sthudayriyatprodblob/hudayriyatInsta/COSux_iJxKn.jpg" }
  ];
  jQuery.each(result, function (i, item) {
        if (i < 9) {
                  jQuery('.insta' + i + ' img').attr('src', item.displayUrl);
                  jQuery('.insta' + i).attr('href', 'https://www.instagram.com/p/' + item.shortCode)
               }
  });
  
  jQuery.ajax({
    type: "GET",
    dataType: "json",
    url: "https://www.instagram.com/hudayriyat.island/?__a=1",
    error: function () {
        jQuery(".instafeeds-section").hide();
      //console.log('Unable to load instagram feed.');
    },
    success: function (data) {
      var result = data.graphql.user.edge_owner_to_timeline_media.edges;
      jQuery.each(result, function (i, item) {
        if (i < 9) {
         jQuery('.insta' + i + ' img').attr('src', result[i].node.display_url);
         jQuery('.insta' + i).attr('href', 'https://www.instagram.com/p/' + result[i].node.shortcode)
        }
      })
    }
  });*/
});

 
/* end of index page js */

/* amenity js starts */

jQuery( document ).ready( function() {

  if(jQuery(".addtoany_share").is(":visible")) { 
    jQuery(".addtoany_share").addClass('share'); 
  }

  if(window.location.href.indexOf("/play") >= 0 || window.location.href.endsWith('/en') || window.location.href.endsWith('/en/')) {
    document.getElementById('menu-burger').style.opacity = 0;
  }
  //Google Maps JS
  //Set Map
  function initialize() {
    var loclong=document.getElementById('loclong'), loclat=document.getElementById('loclat');
    if(loclong != null && loclat != null) {
      loclong = document.getElementById('loclong').value;
      loclat = document.getElementById('loclat').value;
    }
    loclong = loclong ? loclong : 54.3412497;
    loclat = loclat ? loclat : 24.4251255;
    var myLatlng = new google.maps.LatLng(loclat, loclong);
    var mapOptions = {
      zoom: 12,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    //Callout Content
    var contentString = 'Some address here..';
    //Set window width + content
    var infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 500
    });

    //Add Marker
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'image title'
    });

    google.maps.event.addListener(marker, 'click', function () {
      infowindow.open(map, marker);
    });

    //Resize Function
    google.maps.event.addDomListener(window, "resize", function () {
      var center = map.getCenter();
      google.maps.event.trigger(map, "resize");
      map.setCenter(center);
    });
  }
  if (typeof google === 'object' && typeof google.maps === 'object') {
      google.maps.event.addDomListener(window, 'load', initialize); 
  }

  var galleryThumbs = new Swiper('.swiper-gallery .gallery-thumbs', {
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 32,
      }
    },


    preventClicksPropagation:false,
    threshold:100,
    //freeMode: true,
    // watchSlidesVisibility: true,
    // watchSlidesProgress: true,
  });

  var galleryTop = new Swiper('.swiper-gallery .gallery-top', {
    spaceBetween: 10,
    allowTouchMove:false,
    preventClicks:false,
    preventClicksPropagation:false,
    thumbs: {
      swiper: galleryThumbs
    }
  });
  galleryTop.on('slideChange', function () {
    jQuery('.swiper-gallery .gallery-top video').css('display','block');
  });


});

/*amenity js ends */

var modNumber = jQuery(".modal-listing-wrapper li").length;

    jQuery('.next-modal').click(function(){
      var thisMod = jQuery(this).closest('li');
      var modCounter = thisMod.index();
      if(modCounter >= modNumber)
      {
        return false;
      }
      else{
        if(thisMod.is(':last-child')){
          thisMod.find('.close').click();
        }else{
          thisMod.find('.close').click();
          nextID = thisMod.next().attr("id");
          //anchorParent = jQuery('[data-target="#'+ nextID +'"]').closest(".grid-item");
          //console.log(anchorParent.html());
          /* if(!anchorParent.css("display","none")){
          } */

          jQuery('[data-target="#'+ nextID +'"]').click();
          modCounter = thisMod.index();
        }
      }
    });

    jQuery('.prev-modal').click(function(){
      var thisMod = jQuery(this).closest('li');
      var modCounter = thisMod.index();
      if(modCounter >= 0)
      {
        if(thisMod.is(':first-child')){
          thisMod.find('.close').click();
        }else{
          thisMod.find('.close').click();
          prevID = thisMod.prev().attr("id");
          jQuery('[data-target="#'+ prevID +'"]').click();
          modCounter = thisMod.index();
        }
      }
    });
    var localeData;
    if(jQuery('html').attr('lang') == 'ar') {
      localeData = {
              "format": "MM/DD/YYYY",
              "separator": " - ",
              "applyLabel": "ﺎﺨﺘﻳﺍﺭ", //Apply
              "cancelLabel": "ﺈﻠﻏﺍﺀ", //Cancel
              "fromLabel": "ﻢﻧ", //From
              "toLabel": "ﺈﻟﻯ", //To
              "customRangeLabel": "ﻢﺨﺼﺻ", //Custom
              "weekLabel": "W",
              "daysOfWeek": [
                "الأحد",
                "الاثنين",
                "الثلاثاء",
                "الأربعاء",
                "الخميس",
                "الجمعة",
                "السبت"
            ],
            "monthNames": [
                "يناير",
                "فبراير",
                "مارس",
                "أبريل",
                "مايو",
                "يونيو",
                "يوليو",
                "أغسطس",
                "سبتمبر",
                "أكتوبر",
                "نوفمبر",
                "ديسمبر"
            ],
              "firstDay": 1
          };

      } else {
        var localeData = {
          "format": "MM/DD/YYYY",
          "separator": " - ",
          "applyLabel": "Apply",
          "cancelLabel": "Cancel",
          "fromLabel": "From",
          "toLabel": "To",
          "customRangeLabel": "Custom",
          "weekLabel": "W",
          "daysOfWeek": [
              "Su",
              "Mo",
              "Tu",
              "We",
              "Th",
              "Fr",
              "Sa"
          ],
          "monthNames": [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December"
          ],
          "firstDay": 1
        }
      }

    (function (jQuery) {
      jQuery(document).ajaxComplete(function () {
          var defDate = moment().subtract(1, 'years').format('MM/DD/YYYY') + ' - ' + moment().add(1, 'D').format('DD/MM/YYYY');
          jQuery("input[id^='edit-submit-all-news-list']").hide(); 
          if(jQuery('input[name="field_news_listing_title_value"]').val() != undefined) {
            [startDateVal, endDateVal] = jQuery('input[name="field_news_listing_title_value"]').val().split(' - ');
          } else {
            [startDateVal, endDateVal] = defDate.split(' - ');
          }
          jQuery('input[name="field_news_listing_title_value"]').daterangepicker({
            opens: 'left',
            locale: localeData,
            startDate: startDateVal,
            endDate: endDateVal,
          }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          }); 
          var defDate = moment().format('MM/DD/YYYY') + ' - ' + moment().add(3, 'M').format('DD/MM/YYYY');
          jQuery("input[id^='edit-submit-events-listing']").hide(); 
          if(jQuery('input[name="field_hero_image_title_value"]').val() != undefined) {
            [startDateVal, endDateVal] = jQuery('input[name="field_hero_image_title_value"]').val().split(' - ');
          } else {
            [startDateVal, endDateVal] = defDate.split(' - ');
          }
          jQuery('input[name="field_hero_image_title_value"]').daterangepicker({
            opens: 'left',
            locale: localeData,
            startDate: startDateVal,
            endDate: endDateVal,
          }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          }); 
    
    //Offers page changes
    jQuery('.dark-overlay').removeClass("d-block");
    jQuery('.dark-overlay').addClass("d-none");
    jQuery("label[for^='edit-sort-by']").hide();
    jQuery('.ajax-progress-fullscreen').hide();
    if(jQuery("select[id^='edit-aexperience'] option:selected").val()>0) {
      var selval = jQuery("select[id^='edit-aexperience'] option:selected").val();
      jQuery(".experiencefm .dropdown-select-ul li").each(function() {
        if(jQuery(this).attr("data-value")==selval) {
          jQuery(".experiencefm .dropdown-select").html(jQuery(this).html());
        }				
      });
    }
    if(jQuery("select[id^='edit-sort-by'] option:selected").val() != '') {
      var selval = jQuery("select[id^='edit-sort-by'] option:selected").val();
      jQuery(".sortbyfm .dropdown-select-ul li").each(function() {
        if(jQuery(this).attr("data-value")==selval) {
          jQuery(".sortbyfm .dropdown-select").html(jQuery(this).html());
        }				
      });
    }
       });
    }(jQuery));



    jQuery(function() {
      jQuery('.noresults').hide();
      var defDate = moment().subtract(1, 'years').format('MM/DD/YYYY') + ' - ' + moment().add(1, 'D').format('DD/MM/YYYY');
      if(jQuery('input[name="field_news_listing_title_value"]').val() != undefined && jQuery('input[name="field_news_listing_title_value"]').val() != defDate) {
        [startDateVal, endDateVal] = jQuery('input[name="field_news_listing_title_value"]').val().split(' - ');
      }
      jQuery('input[name="field_news_listing_title_value"]').daterangepicker({
          opens: 'left',
          locale: localeData,
          startDate: moment().subtract(1, 'years').format('MM/DD/YYYY'),
          endDate: moment().add(1, 'M').format('MM/DD/YYYY')
        }, function(start, end, label) {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
      var defDate = moment().format('MM/DD/YYYY') + ' - ' + moment().add(3, 'M').format('DD/MM/YYYY');
      if(jQuery('input[name="field_hero_image_title_value"]').val() != undefined && jQuery('input[name="field_hero_image_title_value"]').val() != defDate) {
        [startDateVal, endDateVal] = jQuery('input[name="field_hero_image_title_value"]').val().split(' - ');
      }
      jQuery('input[name="field_hero_image_title_value"]').daterangepicker({
          opens: 'left',
          locale: localeData,
          startDate: moment().add(-10, 'd').format('MM/DD/YYYY'),
          endDate: moment().add(3, 'M').format('MM/DD/YYYY')
        }, function(start, end, label) {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });		
  jQuery('.offers .button').click(function() {
    jQuery('.dark-overlay').addClass("d-block");
  });
  });

  