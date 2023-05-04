@extends('layouts.app')

@section('content')
 
<div class="pt-20 my-20 w-full ">
    <div class="ml-20 flex ">
        <div class="ml-10 my-20 sm:mx-50 ">
        <p class="text-[#000000] font-[arial] capitalize text-2xl text-justify font-Arial ml-0">
            Hubungi Kontak Kami 
        </p><br>
        <h1 class="uppercase mb-5 font-[arial] text-6xl font-extrabold text-[#0B63F8] ">
            Berikan Kritik<br> 
            & saran
        </h1>
        </div>
        <div class="ml-20 ">
            <form action="/simpan-Kritik" method="post">
                
                <label for="nama" class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                        Nama Anda
                    </p>
                </label>
                <input type="text" class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name ="nama" id="nama" placeholder="Nama anda">

                <label for="nama" class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                        Email Anda
                    </p>
                </label>
                <input type="text" class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name ="email" id="email" placeholder="Email anda">
                
                <label for="pesan" class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                        Pesan Anda
                    </p>
                </label>
                <textarea class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" placeholder="Tuliskan kritik dan saran anda" name="pesan" id="pesan" style="height: 150px"></textarea>
                
                <a href="/">
                    <br><br>
                    <button
                    type="button"
                    class="inline-block rounded-full bg-[#118EEA] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Kirim
                    </button>  
                </a>
            </form>
            
        </div>

        
    </div>
</div>

@endsection