$(document).ready(function() {
    
 
    
    resizeBoundary();
    
    $(window).resize(function(){
        resizeBoundary();
    });
    
    function resizeBoundary(){
        var windowWidth = $(window).width();
        var boundaryMargin = 0 - ((1900 - windowWidth) / 2) ;//calculate amount to move boundary left (boundary - windowWidth /2) 
        $('#home-content-center').css('width', windowWidth);
        $('#home-content-boundary').css('margin-left', boundaryMargin);
    }
    
    //populate ending points for icons and push into icons array
     var icons = [];
     //longest speed of overal transition
     var speed = 2000;
     
     /*
     var icon1 = new Icon("#icon-1", 26 , 226, 1000, 'easeOutQuad');
     icons.push(icon1);
     var icon2 = new Icon("#icon-2", 112 , 211, 1000, 'easeOutQuad');
     icons.push(icon2);
     var icon3 = new Icon("#icon-3", 267 , 242, 1000, 'easeOutQuad');
     */
    createIcon('#icon-1', 26, 226, icons);
    createIcon('#icon-2', 112, 211, icons);
    createIcon('#icon-3', 267, 242, icons);
    createIcon('#icon-4', 326, 239, icons);
    createIcon('#icon-5', 557, 155, icons);
    createIcon('#icon-6', 507, 209, icons);
    createIcon('#icon-7', 467, 209, icons);
    createIcon('#icon-8', 436, 205, icons);
    createIcon('#icon-9', 394, 225, icons);
    createIcon('#icon-10', 326, 187, icons);
    createIcon('#icon-11', 80, 189, icons);
    createIcon('#icon-12', 26, 191, icons);
    createIcon('#icon-13', 266, 119, icons);
    createIcon('#icon-14', 402, 205, icons);
    createIcon('#icon-15', 520, 182, icons);
    createIcon('#icon-16', 490, 183, icons);
    createIcon('#icon-17', 26, 119, icons);
    createIcon('#icon-18', 62, 121, icons);
    createIcon('#icon-19', 131, 91, icons);
    createIcon('#icon-20', 139, 166, icons);
    createIcon('#icon-21', 202, 121, icons);
    createIcon('#icon-22', 326, 119, icons);

    createIcon('#icon-23', 399, 119, icons);
    createIcon('#icon-24', 474, 119, icons);
    createIcon('#icon-25', 497, 91, icons);
    createIcon('#icon-26', 460, 85, icons);
    createIcon('#icon-27', 393, 61, icons);
    createIcon('#icon-28', 414, 87, icons);
    createIcon('#icon-29', 373, 98, icons);
    createIcon('#icon-30', 363, 58, icons);
    createIcon('#icon-31', 323, 82, icons);
    createIcon('#icon-32', 199, 60, icons);
    createIcon('#icon-33', 230, 62, icons);
    createIcon('#icon-34', 76, 91, icons);
    createIcon('#icon-35', 206, 74, icons);
    createIcon('#icon-36', 303, 24, icons);
    createIcon('#icon-37', 277, 35, icons);
    createIcon('#icon-38', 353, 34, icons, speed, onAfter);
     
    //fire after house is built
    function onAfter(){
        $('#home-h1').fadeIn(1000, function(){
          $('#green-button').fadeIn(1000, function(){
              $('#footer-home').animate({'bottom': 0});
          });
      });
    }
     
    
     
    // Run all the home animations
    if ($('html').hasClass('lt-ie9'))
      {
        $('#big-logo-container').show(0, function(){
            setTimeout(function() {
                $('#big-logo-container').find('#lowes-text').fadeOut(0); }, speed);
                 });
      }
    else
        $('#big-logo-container').fadeIn(speed, function(){
            $(this).find('#lowes-text').fadeOut(500);
        });
    //animate all the icons except the last one because we need to add onAfter function (probably a better way to to this but don't have time to figure it out right now'
    numIcons = icons.length; 
    for(x=0;x < numIcons-1;x++)
        icons[x].animate()
    
      icons[numIcons-1].animate(onAfter);
      
      
      //make menu drop down
      $('#home-top-menu').animate({top: 0}, speed /2)

    });
    
  