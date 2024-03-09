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
            {{-- <h3 class="sm:text-white font-bold text-shadow-md pb-14">
                This is a world travel blog featuring beautiful destinations, new experiences, and hidden places around the world
            </h3>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                start exploring
            </a> --}}
        </div>
    </div>
</div>
<div class="about-container grid grid-cols-1 m-auto">
    <div class="about-content">
        <h1 class="about-heading text-center text-4xl font-bold mb-6">About Us</h1>
        <p class="about-description text-center text-lg mb-6">Welcome to TravelExplorer, your ultimate destination for travel inspiration and adventure!</p>
        <p class="about-description text-center text-lg mb-6">At TravelExplorer, we're a team of globetrotters who are passionate about exploring the world's wonders, tasting delicious cuisines, and meeting fascinating people along the way.</p>
        <p class="about-description text-center text-lg mb-6">Our mission is to inspire and empower you to discover the beauty of our planet, one destination at a time. Whether you're dreaming of sipping cocktails on a tropical beach, trekking through lush jungles, or wandering through ancient cities, we've got you covered.</p>
        <p class="about-description text-center text-lg mb-6">Connect with us on social media to stay updated on our latest adventures, travel tips, and exclusive offers:</p>
        <div class="social-links flex justify-center">
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i>Face book</a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i>twiter</a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i>ins</a>
            <a href="#" class="social-link"><i class="fab fa-pinterest"></i>pinterest</a>
        </div>
        <p class="about-description text-center text-lg mb-6">Follow us on social media and join our community of fellow travelers. Let's explore the world together!</p>
    </div>
</div>
@endsection