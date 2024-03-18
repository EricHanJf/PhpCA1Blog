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
                    Explore.Dream.Discover
                </h1>
                <h3 class="sm:text-white font-bold text-shadow-md pb-14">
                    This is a world travel blog featuring beautiful destinations, new experiences, and hidden places around the world
                </h3>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    start exploring
                </a>
            </div>
        </div>
    </div>
    <div class="text-3xl uppercase font-bold text-shadow-md pb-3 text-center popularBlog ">
        <h1>Popular Blog:</h1>
    </div>
    <div class="sm:grid grid-cols-3 gap-8 w-4/5 mx-auto py-8 border-b border-gray-200 bg-teal-950">
        <div class="bg-gray-200 rounded-lg overflow-hidden flex flex-col justify-between">
            <img src="https://cdn.pixabay.com/photo/2017/03/02/16/54/iceland-2111811_1280.jpg" alt="Iceland" class="w-full" style="height: 250px;">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-5">ICELAND TRAVEL GUIDE</h2>
                <?php
                $text = "Iceland is the land of fire and ice. It's a country of extreme landscapes and incredible beauty. How many places in the world can you walk on a glacier and see a volcano in the same day? One of the
                        main reasons tourists come to Iceland is to see the waterfalls; this country has some of the best waterfalls in the world, not just in terms of size but also uniqueness. The terrain in Iceland is a perfect 
                        combination of rugged mountains and melting glaciers in the summer, so there are over 10,000 waterfalls here.";
    
                if(strlen($text) > 200) {
                        $shortText = substr($text, 0, 200) . "...";
                        echo "<p class='font-extrabold text-gray-600 text-xl pb-9'>$shortText</p>";
                } else {
                    echo "<p class='font-extrabold text-gray-600 text-xl pb-9'>$text</p>";
                }
                ?>
                <div class="mt-auto">
                    <a href="/blog" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg uppercase font-bold hover:bg-blue-600">Find Out More</a>
                </div>
            </div>
        </div>
    
        <div class="bg-gray-200 rounded-lg overflow-hidden flex flex-col justify-between">
            <img src="https://img.freepik.com/premium-photo/happy-tourist-visiting-la-sagrada-familia-barcelona-spain_169160-1010.jpg" alt="Spain" class="w-full" style="height: 250px;">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-5">SPAIN TRAVEL GUIDE</h2>
                <?php
                $text = "Spain has a little bit of everything: mountains, city life, architecture, cuisine, coastlines, culture, history, and more.
                        Northern Spain is known for the cathedrals of Barcelona, and you can get a healthy dose of hiking and scenery in the mountains at Montserrat National Park.
                        With endless cultural festivals, world-class beaches, and renowned nightlife, Spain is impressive 365 days a year. I could spend years exploring Spain. 
                        From Madrid to Barcelona to Girona to Bilbao, it’s such a vibrant country. Whether you hit the slopes of the Sierra Nevada, wander the vineyards of Rioja, 
                        or worship the sun in the Canary Islands, Spain is guaranteed to impress you any day of the week.";
    
                if(strlen($text) > 220) {
                        $shortText = substr($text, 0, 220) . "...";
                        echo "<p class='font-extrabold text-gray-600 text-xl pb-9'>$shortText</p>";
                } else {
                    echo "<p class='font-extrabold text-gray-600 text-s pb-9'>$text</p>";
                }
                ?>
                <div class="mt-auto">
                    <a href="/blog" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg uppercase font-bold hover:bg-blue-600">Find Out More</a>
                </div>
            </div>
        </div>
    
        <div class="bg-gray-200 rounded-lg overflow-hidden flex flex-col justify-between">
            <img src="https://w0.peakpx.com/wallpaper/664/1017/HD-wallpaper-nice-france-old-city-resort-summer-evening-beautiful-cities-french-riviera-provence-cote-dazur.jpg" alt="france" class="w-full" style="height: 250px;">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-5">FRANCE TRAVEL GUIDE</h2>
                <?php
                $text = "France is a beautiful country known for its rich history, stunning landscapes, and exquisite cuisine. From the romantic streets of Paris to the picturesque vineyards of Bordeaux,
                        there is something for everyone in France. Explore the charming villages of Provence, relax on the beaches of the French Riviera, or visit the iconic landmarks like the Eiffel Tower and 
                        the Louvre Museum. With its diverse attractions and cultural heritage, France is a must-visit destination for any traveler.";
    
                if(strlen($text) > 220) {
                        $shortText = substr($text, 0, 220) . "...";
                        echo "<p class='font-extrabold text-gray-600 text-xl pb-9'>$shortText</p>";
                } else {
                    echo "<p class='font-extrabold text-gray-600 text-s pb-9'>$text</p>";
                }
                ?>
                <div class="mt-auto">
                    <a href="/blog" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg uppercase font-bold hover:bg-blue-600">Find Out More</a>
                </div>
            </div>
        </div>
    </div>
    

    <div class="text-center p-15 bg-black text-white">
        <div class="background-image grid grid-cols-1 m-auto relative">
            <div class="carousel relative">
                <div class="slide" id="slide5"></div>
                <div class="slide" id="slide6"></div>
                <div class="slide" id="slide7"></div>
            </div>
        </div>
        
        <h2 class="text-2xl pb-5 text-l mt-5"> 
            Explore the World with Us
        </h2>
    
        <span class="font-extrabold block text-4xl py-1">
            Adventure Planning
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Destination Exploration
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Travel Photography
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Culture Discovery
        </span>
    </div>

    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <div class="flex flex-col h-full">
                <img src="https://cdn.britannica.com/30/180130-138-4FC01CDD/Overview-Amsterdam.jpg?w=800&h=450&c=crop" alt="Recent Post 1" class="w-full" style="height:250px">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">"DISCOVERING THE DUTCH DELIGHTS: A TRAVELER'S GUIDE TO THE NETHERLANDS"</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Explore the charming cities, picturesque landscapes, and rich cultural heritage of the Netherlands. From the iconic windmills of Kinderdijk to the historic canals of Amsterdam, embark on a journey through this enchanting country.</p>
                    <a href="blog" class="block mt-auto bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded text-sm">Read More</a>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <div class="flex flex-col h-full">
                <img src="https://cdn.kimkim.com/files/a/images/883e09af9f01e59a34ad3af6e13203450b8d7095/original-465a6f2de6f9b6a9cea4522162f26de1.jpg" alt="Recent Post 2" class="w-full" style="height:250px">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">"ITALY ESCAPADE: FROM THE COLOSSEUM TO THE CANALS OF VENICE"</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Immerse yourself in the beauty and history of Italy as you wander through ancient ruins, indulge in delectable cuisine, and cruise along the romantic canals of Venice. Discover the art, architecture, and vibrant culture that make Italy a timeless destination.</p>
                    <a href="blog" class="block mt-auto bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded text-sm">Read More</a>
                </div>
            </div>
        </div>
    
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <div class="flex flex-col h-full">
                <img src="https://img.oastatic.com/img2/82954155/max/variant.jpg" alt="Recent Post 3" class="w-full" style="height:250px">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">"EXPLORING THE EMERALD ISLE: A JOURNEY THROUGH IRELAND"</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Embark on a journey through the lush green landscapes and rich history of Ireland. From the dramatic cliffs of Moher to the lively streets of Dublin, experience the charm and hospitality of the Emerald Isle. Discover hidden gems and iconic landmarks on this unforgettable adventure.</p>
                    <a href="blog" class="block mt-auto bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded text-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection