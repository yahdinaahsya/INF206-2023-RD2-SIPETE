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
                    @csrf
                    <label for="nama" class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                        <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                            Nama Anda
                        </p>
                    </label>
                    <input type="text"
                        class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name="nama"
                        id="nama" placeholder="Tuliskan nama anda">

                    <label for="email" class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                        <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                            Email Anda
                        </p>
                    </label>
                    <input type="text"
                        class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name="email"
                        id="email" placeholder="Tuliskan Email anda">

                    <label for="pesan" class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                        <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                            Pesan Anda
                        </p>
                    </label>
                    <textarea class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5"
                        placeholder="Tuliskan kritik dan saran anda" name="pesan" id="pesan" style="height: 150px"></textarea>

                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Kirim
                        </button>
                    </div>
                </form>

            </div>


        </div>
    </div>
@endsection
