@extends('layouts.app')

@section('content')

<div class="pt-16">
    <img class="h-screen max-w-full mx-auto" src="images/tentang1.jpg">
</div>

<div>
    <div class="text-center pt-20">
        <h1 class="font-[arial] font-extrabold text-4xl">Tujuan Program</h1>
    </div>

    <div class="flex flex-wrap pt-8 justify-center">
        <div class="w-full md:w-1/4 px-12 py-8">
            <div class="bg-blue-500 text-white rounded-lg shadow-lg">
                <div class="px-6 py-4">
                    <h2 class="text-center font-bold text-2xl mb-4">Misi</h2>
                    <p class="text-lg text-center">Disini kami hadir menjadi solusi ketidak sempurnaan bank sampah dengan cara menggandeng dan menghubungkan secara langsung 3 komponen utama pengelolaan sampah. Kurangnya edukasi dan pengetahuan akan dikemanakan pakaian itu pergi harus segera diatasi.</p>
                </div>
            </div>

        </div>
        <div class="w-full md:w-1/4 px-6 py-8">
            <div class="bg-blue-500 text-white rounded-lg shadow-lg">
                <div class="px-6 py-4">
                    <h2 class="text-center font-bold text-2xl mb-4">Visi</h2>
                    <p class="text-lg text-center">Kami menyalurkan kembali barang-barang yang masih layak pakai ke orang yang lebih membutuhkan (Reuse), menyulap pakaian usang menjadi wujud baru yang lebih segar misal baju usang menjadi tas keren (Recycle), dan pengguna sistem akan mengurangi konsumsi pakaian terlalu banyak karena nantinya tidak perlu membeli baju baru memakai baju bekas saja sudah keren karena nantinya di sistem kami akan dibuat fitur membeli barang bekas(Reduce).</p>   
                </div>
            </div>
        </div>

    </div>
    <div class="text-center pt-18">
        <h3 class="font-[arial] font-extrabold text-xl">Itulah Visi Misi SIPETE dalam mencegah sebaran sampah tekstil di lingkungan</h3>
    </div>
    <div class="flex justify-center mt-10">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 w-50 rounded">Sign Up</button>
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

@endsection
