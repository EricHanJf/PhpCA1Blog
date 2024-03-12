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

<div class="about-container grid grid-cols-1 m-auto py-16">
    <div class="about-content mx-auto w-3/4">
        <h1 class="about-heading text-center text-4xl font-bold mb-6">About Me</h1>
        <p class="about-description text-center text-lg mb-6">Welcome to TravelALLWorld, your ultimate destination for travel inspiration and adventure!</p>
        <img src="https://cdn.britannica.com/61/93061-050-99147DCE/Statue-of-Liberty-Island-New-York-Bay.jpg" alt="">
        <p class="about-description text-center text-lg mb-6">At TravelALLWorld, we're a team of globetrotters who are passionate about exploring the world's wonders, tasting delicious cuisines, and meeting fascinating people along the way.</p>
        <p class="about-description text-center text-lg mb-6">Our mission is to inspire and empower you to discover the beauty of our planet, one destination at a time. Whether you're dreaming of sipping cocktails on a tropical beach, trekking through lush jungles, or wandering through ancient cities, we've got you covered.</p>
        <p class="about-description text-center text-lg mb-6">Connect with us on social media to stay updated on our latest adventures, travel tips, and exclusive offers:</p>
        <p class="about-description text-center text-lg mb-6">Follow us on social media and join our community of fellow travelers. Let's explore the world together!</p>
    </div>
</div>

<div class="container mx-auto mb-16">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 border-b">
            <h2 class="text-xl font-bold text-gray-800">Meet Our Team</h2>
        </div>
        <div class="p-4 flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 flex flex-col items-center md:items-start">
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg" alt="Team Member" class="rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-bold">Jianfeng Han</h3>
                    <p class="text-sm text-gray-600">Travel Enthusiast</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 px-4 mb-8 flex flex-col items-center md:items-start">
                <div class="about-intro-and-links bg-gray-100 rounded-lg shadow-md p-4 flex flex-col items-center md:items-start">
                    <hi>Introduction</hi>
                    <p>Hello! My name is Jianfeng Han, and I'm currently a Second year student in dundalk institute of technology. One of my greatest passions in life is traveling and exploring new places. Whether it's discovering hidden gems in my own backyard or embarking on adventures in far-off lands, I find joy in experiencing different cultures, cuisines, and landscapes.</p>
                    <p>Inspired by my love for travel and the desire to share my experiences with others, I've created this blog. Here, you'll find a collection of stories, tips, and recommendations based on my adventures around the world. From budget-friendly travel hacks to unforgettable destinations, I hope to inspire fellow wanderers to embark on their own journeys and make unforgettable memories along the way.</p>
                    <div class="social-links flex justify-end mt-4">
                        <a href="https://www.facebook.com/" class="social-link mx-2"><i class="fab fa-facebook-f"></i>Facebook</a>
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

{{-- <div>
    <p>introduction</p>
    <p>Hello! My name is [Your Name], and I'm currently a sophomore in college. One of my greatest passions in life is traveling and exploring new places. Whether it's discovering hidden gems in my own backyard or embarking on adventures in far-off lands, I find joy in experiencing different cultures, cuisines, and landscapes.
         Inspired by my love for travel and the desire to share my experiences with others, I've created this blog. Here, you'll find a collection of stories, tips, and recommendations based on my adventures around the world. From budget-friendly travel hacks to unforgettable destinations, I hope to inspire fellow wanderers to embark on their own journeys and make unforgettable memories along the way.</p>
</div> --}}