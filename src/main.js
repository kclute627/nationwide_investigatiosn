const body = document.getElementById("body");

const ham = document.getElementById("ham");
const ham1 = document.getElementById("ham1");
const ham2 = document.getElementById("ham2");
const ham3 = document.getElementById("ham3");

const drawer = document.getElementById("drawer");

let drawerOpen = false

document.addEventListener("DOMContentLoaded", ()=>{
    

    ham.addEventListener("click", ()=>{
        if(drawerOpen){
            hamClose();
            drawerCloseFunction();

        }else {
            hamOpen();
            drawerOpenFunction()
        }
    })




})


const hamClose = () => {
    ham2.classList.toggle("opacity-0");
    ham.classList.add("space-y-1");
    ham3.classList.remove("-translate-y-1")


    ham1.classList.remove("rotate-45");
    ham3.classList.remove("-rotate-45");
   
   

   
   
    drawerOpen = false

}

const hamOpen = () => {
    
    // get the lines on top of one another 
    ham2.classList.toggle("opacity-0");
    ham.classList.remove("space-y-1");
    ham3.classList.add("-translate-y-1")

    // make lines in an x shape 

    

    ham1.classList.add("rotate-45");
    ham3.classList.add("-rotate-45");

    
    
    drawerOpen = true



}

const drawerOpenFunction = () => {
    body.classList.add("overflow-y-hidden");
    drawer.classList.toggle("translate-x-full")

}

const drawerCloseFunction = () => {

    body.classList.remove("overflow-y-hidden");
    drawer.classList.toggle("translate-x-full")

}




const currentYear = new Date().getFullYear();


console.log("Current Year:", currentYear);

document.addEventListener("DOMContentLoaded", () => {
    const year = document.getElementById("year");
    console.log("Year element:", year);
    if (year) {
        year.innerHTML = currentYear.toString();
        console.log("Year set successfully.");
    } else {
        console.log("Element with ID 'year' not found.");
    }
});




 function initMap() {
     var location = {
         lat: 41.877970,
         lng: -87.625390
     }; // Change to your location's latitude and longitude.
     var map = new google.maps.Map(document.getElementById('googleMap'), {
         zoom: 13,
         center: location
     });
     var marker = new google.maps.Marker({
         position: location,
         map: map
     });
     
    
     
 }
 document.addEventListener("DOMContentLoaded", () => {

    if(document.getElementById('googleMap')){
        initMap() 

    }
 });

 const services = document.getElementById("services");
 const serviceBox = document.getElementById("service-box");


document.addEventListener("DOMContentLoaded", () => {

   if (services) {
       services.addEventListener("mouseenter", () => {
            serviceBox.classList.remove("opacity-0", "invisible");
            serviceBox.classList.add("opacity-100", "visible");
       })

       serviceBox.addEventListener("mouseleave", () => {
           serviceBox.classList.add("opacity-0");
           serviceBox.classList.remove("opacity-100");
       });
       serviceBox.addEventListener("transitionend", (event) => {
           // Check if the transition that ended is for the opacity property
           if (event.propertyName === "opacity" && window.getComputedStyle(serviceBox).opacity == "0") {
               serviceBox.classList.add("invisible");
           }
       });
   }
});
