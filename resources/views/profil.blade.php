@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<section style="font-family: Montserrat" class=" bg-white flex font-medium items-center justify-center h-screen">

    <section class="w-64 mx-auto bg-[#E7ECFF] rounded-2xl px-8 py-6 shadow-2xl">
        <div class="flex items-center justify-between">
            <span class="text-gray-400 text-sm">Profil</span>

            <!-- button tampilkan dropdown yang bisa diliat user -->
            <button id="dropdownDataProfil" data-dropdown-toggle="dropdownProfil" data-dropdown-trigger="hover" class="text-[#118EEA]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
            </button>

            <!-- DropdownProfil menu -->
            <div id="dropdownProfil" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Poin Saya</a>
                    </li>
                    <li>
                        <a href="/historyDonasi" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Donasi Saya</a>
                    </li>
                    <li>
                        <a href="/historyJual" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Penjualan Saya</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-6 w-fit mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </div>
        <div class="mt-8 ">
            <span class="text-black font-bold text-2xl tracking-wide">
                {{Auth::user()->name}}
            </span>
            <span class="text-[#F17EB8] font-medium" >
                Poin ( )
            </span>
        </div>
        
        <div class="h-1 w-full bg-black mt-3 rounded-full">
            <div class="h-1 rounded-full w-2/5 bg-[#111B47] "></div>
        </div>
        <div class="mt-6 text-white text-sm">
            <span class="text-[#6B7280] font-semibold">Donasi : {{$count_donasi}}</span>
            <p class="text-[#118EEA] font-semibold mt-2.5" >Jual : {{$count_jual}} </p>
        </div>
    </section>
</section>
@endsection