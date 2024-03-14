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
        
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/03/02/16/54/iceland-2111811_1280.jpg" width="500" alt="">
        </div>
        <div>
            <img src="https://img.freepik.com/premium-photo/happy-tourist-visiting-la-sagrada-familia-barcelona-spain_169160-1010.jpg" width="500" alt="">
        </div>
        <div>
            <img src="https://img.freepik.com/premium-photo/happy-tourist-visiting-la-sagrada-familia-barcelona-spain_169160-1010.jpg" width="500" alt="">
        </div>
        

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-2xl font-extrabold py-4 text-gray-600">
                ICELAND TRAVEL GUIDE
            </h2>
            {{-- <p class="py-8 text-gray-500 text-s">
                Overview
            </p> --}}
            <?php
                $text = "Iceland is the land of fire and ice. It's a country of extreme landscapes and incredible beauty. How many places in the world can you walk on a glacier and see a volcano in the same day? One of the
                        main reasons tourists come to Iceland is to see the waterfalls; this country has some of the best waterfalls in the world, not just in terms of size but also uniqueness. The terrain in Iceland is a perfect 
                        combination of rugged mountains and melting glaciers in the summer, so there are over 10,000 waterfalls here.";
    
                if(strlen($text) > 200) {
                     $shortText = substr($text, 0, 200) . "...";
                     echo "<p class='font-extrabold text-gray-600 text-s pb-9'>$shortText</p>";
                } else {
                 echo "<p class='font-extrabold text-gray-600 text-s pb-9'>$text</p>";
                }
                ?>

            <a  href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl"> Find Out More</a>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-2xl font-extrabold py-4 text-gray-600">
                SPAIN TRAVEL GUIDE
            </h2>
            {{-- <p class="py-8 text-gray-500 text-s">
                Overview
            </p> --}}
            <?php
                $text = "Spain has a little bit of everything: mountains, city life, architecture, cuisine, coastlines, culture, history, and more.
                        Northern Spain is known for the cathedrals of Barcelona, and you can get a healthy dose of hiking and scenery in the mountains at Montserrat National Park.
                        With endless cultural festivals, world-class beaches, and renowned nightlife, Spain is impressive 365 days a year. I could spend years exploring Spain. 
                        From Madrid to Barcelona to Girona to Bilbao, it’s such a vibrant country. Whether you hit the slopes of the Sierra Nevada, wander the vineyards of Rioja, 
                        or worship the sun in the Canary Islands, Spain is guaranteed to impress you any day of the week.";
    
                if(strlen($text) > 200) {
                     $shortText = substr($text, 0, 200) . "...";
                     echo "<p class='font-extrabold text-gray-600 text-s pb-9'>$shortText</p>";
                } else {
                 echo "<p class='font-extrabold text-gray-600 text-s pb-9'>$text</p>";
                }
                ?>

            <a  href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl"> Find Out More</a>
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
        
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection