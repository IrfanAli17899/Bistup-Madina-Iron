window.onscroll = function() {FixedNavBar()};
    
    var navbar = document.getElementById("navcontainer");
    var sticky = navbar.offsetTop;
    
    function FixedNavBar() {
      var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
      if(w > 992)
      {
      if(window.pageYOffset >= sticky) {
         navbar.classList.add("sticky")
        } 
        else 
        {
          navbar.classList.remove("sticky");
        }
      }
      else{
          navbar.classList.remove("sticky");
      }
    }
