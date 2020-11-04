
document.addEventListener("DOMContentLoaded", function(){
    // Handler when the DOM is fully loaded
    
    
    
    function menu(){
        const nav = document.getElementById('wrapper');
    
        nav.style.transform = "translateX(0)";
        element.classList.toggle("show")
    
        nav.classList.remove('nav-hide').add('nav-show');
    
    }
    
    
    document.getElementById("nav-menu").addEventListener("click", () => {
        if(document.getElementById("wrapper").className == "nav-hide")
            document.getElementById("wrapper").className = "nav-show";
        else
            document.getElementById("wrapper").className = "nav-hide";
      });





  });