@extends ('layouts.app')

@section('content')
    <div class="mx-auto my-auto py-auto px-auto ">

        <!-- Tukar Pulsa -->
        <div class="flex pt-24 -mb-36 ">
            <div>
                <img class=" h-64 w-auto" src="/images/Ellipse 10.jpg">
            </div>
        </div>

        <div class="text-center -mb-32 ">
            <h1 class="font-extrabold text-8xl text-slate-700">Poin Sipete</h1>
            <h1 class=" font-[serif]  font-extrabold text-8xl mb-7 text-[#118EEA]">$<span
                    class=" font-extrabold  text-[#47A7EF]">{{ $saldo_koin }}</span> </h1>
            <!--poin dan uang dolar-->


            <div class="">
                <!--tukar poin dan lambangnya-->
                <button data-modal-target="redeem" data-modal-toggle="redeem"
                    class="relative overflow-hidden border-2 border-black text-black inline-block text-lg font-medium py-4 px-6 rounded-md cursor-pointer bg-white select-none transition-all duration-600 ease-in-out hover:bg-black hover:text-white">
                    <span class="relative z-10 transition-colors duration-600 cubic-bezier(0.48, 0, 0.12, 1)">Tukar
                        Poin</span>
                </button>
                <!--redeem modal-->
                <div id="redeem" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-4xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-blue-500 rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class=" text-5xl pl-72 text-justify font-medium text-white dark:text-white">
                                    Tukar Poin
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="redeem">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body (bros kain, scrunchie, keset, boneka kain perca, selimut , sarung bantal) -->
                            <div class=" p-6 space-y-6">
                                <!-- bagian 1 -->
                                <div class="flex pl-5 space-x-10  ">
                                    {{-- bakal diulang --}}
                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="p-8 rounded-t-lg" src="/images/BrosKain.jpeg" />
                                        </a>
                                        <div class="px-5 pb-5">
                                            <a href="#">
                                                <h5
                                                    class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                    Bros Kain</h5>
                                            </a>
                                            <div class="flex items-center justify-between">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                                <a href="#"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tukarkan</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="p-8 rounded-t-lg" src="/images/scrunchie.jpg" />
                                        </a>
                                        <div class="px-5 pb-5">
                                            <a href="#">
                                                <h5
                                                    class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                    Scrunchie</h5>
                                            </a>
                                            <div class="flex items-center justify-between">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                                <a href="#"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tukarkan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- bagian 2 -->
                                <div class="flex pl-5 space-x-10  ">
                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" />
                                        </a>
                                        <div class="px-5 pb-5">
                                            <a href="#">
                                                <h5
                                                    class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                    Keset</h5>
                                            </a>
                                            <div class="flex items-center justify-between">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                                <a href="#"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tukarkan</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" />
                                        </a>
                                        <div class="px-5 pb-5">
                                            <a href="#">
                                                <h5
                                                    class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                    Boneka Kain Perca</h5>
                                            </a>
                                            <div class="flex items-center justify-between">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                                <a href="#"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tukarkan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- bagian 3 -->
                                <div class="flex pl-5 space-x-10  ">
                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" />
                                        </a>
                                        <div class="px-5 pb-5">
                                            <a href="#">
                                                <h5
                                                    class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                    Selimut</h5>
                                            </a>
                                            <div class="flex items-center justify-between">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                                <a href="#"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tukarkan</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" />
                                        </a>
                                        <div class="px-5 pb-5">
                                            <a href="#">
                                                <h5
                                                    class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                    Sarung Bantal</h5>
                                            </a>
                                            <div class="flex items-center justify-between">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                                <a href="#"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tukarkan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="flex pt-44 -mb-20">
                <div>
                    <img class="h-56 w-screen max-w-full" src="/images/Rectangle 4.png">
                </div>
            </div>
        </div>
    @endsection
