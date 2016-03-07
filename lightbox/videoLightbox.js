jQuery( document ).ready(function($) {
    var leVideo = '<iframe width="1280" height="720" src="https://www.youtube.com/embed/2KN-WvkDGtk" frameborder="0" allowfullscreen></iframe>';
    
    
    $( "#showVideo" ).click(function() {
        $("#contenu_single").append(leVideo);
        
        $( "body" ).click(function() {
            $("#contenu_single").remove(leVideo);
        });
    });
    
    
    
});