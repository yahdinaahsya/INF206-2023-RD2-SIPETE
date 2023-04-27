@extends('layouts.app')

@section('content')

<div class="grid md:grid-cols-2 xl:mx-20 my-20 w-full">
    <div class="pl-20 my-10 sm:my-20 items-end object-left ">
    <h1 class=" mb-5 font-[arial] font-extrabold tracking-tighter text-6xl">
        Mari Berpartisipasi</h1>
    <h1 class=" mb-5 font-[arial] text-6xl font-extrabold  text-[#0B63F8]  ">
        Kelola Limbah <br> Tekstil Disini</h1>
        <p class="text-[#505F98] text-2xl text-justify font-Arial ml-0">
            Jadilah Bagian Dari Kami
        </p>
        <br>
        <p>
            <a href="/#" class ="bg-[#118EEA] inline block p-3 px-19 text-center text-white font-medium font-Arial ml-0">
                Tentang Kami
            </a>
        </p>
    </div>
    
    <div >
        <div>
            <br><br>
            <div>
                <img class="ml-20" src="{{('images/bajuKardus.png') }}">
            </div>
        </div>
    </div>
</div>

<div class="my-20 w-full">
    <p class="text-2xl text-[#224957] text-center font-extrabold font-[arial] ">Ayo Kelola Limbah Tekstil Anda Disini</p>
    <br>
    <div class="flex sm:flex-nowrap flex-wrap justify-center">
        <div class="p-10 my-10 mx-5 sm:mx-36 bg-gray-200 hover:bg-gray-300 rounded-3xl">
            <p class="font-bold text-xl text-center font-Arial">Donasi</p><br>
            <a href="/halamandonasi">
                <div class="m-auto">
                <img
                src="{{asset('images/donasi.png')}}"
                class="h-auto max-w-full rounded-lg object-center ml-10"
                alt="..." />
                </div><br>
                <button
                type="button"
                class="inline-block rounded-full bg-[#505F98] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    Donasikan Pakaianmu Disini
                </button>  
            </a>
        </div>
        <div class="p-10 my-10 mx-5 sm:mx-36 bg-gray-200 hover:bg-gray-300 rounded-3xl">
            <p class="font-bold text-xl text-center font-Arial">Daur Ulang</p><br>
            <a href="/halamanprosedur">
                <div class="m-auto">
                <img
                src="{{asset('images/reduce.png')}}"
                class="h-auto max-w-full rounded-lg ml-10"
                alt="..." />
                </div><br>
                <button
                type="button"
                class="inline-block rounded-full bg-[#505F98] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Jual Limbah Kainmu Disini
                </button>  
            </a>
        </div>
    </div>
</div>

@endsection