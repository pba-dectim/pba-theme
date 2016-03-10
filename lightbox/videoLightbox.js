jQuery( document ).ready(function($) {
    //var leVideo = '<iframe width="1280" height="720" src="https://www.youtube.com/embed/2KN-WvkDGtk" frameborder="0" allowfullscreen></iframe>';
    
    
    
    var lightboxVideo = '<div id="lightboxVideo"></div>';
    
    $( "#showVideo" ).click(function() {
       
        $(lightboxVideo).hide().appendTo("#contenu_single").fadeIn(800);
        
        $("iframe").css("display", "block");
        
        
        $('html, body').css({
            'overflow': 'hidden',
            'height': '100%'
        });
        
        $( "#lightboxVideo" ).click(function() {
            
            $("#lightboxVideo").remove();
            $("iframe").css("display", "none");
            
            $('html, body').css({
                'overflow': 'auto',
                'height': 'auto'
            });
        });
    });

});