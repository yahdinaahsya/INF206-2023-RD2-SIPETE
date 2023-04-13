@extends('layouts.app')

@section('content')
<div class= "pl-14 pt-2"> 
    <div>
        <h1 class="pt-20 mb-5 font-[arial] text-6xl font-extrabold  text-[#0B63F8]  ">Dibuka 24 Jam</h1>
    </div>
    <div>
        <h1 class=" mb-5 font-[arial] font-extrabold tracking-tighter text-6xl">Kelola Limbah Tekstil</h1>
    </div>
    <div>
        <h1 class=" pl-1 mb-3 ">Ayo kelola limbah tekstilmu disini</h1>
    </div>
    <div class="pt-4"> 
        <button
            type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kelola Sekarang
        </button>
    </div>
</div>

<div class="text-center pt-32">
    <div>
        <h1 class=" font-[arial] font-extrabold text-2xl mb-9 text-[#118EEA]">About<span class="font-[arial] font-extrabold text-[#000000]"> Us</span></h1>
        <h2 class=" font-[arial] font-extrabold tracking-wide ">Kami ada 24 jam non-stop untuk melayani anda dalam menangani sampah tekstil</h2>
    </div>
    <div class="pt-16">
        <img class="h-auto max-w-full mx-auto" src="images/pengolahan.jpg">
    </div>
</div>


@endsection