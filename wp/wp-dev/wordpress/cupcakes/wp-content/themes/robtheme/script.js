$( document ).ready(function() {

    // Handler when the DOM is fully loaded
    console.log('hi');
    

    function openNav() {
        console.log('openNav')
        document.getElementById("mobile-nav-wrap").style.width = "20vw";
      }
      
      function closeNav() {
          console.log('closeNav')
        document.getElementById("mobile-nav-wrap").style.width = "0%";
      }

    document.getElementById('mobile-nav-wrap').addEventListener('click', closeNav);
    document.getElementById('show-menu').addEventListener('click', openNav);
    
    // function menu(){
    //     const nav = document.getElementById('wrapper');
    
    //     nav.style.transform = "translateX(0)";
    //     element.classList.toggle("show")
    
    //     nav.classList.remove('nav-hide').add('nav-show');
    
    // }
    
    
    // document.getElementById("nav-menu").addEventListener("click", () => {
    //     if(document.getElementById("wrapper").className == "nav-hide")
    //         document.getElementById("wrapper").className = "nav-show";
    //     else
    //         document.getElementById("wrapper").className = "nav-hide";
    //   });



});



