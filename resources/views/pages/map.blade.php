@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto relative">
    <div class="carousel relative">
        <div class="slide" id="slide1"></div>
        <div class="slide" id="slide2"></div>
        <div class="slide" id="slide3"></div>
        <div class="slide" id="slide4"></div>
    </div>
    <div class="flex text-gray-100 pt-10 absolute top-0 left-0 w-full h-full">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Travel Map
            </h1>
        </div>
    </div>
</div>
<div class="m-auto gap-10 py-16 w-4/5">
    <h1 class="sm:text-black text-2xl uppercase font-bold text-shadow-md text-center" >Welcome to Europe! Below, you can see the coordinates of some major cities:</h1>
    <div id="map-container">
        <div id="map"></div>
    </div>
</div>
<div class="mx-auto w-3/4 bg-gradient-to-r from-blue-100 to-blue-200 p-8 rounded-lg shadow-lg">
    <h1 class="welcome-heading text-3xl font-semibold text-indigo-800 mb-6">Welcome to My Travel Adventures</h1>
    <div class="welcome-text text-indigo-800">
        <p>Welcome to my travel blog, where I share my experiences and adventures from around the globe. As an avid traveler, I've had the privilege of visiting some of the most beautiful and captivating destinations in Europe.</p>
        <p>Join me on a journey through picturesque cities, charming villages, and breathtaking landscapes as I explore the wonders of this diverse continent. From the romantic streets of Paris to the vibrant culture of Madrid, each destination holds its own unique charm and allure.</p>
        <p>As you navigate through my blog, you'll discover firsthand accounts of my adventures, insider tips on must-visit attractions, and recommendations for hidden gems off the beaten path. Whether you're planning your next getaway or simply seeking inspiration for your wanderlust, I hope my travel stories ignite your passion for exploration and discovery.</p>
        <p>So, grab your passport and let's embark on an unforgettable journey together. Welcome to my travel adventures!</p>
    </div>
</div>

    <script>
        function initMap() {
            var mapOptions = {
                center: { lat: 51.5074, lng: -0.1278 }, 
                zoom: 5 
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var cities = [
                { name: 'Paris', location: { lat: 48.8566, lng: 2.3522 }, image: '/image/paris.jpg' },
                { name: 'Dublin', location: { lat: 53.3498, lng: -6.2603 }, image: '/image/dublin.jpg' },
                { name: 'London', location: { lat: 51.5074, lng: -0.1278 }, image: '/image/london.jpg' },
                { name: 'Madrid', location: { lat: 40.4168, lng: -3.7038 }, image: '/image/madrid.jpg' },
                { name: 'Reykjavik', location: { lat: 64.1466, lng: -21.9426 }, image: '/image/reykjavik.jpg' },
                { name: 'Zurich', location: { lat: 47.3769, lng: 8.5417 }, image: '/image/zurich.jpg' },
                { name: 'Florence', location: { lat: 43.7696, lng: 11.2558 }, image: '/image/florence.jpg' }
            ];

            // Add markers for each city
            cities.forEach(function(city) {
                var marker = new google.maps.Marker({
                    position: city.location,
                    map: map,
                    title: city.name
                });

                var infowindow = new google.maps.InfoWindow({
                    content: '<div><strong>' + city.name + '</strong><br><img src="' + city.image + '" style="max-width: 200px;"></div>'
                });

                marker.addListener('mouseover', function() {
                    infowindow.open(map, marker);
                });

                marker.addListener('mouseout', function() {
                    infowindow.close();
                });
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoURqguj-ghlk7AqxvjNo-Y_t8MhP0D4s&callback=initMap" async defer></script>
@endsection
