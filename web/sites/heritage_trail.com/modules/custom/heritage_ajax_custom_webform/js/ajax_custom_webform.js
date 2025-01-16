(function ($) {
  $(document).ajaxComplete(function () {
      // if (drupalSettings.errorcode) {
	    //   grecaptcha.reset();
      // }
      //console.log(drupalSettings.clearfilefield);
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
		$("#edit-actions-reset").css("border-color", "white");

		//$("#edit-actions-reset").after.('').after('<i class="fas fa-redo" aria-hidden="true"></i>');
  });
	// var response = grecaptcha.getResponse();
    // if(response.length == 0 || drupalSettings.errorcode) 
    // {
    //   //reCaptcha not verified	
    //   var errMsg = jQuery('.errMsg').html();
    //   jQuery('.captchafe').show().html('<span style="color:red;text-align:center; font-size: 14px;font-family:suisse_l;opacity: 0.5;letter-spacing: 2px;">'+errMsg+'</span>');
    //   return false;
    // }
}(jQuery));
jQuery(document).ready(function () {
	jQuery(".close-btn").click(function (e) {
    jQuery('.contact-wrapper').slideUp();
    jQuery('.contact-close').parent().slideUp();
   });

   jQuery('[id^=edit-actions-reset]').click(function(e){
    jQuery('.contact-close').parent().hide();
    jQuery(".ajax-progress-throbber").show();
    jQuery(".ajax-progress-throbber .message").show();

   });   
   jQuery('.contact-close').click(function(e) {
	  jQuery(this).parent().hide();//hide
  });  
	//called when key is pressed in textbox
	jQuery("#edit-phone-number").keypress(function (e) {
    //if the letter is not digit then display error and don't type anything
   if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
   return false;
   }
  });

  });
