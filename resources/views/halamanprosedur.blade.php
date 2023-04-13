@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center h-screen">
  <h1 class="text-4xl font-bold mb-8">Prosedur Donasi Sipete</h1>
  <div class="w-full md:w-1/2 lg:w-1/3">
    <div class="flex mb-4">
      <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center mr-2">
        <span class="text-white font-bold text-sm">1</span>
      </div>
      <div>
        <p class="text-lg font-bold mb-1">Mengisi Form Data Diri</p>
      </div>
    </div>
    <div class="flex mb-4">
      <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center mr-2">
        <span class="text-white font-bold text-sm">2</span>
      </div>
      <div>
        <p class="text-lg font-bold mb-1">Mengirim/Mengantar Donasi</p>
        <p class="text-sm text-gray-700">(Harap cantumkan nama dan no.hp di paket donasi)</p>
      </div>
    </div>
    <div class="flex mb-4">
      <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center mr-2">
        <span class="text-white font-bold text-sm">3</span>
      </div>
      <div>
        <p class="text-lg font-bold mb-1">Konfirmasi ke CP:</p>
        <div class="pl-8">
          <p class="text-sm mb-1"><span class="font-bold">Format Konfirmasi</span>: </p>
          <p class="text-sm mb-1"><span class="font-bold">Nama</span>: </p>
          <p class="text-sm mb-1"><span class="font-bold">No. HP</span>: </p>
          <p class="text-sm mb-1"><span class="font-bold">Tanggal Pengiriman</span>: </p>
          <p class="text-sm mb-1"><span class="font-bold">Cara Pengiriman</span>: </p>
        </div>
      </div>
    </div>
    <div class="flex mb-4">
      <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center mr-2">
        <span class="text-white font-bold text-sm">4</span>
      </div>
      <div>
        <p class="text-lg font-bold mb-1">Akan mendapatkan konfirmasi jika donasi telah diterima</p>
        <p class="text-sm text-gray-700">Lihat info selengkapnya</p>
      </div>
    </div>
  </div>
  <button class="bg-blue-500 text-white font-bold py-2 px-5 rounded-full mt-8 hover:bg-blue-700">Form Donasi</button>
</div>


@endsection
