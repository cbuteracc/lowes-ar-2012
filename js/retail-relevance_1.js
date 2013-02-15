$(document).ready(function() {
    
    var currSlide=0;
    var numSlides = $('#slide-holder .slide').length;
    
    
    
    //initialize slide
    //move the last item before first item, just in case user click prev button
    $('#slide-holder div.slide:first').before($('#slide-holder div.slide:last'));
     
    //set the default item to the correct position 
    $('#slide-holder').css({'margin-left' : -780});
    
  
  
    //icon is clicked
    $('.icons-container a').click(function(e){
      
        //get slide number of icon clicked
        link = $(this).attr('href');
        num = link.substr(link.length - 1);
        
        
        //calculate the distance between curr slide and slide number clicked
        difference = (num-1) - currSlide;
        
        
        //animate left or right depending on the difference
        if (difference==1)//new slide is the next slide
        {
           animateNextSlide();
        }
        else if (difference==-1)//new slide is the previous slide
        {
           animatePrevSlide();
        }
        else if(difference > 1)//jump 1 slide and then animate right since new slide is 2 greater
        {
            jumpRight(1)
            animateNextSlide();
        }
        else//jump 1 slide and then animate left since slide is 2 left
        {
            
            jumpLeft(1);
            animatePrevSlide();
        }
        
        e.preventDefault();
    })
    
   
    

    
    //left arrow is clicked
    $('#arrow-left').click(animatePrevSlide);
    
    //right arrow is clicked
    $('#arrow-right').click(animateNextSlide);
    
    
    
    
    
    
    
     //advance to the right without animating - num is a placeholder incase we need to jump more than one slide in the future
    function jumpRight(num){
        
        $('#slide-holder div.slide:last').after($('#slide-holder div.slide:first'));
         if (currSlide == numSlides-1)
            currSlide=0;
        else
            currSlide++;
        
        
    }
    
    //advance to the left without animating - num is a placeholder incase we need to jump more than one slide in the future
    function jumpLeft(num){
        $('#slide-holder div.slide:first').before($('#slide-holder div.slide:last'));
        if (currSlide==0)
            currSlide = numSlides-1;
        else
            currSlide--;
    }
    
    //advance to the right while animating
    function animateNextSlide(){
        if (currSlide == numSlides-1)
            currSlide=0;
        else
            currSlide++;

        $('#slide-holder').animate({marginLeft: '-1560px'}, function(){
             $('#slide-holder div.slide:last').after($('#slide-holder div.slide:first'));
             $('#slide-holder').css({'margin-left' : '-780px'});
        });
    }

    //advance to the left while animating
    function animatePrevSlide(){
         if (currSlide==0)
            currSlide = numSlides-1;
        else
            currSlide--;
        
      
        $('#slide-holder').animate({marginLeft: '0px'}, function(){
             $('#slide-holder div.slide:first').before($('#slide-holder div.slide:last'));
             $('#slide-holder').css({'margin-left' : '-780px'});
        });
    }
    
    
});
