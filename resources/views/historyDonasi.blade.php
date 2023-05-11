@extends('layouts.app')

@section('content')
    <div class="pt-32 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Donasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cara Pengiriman
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_donasi as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $item->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->tgldonasi }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->cr_kirim }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> {{ $item->status }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if ($item->status =='menunggu konfirmasi pengiriman')
                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                type="button"
                                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Konfirmasi Pengiriman
                            </button>

                            <!-- Main modal Konfirmasi pengiriman -->
                            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-hide="authentication-modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>

                                        <!-- form -->
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                Konfirmasi Pengiriman Limbah Tekstil Anda Disini</h3>
                                            <form class="space-y-6" action="/historyDonasi/addKonfirmasi" method="POST">
                                                @csrf
                                                <input name="id_donasi" value="{{$item->id}}" hidden>
                                                <div class="mt-4">
                                                    <label for="nama_pengirim" class="block font-medium text-gray-700">Nama
                                                        Pengirim</label>
                                                    <input type="text" name="nama_pengirim" id="nama_pengirim"
                                                        placeholder="Masukkan Nama Pengirim" required
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="tanggal_pengiriman"
                                                        class="block font-medium text-gray-700">Tanggal Pengiriman</label>
                                                    <input type="date" name="tanggal_pengiriman" id="tanggal_pengiriman"
                                                        placeholder="Pilih Tanggal Pengiriman" required
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="resi_pengiriman"
                                                        class="block font-medium text-gray-700">Resi Pengiriman</label>
                                                    <input type="text" name="resi_pengiriman" id="resi_pengiriman"
                                                        placeholder="Masukkan Resi Pengiriman" required
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="gambar_resi_pengiriman"
                                                        class="block font-medium text-gray-700">Gambar Resi
                                                        Pengiriman</label>
                                                    <input type="file" name="gambar_resi_pengiriman"
                                                        id="gambar_resi_pengiriman" accept="image/*" required
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Konfirmasi
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection