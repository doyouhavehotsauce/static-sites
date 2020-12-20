document.addEventListener("DOMContentLoaded", function(){

    // Handler when the DOM is fully loaded
    console.log('hi');
    

    function openNav() {
        console.log('openNav');
        let screenWidth = window.innerWidth;
        console.log(screenWidth);

        document.getElementById("mobile-nav-wrap").style.width = "40%";
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








const apiKey ='AIzaSyBBg5dVSSaP5BVNdqxiXPBdWVeil_EWV4Q';
const mapKey ='7c198146a85c9173';
    // Create the script tag, set the appropriate attributes
    var script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key='+ apiKey +'&map_ids='+ mapKey +'&callback=initMap';
    script.defer = true;
    // Attach your callback function to the `window` object
    window.initMap = function() {
      // JS API is loaded and available
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 41.7945623, lng: -87.6236781},
        zoom: 12,
        mapID: mapKey,
        disableDefaultUI: true
      });
      
    };

    // Append the 'script' element to 'head'
    document.head.appendChild(script);

});



