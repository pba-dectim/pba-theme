// JavaScript Document

jQuery(document).ready(function ($) {
	accordion();
     jQuery('#cat').on('change', function () {
		 var value = jQuery("#cat option:selected").val();
		 jQuery('#ficheInfo').html('');
		  jQuery('#contenuRecherche').html('<img id="ajax-gif" src="' + pluginDir + '/img/ajax-loader.gif" alt="' + "chargement de l'information" + '" />');
          jQuery('#ajax-gif').fadeOut(0, function () {
                jQuery(this).fadeIn(300, function () {
                    var data = {
                        'action': 'listing_ajax_action',
                        'cat_id': value
                    }
                      jQuery.post(ajaxurl, data, function (reponse) {
                        jQuery('#ajax-gif').fadeOut(300, function () {
                            this.remove();
                            jQuery('#listing-content-ajax').html(reponse);
                            jQuery('#listing-content-ajax').fadeOut(0, function(){
                                jQuery(this).fadeIn(300,function() {
									accordion();
								});
                            });
                            
                        });
                    });
                });
            });
	 });
	
});

function accordion() {
    $( "#accordion" ).accordion({
      collapsible: true,
	   active: false,
	   heightStyle: "content"
    });
 }