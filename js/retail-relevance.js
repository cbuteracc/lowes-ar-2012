$(document).ready(function() {
    
    var currSlide=0;
    var numSlides = $('#slide-holder .slide').length;
    
    $('#slide-holder').cycle({
          fx:      'scrollLeft',
          easing:  'easeOutQuad',
          speed: 500, 
         
          timeout: 0
    });


    $('.icons-container a').click(function(e){

            //get slide number of icon clicked
            link = $(this).attr('href');
            num = link.substr(link.length - 1);
            
            if (num > currSlide)
                $('#slide-holder').cycle(num-1, "scrollLeft");
            else
                 $('#slide-holder').cycle(num-1, "scrollRight");
             
             currSlide=num-1;
             e.preventDefault();
    });
    
    
    

    
    
        //left arrow is clicked - PREVIOUS
    $('#arrow-left').click(function(){
         if (currSlide==0)
            currSlide = numSlides-1;
        else
            currSlide--;
         
         $('#slide-holder').cycle(currSlide, "scrollRight");
          
    });
    
    //right arrow is clicked - NEXT
    $('#arrow-right').click(function(){
        
         if (currSlide == numSlides-1)
            currSlide=0;
        else
            currSlide++;
        
         $('#slide-holder').cycle(currSlide, "scrollLeft");
    });
});
