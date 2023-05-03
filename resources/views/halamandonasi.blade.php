@extends('layouts.app')

@section('content')
    <div class="my-20 w-full">

        <h1 class="text-5xl text-black text-center font-extrabold font-poppins ">
            <br>Prosedure Donasi Sipete</h1>
        
        <p class="text-3xl text-black text-left m-5 ml-20 font-extrabold font-poppins ">
            <br>1. Mengisi form data diri

            <a href="#">
                <!-- Modal toggle -->
            
                <button id="defaultModalButton" data-modal-toggle="defaultModal"
                    class=" ml-5 inline-block rounded-full bg-[#505F98] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    type="button">
                    Form Donasi
                </button>
                

                <div id="defaultModal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                    
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                        
                    <!-- Modal content -->
                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-white-300 sm:p-5">
                            
                            <!-- Modal header -->
                            <div
                                class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-black-600">
                                <h3 class="text-lg font-semibold text-black-900 dark:text-black">
                                    Formulir Donasi
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-black"
                                    data-modal-toggle="defaultModal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <span class="sr-only">
                                        Close modal</span>
                                </button>
                            </div>

                            <!-- Modal body -->
                            <form action="/simpan-Donasi" method="post">
                                @csrf
                                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                    <div>
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                            Nama 
                                        </label>

                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="nama PenDonasi" required="">
                                    </div>

                                    <div class="sm:col-2">
                                        <label for="alamat"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat</label>
                                        <input type="text" name="alamat" id="alamat"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="alamat" required="">
                                    </div>

                                    <div class="pt-1">
                                        <p>Rencana Tanggal Donasi</p>
                                        <div>
                                            <div class="relative w-full">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg aria-hidden="true"
                                                        class="w-full h-5 text-gray-500 dark:text-gray-400"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                            clip-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <input name="tanggal" type="date"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Select date">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Email</label>
                                        <input type="text" name="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="xxxx@gmail.com" required="">
                                    </div>

                                    <div>
                                        <label for="telepon"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                            Telepon</label>
                                        <input type="text" name="telepon" id="telepon"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="+62" required="">
                                    </div>

                                    <!-- <div>
                                        <label for="category"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Jenis Pakaian</label>
                                        <select id="category" name="pakaian"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="layak">Layak Pakai</option>
                                            <option value="tidaklayak">Tidak Layak Pakai</option>
                                        </select>
                                    </div> -->

                                    <div>
                                        <label for="pengiriman"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                            Cara Pengiriman</label>
                                        <input type="text" name="pengiriman" id="pengiriman"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="antar sendiri,ojek,dll" required="">
                                    </div>
                                </div>

                                <div
                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button type="submit"
                                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        submit
                                    </button>

                                    <button data-modal-hide="defaultModal" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            <a>
        </p>
            <p class="text-3xl text-black text-left m-5 font-extrabold font-poppins ml-20">
                2. Mengirim/Mengantar Donasi</p>
            <pre class="text-1xl text-[#505F98] text-justify font-bold font-poppins">
            Bisa mengirim atau mengantar Donasi yang telah disiapkan ke <a href="https://www.google.co.id/maps/search/Universitas+Syiah+Kuala/@5.5694652,95.3660805,17z/data=!3m1!4b1" class="underline"><i>alamat tujuan</i></a>
            (Harap cantuman nama dan No.hp di paket Donasi)
            </pre>

            <p class="text-3xl text-black text-left m-5 font-extrabold font-poppins ml-20">
                3. Konfirmasi ke CP:</p>
            <pre class="text-1xl text-[#505F98] text-justify font-bold font-poppins">
            Format Konfirmasi  :
            Nama               :
            No.Hp              :
            Tanggal Pengiriman :
            Cara Pengiriman    : (diantar ojek online)
            </pre>

            <p class="text-3xl text-black text-left  ml-20 font-extrabold font-poppins ">
                4. Akan mendapatkan konfirmasi jika Donasi diterima<br>
            </p>

            <p class="text-3xl text-black text-left  ml-20 font-extrabold font-poppins ">
            <br>5. Keterangan Donasi</p>
            <pre class="mt-5 text-1xl text-[#505F98] text-justify font-bold font-poppins">
            a. Barang yang didonasikan bisa berupa pakaian, barang, atau alat yang sekiranya masi " LAYAK DIPAKAI "
            b. Barang yang sudah dikirim, nantinya akan didonasikan kepada orang yang membutuhkan atau panti asuhan
            c. Terkait kemana dan kapan didonasikan, akan dikonfirmasi/dikabari melalui via telepon/email
            d. Setiap kali melakukan donasi, maka anda akan mendapatkan 5 koin
            </pre>
            
            <div>
                <img class="ml-20" src="images/Rectangle 4.png">
            </div>
    </div>
    
@endsection
