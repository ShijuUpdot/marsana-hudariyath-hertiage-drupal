(function ($) {
  $(document).ajaxComplete(function () {
      if (drupalSettings.clearfilefield) {
	    var rmid = $('input[name=upload_resume_remove_button]').attr("id");
        if (rmid != "" && typeof rmid !== 'undefined') {
          drupalSettings.clearfilefield = 0;    
          $('#' + rmid).trigger("click");
          $('#' + rmid).trigger("mousedown");
        }
      }
      if($(".messages--status").is(":visible")) {
        $(".aarr").attr('href',($('html').attr('lang') == 'en' ? '/en/contact' : '/ar/contact'));
        $(".formcolumn").html( $(".messages--status").html());
        $(window).scrollTop(475); 
      }
      if($(".load-more").is(":visible")) {
        if($('.go-search-results').is(":visible"))
          jQuery(window).scrollTop(jQuery('.go-search-results').offset().top-1150);
      } else {
        if($('.go-search-results').is(":visible"))
          jQuery(window).scrollTop(jQuery('.go-search-results').offset().top-1050);
      }
		$("#edit-actions-reset").css("border-color", "white");
    $(".ajax-progress-throbber").html("Wait...");
    $("input[id^='edit-actions-reset']").click(function(e) {
      if($(".search-result-message").is(":visible")) { $(".search-result-message").html(''); }
      if($(".search-results").is(":visible")) { $(".search-results").html('');  }
      if($(".load-more").is(":visible")) { $(".load-more").removeClass('d-block').addClass('d-none'); }
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
}(jQuery));
jQuery('#edit-country').change(function(){
  var sel_var = jQuery("#edit-country option:selected").text();
  var value = sel_var.split(/[()]/);
  if(value.length > 1)
    jQuery(".input-group-text").html(value[value.length-2]);
  else
    jQuery(".input-group-text").html('0');
});
jQuery(document).ready(function () {
  if (typeof(document.getElementById("edit-inquiry")) != 'undefined' && document.getElementById("edit-inquiry") != null) {
    document.getElementById("edit-inquiry").options[0].remove();
  }
  if (typeof(document.getElementById("edit-country")) != 'undefined' && document.getElementById("edit-country") != null) {
    document.getElementById("edit-country").options[0].remove();
  }
  jQuery('.contact-close').click(function(e) {
	  jQuery(this).parent().hide();//hide
  });
    jQuery('.contact-success').css('display', 'none');

	//called when key is pressed in textbox
	jQuery("#edit-phone-number").keypress(function (e) {
	   //if the letter is not digit then display error and don't type anything
	   if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		return false;
	  }
   });
   jQuery('.load-more').click(function(e) {
    jQuery('input[name ="pageno"]').val(parseInt(jQuery('input[name ="pageno"]').val())+1);
    jQuery("input[id^='edit-actions-submit']").trigger("click",['Trigger']);
  });
    jQuery("#edit-experience").change(function(e) {
    jQuery('input[name ="pageno"]').val(1);
  });
  jQuery("#edit-locations").change(function(e) {
    jQuery('input[name ="pageno"]').val(1);
  }); 
  jQuery("#edit-search-text").change(function(e) {
    jQuery('input[name ="pageno"]').val(1);
  }); 
  jQuery("#edit-amenities").change(function(e) {
    jQuery('input[name ="pageno"]').val(1);
  });
  jQuery("#edit-amenity-tags").change(function(e) {
    jQuery('input[name ="pageno"]').val(1);
  });
  jQuery("input[id^='edit-actions-submit']").click(function(e, from){
    jQuery('.dark-overlay').addClass('d-block');
    if (from == null) {
      jQuery('input[name ="pageno"]').val(1);
    }
  });


  jQuery("<th class='expandcollapsedates align-right'><span class='paragraph-toggle'>Expand/Collapse all Event Dates</span></th>").insertBefore(jQuery('#field-event-multi-dates-values'));

  jQuery('.expandcollapsedates').click(function(){
    for (var i = 1; i < 20; i++) {
      jQuery("#edit-field-event-multi-dates-"+i+"-value").parent().parent().parent().parent().slideToggle('slow');
    }
  });
  jQuery(".expandcollapsedates").trigger("click",['Trigger']);
});