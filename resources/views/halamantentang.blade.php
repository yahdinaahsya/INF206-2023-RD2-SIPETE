@extends('layouts.app')

@section('content')

    <div id="default-carousel" class="pt-16 relative w-full" data-carousel="slide">

        <div class="relative overflow-hidden rounded-lg md:h-96 pt-16">

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="#">
                <img src="/images/tentangs1.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="..." >
                <h3 class="absolute font-bold top-5 left-10 uppercase mb-5 font-[arial] text-6xl font-extrabold text-blue">
                <br> Olah Limbah 
                <br>Tekstil
                </h3>
            </a>
        </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="#">
                <img src="/images/tentangs2.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                <h3 class="absolute font-bold top-5 left-10 uppercase mb-5 font-[arial] text-6xl font-extrabold text-blue">
                    <br> Bersama kita 
                    <br>BISA !!
                </h3>
            </a>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="#">
                <img src="/images/tentangs3.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                <h3 class="absolute text-blue font-bold top-5 left-10 uppercase mb-5 font-[arial] text-6xl font-extrabold">
                    <br> Wujudkan Mimpi
                </h3>
            </a>    
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="#">
                <img src="/images/tentang1.jpg" class="absolute block  w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                <h3 class="absolute text-white font-bold top-5 left-10 uppercase mb-5 font-[arial] text-6xl font-extrabold text-blue">
                    <br> 
                </h3>
            </a>
            </div>
        </div>

        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>

        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
        </div>  
    </div>
    

    <div>

        {{-- Mulai Statistik Indonesia --}}
        <br>
        <ul>
            <h1 class="h1ini" style="font-size: 30px; line-height: 1; overflow-y: visible; margin-bottom: 4px;">
                <span><span>Angka Penyebaran
                        Limbah Tektil di Indonesia 2022</span><br></span>
            </h1>
            <p id="pMap" style="font-size: 12.8px; line-height: 1.2; overflow-y: hidden;"><span class="markdown-text-wrap"
                    style="font-size: 12.8px; line-height: 1.2;"><span class="markdown-text-wrap__line"><span>Penyebaaran
                            Limbah
                            Tekstil di Indonesia.</span></span></span></p>

            <svg id="map"></svg>


        </ul>
        <div id="legend-container"></div>
        {{-- <script src="https://d3js.org/d3.v7.min.js"></script> --}}
        <script src="{{ asset('dataStat/js/d3.v7.min.js') }}"></script>
        <script>
            const width = 900;
            const height = 380;

            const svg = d3.select("#map").attr("width", width).attr("height", height);

            const projection = d3
                .geoMercator()
                .center([120, -4])
                .scale(1000)
                .translate([width / 2, height / 2]);

            const path = d3.geoPath(projection);

            const colorScale = d3.interpolateRgb("  #67e218  ", "  #eb3112  ");

            const legendColors = d3.scaleSequential(colorScale).domain([20, 35]);

            const legend = d3
                .select("#legend-container")
                .append("svg")
                .attr("width", 200)
                .attr("height", 0)
                .attr("class", "legend");

            const legendRects = legend
                .selectAll("rect")
                .data(d3.range(20, 36))
                .join("rect")
                .attr("x", (d, i) => i * 30)
                .attr("y", 0)
                .attr("width", 30)
                .attr("height", 10)
                .attr("fill", (d) => legendColors(d));

            const legendTexts = legend
                .selectAll("text")
                .data(d3.range(20, 36))
                .join("text")
                .attr("x", (d, i) => i * 30 + 15)
                .attr("y", 25)
                .text((d) => d);

            d3.csv("{{ asset('dataStat/rating.csv') }}").then((data) => {
                const rateById = {};
                console.log(data);
                data.forEach((d) => {
                    rateById[d.id] = {
                        province: d.province,
                        rating: parseFloat(d.rating),
                    };
                });

                d3.json("{{ asset('dataStat/gadm41_IDN_1.json') }}").then((mapData) => {
                    svg
                        .selectAll("path")
                        .data(mapData.features)
                        .join("path")
                        .attr("fill", (d) => {
                            const id = d.properties.id
                                .toString(); // mengambil nilai properti "id" dari objek fitur
                            const parsedId = parseInt(id); // mengubah nilai "id" menjadi number
                            const rating = rateById[parsedId] ? rateById[parsedId].rating : 0;
                            console.log(rating);
                            return colorScale((rating - 20) / 15);
                        })
                        .attr("d", path)
                        .append("title")
                        .text((d) => {
                            const id = d.properties.id;
                            const parsedId = parseInt(id);
                            const province = rateById[parsedId] ?
                                rateById[parsedId].province :
                                "Unknown";
                            const rating = rateById[parsedId] ?
                                rateById[parsedId].rating :
                                "0";
                            return `${province}: ${rating}%`;
                        });
                });
            });
        </script>

        {{-- Batas Statistik Indonesia --}}
        <div class="text-center pt-20">
            <h1 class="font-[arial] font-extrabold text-4xl">Tujuan Program</h1>
        </div>
        <div class="flex flex-wrap pt-8 justify-center">
            <div class="w-full md:w-1/4 px-6 py-8">
                <div class="bg-blue-500 text-white rounded-lg shadow-lg">
                    <div class="px-6 py-4">
                        <h2 class="text-center font-bold text-2xl mb-4">Misi</h2>
                        <p class="text-lg text-justify">Disini kami hadir menjadi solusi ketidaksempurnaan bank sampah
                            dengan cara menggandeng dan juga menghubungkan secara langsung 3 komponen utama dalam pengelolaan sampah,
                            Kurangnya edukasi dan pengetahuan bagaimana pakaian itu pergi harus segera diatasi.
                            Meningkatkan kesadaran masyarakat tentang apa dampak limbah tekstil terhadap lingkungan,
                            serta memberikan solusi untuk mengelola limbah tekstil dengan cara yang ramah lingkungan. </p>
                    </div>
                </div>

            </div>
            <div class="w-full md:w-1/4 px-6 py-8">
                <div class="bg-blue-500 text-white rounded-lg shadow-lg">
                    <div class="px-6 py-4">
                        <h2 class="text-center font-bold text-2xl mb-4">Visi</h2>
                        <p class="text-lg text-justify">Kami menyalurkan kembali barang-barang yang masih layak pakai ke
                            orang yang lebih membutuhkan (Reuse), menyulap pakaian usang menjadi wujud baru yang lebih segar
                            misal baju usang menjadi tas keren (Recycle), dan pengguna sistem akan mengurangi konsumsi
                            pakaian terlalu banyak karena nantinya tidak perlu membeli baju baru memakai baju bekas saja
                            sudah keren karena nantinya di sistem kami akan dibuat fitur membeli barang bekas(Reduce).</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center pt-18">
            <h3 class="font-[arial] font-extrabold text-xl">Itulah Visi Misi SIPETE dalam mencegah sebaran sampah tekstil di
                lingkungan</h3>
        </div>

        <div class="flex justify-center mt-10">

            <a href="{{ url('register') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 w-50 rounded">Sign Up</a>
        </div>

        <div>
            <div class="flex justify-center mt-24">
                <p class="font-[arial] font-extrabold text-4xl">Our Team</p>
            </div>

            <div class="flex flex-wrap justify-center mt-10">
                <div class="w-1/5 px-8">
                    <img class="h-64 object-cover rounded-full" src="images/yahdina.jpeg">
                    <p class="mt-8 text-center font-bold text-xl">Yahdina Ahsya</p>
                </div>

                <div class="w-1/5 px-8">
                    <img class="h-64 object-cover rounded-full" src="images/nitiya.jpeg">
                    <p class="mt-8 text-center font-bold text-xl">Nitiya Rihadatul 'Aisy</p>
                </div>

                <div class="w-1/5 px-8">
                    <img class="h-64 object-cover rounded-full" src="images/ilmi.jpeg">
                    <p class="mt-8 text-center font-bold text-xl">Khairil Ilmi</p>
                </div>

                <div class="w-1/5 px-8">
                    <img class="h-64 object-cover rounded-full" src="images/riyann.jpeg">
                    <p class="mt-8 text-center font-bold text-xl">Riyan Farhan Ramadhan</p>
                </div>

                <div class="w-1/5 px-8">
                    <img class="h-64 object-cover rounded-full" src="images/nizar.jpeg">
                    <p class="mt-8 text-center font-bold text-xl">M. Nizar Asykary</p>
                </div>
            </div>
        </div>
        @endsection