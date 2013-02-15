 //creates icon
 var eases = Array('easeOutQuad', 'easeInQuad', 'easeInSine' , 'easeOutSine' , 'easeOutCubic' , 'easeInCubic')
 function createIcon(id, left, top, iconsArray, speed){
     
     //if speed is undefinited set it randomly
     speed = (typeof speed === "undefined") ? Math.floor((Math.random()*1000)+1000) : speed;
     
        var icon = new Icon(id, left, top, speed , eases[Math.floor(Math.random()*eases.length)]);
        iconsArray.push(icon);
     }


function Icon(id, left, top, speed, ease, onAfter){

   //Offsets set the starting point of the icon to the top left corner of the house image instead of the top left of the boundary
   var topOffset = 111;
   var leftOffset = 614;
   this.id = id;
   this.top = top + topOffset;
   this.left = left + leftOffset;
   this.speed = speed;
   this.ease = ease;
  
  
}


Icon.prototype.animate = function(onAfter){
 
    $(this.id).animate({left: this.left + 'px', top: this.top + 'px'}, this.speed, this.ease, onAfter);
    
    
}

