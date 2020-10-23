(function($) {
    $(document).ready(function () { 
        
        $('.mobile-menu-icon').click(function(){    
            $(this).toggleClass('active');
            $('.main-navigation').toggleClass('active');
        }); 
        $('a.next').on('click',function(event  ){
            event.preventDefault();
            var el = $(this).parent().parent().next().offset().top;
            $([document.documentElement, document.body]).animate({
                scrollTop: el
            }, 600); 
        });
        var clicks = 0;
        $('a.search-icon').on('click',function(event  ){
            event.preventDefault();
            if (clicks == 0){ 
                $('#searchform').css('display',"block");
                $(this).addClass('active');
            } else{
                if(jQuery('#searchform #s').val().length > 0 ){
                    $('#searchform #searchsubmit')[0].click();
                }
                
            }
            ++clicks;
        });
    });
  
})(jQuery);
