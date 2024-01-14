const navbar = document.querySelector(".fixed-top");
window.onscroll = () => {
    if  (window.scrollY > 100){
        navbar.classList.add("scroll-nav-active");
        navbar.classList.add("text-nav-active");
        navbar.classList.remove("navbar-dark");
    } else {
        navbar.classList.remove("scroll-nav-active");
        navbar.classList.add("navbar-dark");
    }   
}

function initMap() {
    var lokasiPangkalanA = {lat: -6.2088, lng: 106.8456}; 
    var lokasiPangkalanB = {lat: -7.2575, lng: 112.7521}; 

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: lokasiPangkalanA
    });

    var markerA = new google.maps.Marker({
        position: lokasiPangkalanA,
        map: map,
        title: 'Pangkalan A'
    });

    var markerB = new google.maps.Marker({
        position: lokasiPangkalanB,
        map: map,
        title: 'Pangkalan B'
    });
}