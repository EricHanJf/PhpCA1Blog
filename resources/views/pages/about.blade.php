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
                    About me
                </h1>
            </div>
        </div>
    </div>

    <div class="about-container m-auto gap-10 py-16 w-4/5">
        {{-- <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200"> --}}
        <div class="imgforAbout">
            <img src="https://cdn.britannica.com/61/93061-050-99147DCE/Statue-of-Liberty-Island-New-York-Bay.jpg"
                alt="" height="300px">
        </div>
        <div class="about-content mx-auto w-3/4 leading-6">
            {{-- <h1 class="about-heading text-center text-4xl font-bold mb-6">About Me</h1> --}}
            <h1 class="about-heading text-center text-2xl font-bold mb-6">Welcome to TravelALLWorld, your ultimate
                destination for travel inspiration and adventure!</h1>
            <h1 class="about-heading text-1xl font-bold mb-6">At TravelALLWorld, we're a team of globetrotters
                who are passionate about exploring the world's wonders, tasting delicious cuisines, and meeting fascinating
                people along the way.</h1>
            <h1 class="about-heading text-1xl font-bold mb-6">Our mission is to inspire and empower you to
                discover the beauty of our planet, one destination at a time. Whether you're dreaming of sipping cocktails
                on a tropical beach, trekking through lush jungles, or wandering through ancient cities, we've got you
                covered.</h1>
            <h1 class="about-heading text-1xl font-bold mb-6">Connect with us on social media to stay updated on
                our latest adventures, travel tips, and exclusive offers</h1>
            {{-- <h1 class="about-description text-center text-base font-extrabold mb-6 w-3/4">Follow us on social media and join our community of fellow travelers. Let's explore the world together!</p> --}}
            <h1 class="about-heading text-1xl font-bold mb-6">Follow us on social media and join our community
                of fellow travelers. Let's explore the world together!</p>
        </div>
    </div>

    <div class="container mx-auto mb-16">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4 border-b">
                <h2 class="text-xl font-bold text-gray-800">Author</h2>
            </div>
            <div class="author-container p-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 flex flex-col items-center md:items-start">
                    <div class="bg-gray-100 rounded-lg shadow-md p-4 flex flex-col items-center">
                        <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg"
                            alt="Team Member" class="rounded-full  mx-auto mb-6">
                        <h3 class="text-lg font-bold">Jianfeng Han</h3><br>
                        <p class="text-sm text-gray-600">Travel Enthusiast</p>
                    </div>
                </div>
                <div class="max-w-full md:w-1/2 lg:w-2/3 px-4 mb-8 items-center md:items-start">
                    <div
                        class="about-intro-and-links bg-gray-100 rounded-lg shadow-md p-4 items-center md:items-start leading-8">
                        <h1 class=" text-xl font-bold text-gray-800 text-center ">Introduction</h1>
                        <p>Hello! My name is Jianfeng Han, and I'm currently a Second year student in Dundalk institute of
                            Technology. One of my greatest passions in life is traveling and exploring new places. Whether
                            it's discovering hidden gems in my own backyard or embarking on adventures in far-off lands, I
                            find joy in experiencing different cultures, cuisines, and landscapes.</p>
                        <p>Inspired by my love for travel and the desire to share my experiences with others, I've created
                            this blog. Here, you'll find a collection of stories, tips, and recommendations based on my
                            adventures around the world. From budget-friendly travel hacks to unforgettable destinations, I
                            hope to inspire fellow wanderers to embark on their own journeys and make unforgettable memories
                            along the way.</p>
                        <div class="social-links flex mt-4">
                            <a href="https://www.facebook.com/" class="social-link mx-2"><i
                                    class="fab fa-facebook-f"></i>Facebook</a>
                            <a href="#" class="social-link mx-2"><i class="fab fa-twitter"></i>twitter</a>
                            <a href="#" class="social-link mx-2"><i class="fab fa-instagram"></i>instagram</a>
                            <a href="#" class="social-link mx-2"><i class="fab fa-pinterest"></i>pinterest</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
