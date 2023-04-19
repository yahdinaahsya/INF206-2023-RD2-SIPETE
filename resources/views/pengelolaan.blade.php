@extends('layouts.app')

@section('content')

    <div class="grid md:grid-cols-2 xl:mx-20 my-20 w-full">
        <div class="pl-20 my-10 sm:my-20 items-end object-left">
            <p class="text-5xl font-medium font-Roboto m-4 ml-0 ">
                Mari Berpartisipasi
            </p>
            <p class="text-5xl text-[#6495ED] font-medium font-Roboto color-blue m-4 ml-0">Kelola Limbah<br>Tekstil Disini
            </p>
            <p class="text-[#505F98] text-justify font-Roboto">
                Jadilah Bagian Dari Kami
            </p>
            <br>
            <p>
                <a href="/#" class="bg-[#505F98] inline block p-3 px-19 text-center text-white font-medium font-Roboto">
                    Tentang Kami
                </a>
            </p>
        </div>
        <div>
            <img class="object-right" src="{{ 'images/bajuKardus.png' }}">
        </div>
    </div>

    <div class="my-20 w-full">
        <p class="text-2xl text-[#1E90FF] text-center font-bold font-Roboto ">Ayo Kelola Limbah Tekstil Anda Disini</p>
        <br>
        <div class="flex sm:flex-nowrap flex-wrap justify-center">
            <div class="p-10 my-10 mx-5 sm:mx-36 bg-gray-200 hover:bg-gray-300 rounded-3xl">
                <p class="font-bold text-xl text-center font-Roboto">Donasi</p>
                <a href="formDonasi">
                    <div class="m-auto">
                        <img src="{{ asset('images/donasi.png') }}" class="h-auto max-w-full rounded-lg object-center"
                            alt="..." />
                    </div><br>
                    <button type="button"
                        class="inline-block rounded-full bg-[#505F98] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Donasikan Pakaianmu Disini
                    </button>
                </a>
            </div>
            <div class="p-10 my-10 mx-5 sm:mx-36 bg-gray-200 hover:bg-gray-300 rounded-3xl">
                <p class="font-bold text-xl text-center font-Roboto">Daur Ulang</p>
                <a href="formJual">
                    <div class="m-auto">
                        <img src="{{ asset('images/donasi.png') }}" class="h-auto max-w-full rounded-lg" alt="..." />
                    </div><br>
                    <button type="button"
                        class="inline-block rounded-full bg-[#505F98] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Jual Limbah Kainmu Disini
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="my-15 w-full bg-blue-900">
        <div class="flex sm:flex-nowrap flex-wrap justify-center">
            <div class="p-10 my-10 mx-5 sm:mx-36 rounded-3xl">
                <p class="font-bold text-xl text-white font-Roboto">
                    SIPETE<br>
                    Address : Jl.Kopelma Darussalam,<br>
                    Banda Aceh<br>
                    Aceh, Indonesia
                </p>
            </div>
            <div class="p-10 my-10 mx-5 sm:mx-36 ">
                <p class="font-bold text-xl text-white font-Roboto">
                    SIPETE<br>
                    Phone:+0000000000<br>
                    Email : sipete@mhs.usyiah.ac.id
                </p>
            </div>
        </div>
    </div>
@endsection
<div class="grid md:grid-cols-2 xl:mx-20 my-20 w-full">
    <div class="pl-20 my-10 sm:my-20 items-end object-left ">
        <p class="text-5xl font-medium font-Arial m-2 ml-0 ">
            Mari Berpartisipasi
        </p>
        <p class="text-5xl text-[#0B63F8] font-medium font-Arial color-blue m-4 ml-0">Kelola Limbah<br>Tekstil Disini
        </p>
        <p class="text-[#505F98] text-justify font-Arial ml-0">
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
    <p class="text-2xl text-[#224957] text-center font-bold font-Arial ">Ayo Kelola Limbah Tekstil Anda Disini</p>
    <br>
    <div class="flex sm:flex-nowrap flex-wrap justify-center">
        <div class="p-10 my-10 mx-5 sm:mx-36 bg-gray-200 hover:bg-gray-300 rounded-3xl">
            <p class="font-bold text-xl text-center font-Arial">Donasi</p><br>
            <a href="#">
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

