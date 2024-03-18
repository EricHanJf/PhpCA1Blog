@extends('layouts.app')

@section('content')
    <div class="container mx-auto picture-collection">
        <h1 class="font-bold text-center my-15 text-5xl pagetitle">City Pictures Collection</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden special-feature">
                <img src="https://www.thesun.co.uk/wp-content/uploads/2023/01/houses-parliament-big-ben-double-780545902.jpg" alt="London" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">London</h2>
                    <p class="text-gray-700 description hidden">London is the capital and largest city of England and the United Kingdom. It stands on the River Thames in south-east England at the head of a 50-mile (80 km) estuary down to the North Sea. London has been a major settlement for two millennia.</p>
                </div>
            </div>
            <!-- Add more picture items -->
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720,f_auto/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/uxefkg2ssog8klq8fv8c/%E4%B8%8A%E6%B5%B7%E4%B8%AD%E5%BF%83%E5%A4%A7%E5%8E%A6%E4%B8%8A%E6%B5%B7%E4%B9%8B%E5%B7%85%E8%A7%82%E5%85%89%E5%8E%85(118%E5%B1%82)-Klook%E5%AE%A2%E8%B7%AF.jpg" alt="Shanghai" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Shanghai</h2>
                    <p class="text-gray-700 description hidden">Shanghai is one of the four municipalities under the direct administration of the central government of China, the largest city in China by population, and the second most populous city proper in the world.</p>
                </div>
            </div>
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://news.cgtn.com/news/2020-08-18/Live-What-opportunities-does-Shenzhen-City-bring-to-the-world--T31gVRIfMk/img/baccf383387e499c9c05d5e14f9beca0/baccf383387e499c9c05d5e14f9beca0.jpeg" alt="Shenzhen" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Shenzhen</h2>
                    <p class="text-gray-700 description hidden">Shenzhen is a major sub-provincial city on the east bank of the Pearl River estuary on the central coast of southern Guangdong province, People's Republic of China.</p>
                </div>
            </div>
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://www.state.gov/wp-content/uploads/2018/11/Netherlands-2114x1406.jpg" alt="Amsterdam" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Amsterdam</h2>
                    <p class="text-gray-700 description hidden">Amsterdam is the capital and largest city of the Netherlands with a population of 872,680 within the city proper, 1,558,755 in the urban area and 2,480,394 in the metropolitan area.</p>
                </div>
            </div>
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://worldstrides.com/wp-content/uploads/2019/04/Brussels.jpg" alt="Brussels" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Brussels</h2>
                    <p class="text-gray-700 description hidden">Brussels, officially the Brussels-Capital Region, is a region of Belgium comprising 19 municipalities, including the City of Brussels, which is the capital of Belgium.</p>
                </div>
            </div>
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://static.euronews.com/articles/stories/08/26/30/34/1200x675_cmsv2_1d187369-5bb5-5abb-a3f1-62b55d3e84a7-8263034.jpg" alt="Paris" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Paris</h2>
                    <p class="text-gray-700 description hidden">Paris is the capital and most populous city of France, with a population of 2,148,271 residents in an area of 105 square kilometres. Since the 17th century, Paris has been one of Europe's major centres of finance, diplomacy, commerce, fashion, science, and arts.</p>
                </div>
            </div>
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://static.euronews.com/articles/stories/08/17/48/14/1200x675_cmsv2_db4565ef-1adb-59ce-a84a-332f2df37f8d-8174814.jpg" alt="Bern" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Bern</h2>
                    <p class="text-gray-700 description hidden">Bern is the de facto capital of Switzerland, referred to by the Swiss as their "federal city", in German "Bundesstadt", French "ville fédérale", and Italian "città federale". With a population of 142,493, Bern is the fifth-most populous city in Switzerland.</p>
                </div>
            </div>
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://media.cntraveller.com/photos/611bf0fb7048754865719e3a/16:9/w_2580,c_limit/view-of-the-liffey-from-liberty-hall-dublin-ireland-conde-nast-traveller-4feb16-Tara-Morgan.jpg" alt="Dublin" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Dublin</h2>
                    <p class="text-gray-700 description hidden">Dublin is the capital and largest city of Ireland. Situated on a bay on the east coast, at the mouth of the River Liffey, it lies within the province of Leinster. It is bordered on the south by the Dublin Mountains, a part of the Wicklow Mountains range.</p>
                </div>
            </div>
            <div class="picture-item bg-gray-200 rounded-lg overflow-hidden">
                <img src="https://www.italia.it/content/dam/tdh/en/interests/lazio/roma/roma-in-48-ore/media/20220127150143-colosseo-roma-lazio-shutterstock-756032350.jpg" alt="Rome" class="w-full h-auto" style="height: 300px;">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Rome</h2>
                    <p class="text-gray-700 description hidden">Rome is the capital city and a special comune of Italy, as well as the capital of the Lazio region. The city has been a major human settlement for almost three millennia.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
