@extends('layouts.master');

@section('title')
    create user
@endsection

@section('content')
    <h3>TAMBAH PEGAWAI</h3>
    <div class="card-body">
        <form action="{{ route('simpan-textil') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Sipete :</label><br>
                <select id="jenis" name="jenis">
                    <option value="donasi">Donasi</option>
                    <option value="daur">Jual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi </label><br>
                <textarea id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="Harga">Harga :</label><br>
                <input type="text" id="harga" name="harga" class="form-control" placeholder="1000000">
            </div>
            <div class="form-group">
                <label for="Harga">Jumlah Stok:</label><br>
                <input type="text" id="stok" name="stok" class="form-control" placeholder="Jumlah Barang">
            </div>
            <div class="form-group">
                <label for="date">Tanggal:</label><br>
                <input type="date" id="datePesan" name="datePesan" class="form-control">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label><br>
                <input type="file" name="gambarTextil" />
            </div>
            <br>

            <div class="form-group">
                <button type="submit">Simpan</button>
            </div>

        </form>
    </div>
@endsection
@section('foooter')
@endsection
