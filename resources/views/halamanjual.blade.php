@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <form action="submit.php" method="post" class="w-full max-w-lg">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="nama" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama Donatur</label>
        <input type="text" id="nama" name="nama" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="tgl_lahir" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Lahir</label>
        <input type="text" id="tgl_lahir" name="tgl_lahir" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="telepon" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Telepon</label>
        <input type="text" id="telepon" name="telepon" placeholder="+62" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="tgl_donasi" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Rencana Tanggal Donasi</label>
        <input type="text" id="tgl_donasi" name="tgl_donasi" placeholder="dd/mm/yyyy" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="cara_pengiriman" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Cara Pengiriman</label>
        <input type="text" id="cara_pengiriman" name="cara_pengiriman" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="alamat" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="appearance-none block w-full bg-gray bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
        <div class="w-full px-3 mb-6 md:mb-0">
        <label for="alamat" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email</label>
        <input type="text" id="alamat" name="alamat" class="appearance-none block w-full bg-gray bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">  
      </div>
        <div class="w-full px-3 mb-6 md:mb-0">
        <label for="alamat" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jenis Pakaian</label>
        <input type="text" id="alamat" name="alamat" class="appearance-none block w-full bg-gray bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
       
      <form class="flex flex-col items-center">
      <div class="mt-10 flex flex-row space-x-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Submit
        </button>
        <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
      Cancel
        </button>
      </div>
      </form>


 @endsection
