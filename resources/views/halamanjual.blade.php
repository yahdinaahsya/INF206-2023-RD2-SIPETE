@extends('layouts.app')

@section('content')

<style>
    .form-group {
      margin-bottom: 20px;
      margin-top: 25px;
    }
    .left {
      float: left;
      width: 20%;
      margin-left: 26%;
    }
    .right {
      float: right;
      width: 20%;
      margin-right: 30%;
    }
    label {
      width: 200px;
      text-align: left;
      margin-right: 5px;
  }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #C4C4C4;
    }
    .clear {
      clear: both;
    }
    input[name="alamat"] {
      min-width: 20px;
      height: 133px;
      padding: 5px;
      border-radius: 10px;
    }
    .input-button-container {
    position: relative;
    display: flex;
  }

  button[type=cancel] {
    position: absolute;
    bottom: 100px;
    left: 50%;
    background-color: #EA4511;
    color: white;
    padding: 5px 32px;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;
  }

  button[type=submit] {
    position: absolute;
    bottom: 100px;
    left: 60.5%;
    background-color: #118EEA;
    color: white;
    padding: 5px 32px;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;
  }

  </style>


<div class=" pt-28">
  <form action="submit.php" method="post">
    <div class="left">
      <div class="form-group">
        <label for="nama">Nama Donatur</label>
        <input type="text" id="nama" name="nama">
      </div>

      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="text" id="tgl_lahir" name="tgl_lahir">
      </div>

      <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" id="telepon" name="telepon"  placeholder="+62">
      </div>

      <div class="form-group">
        <label for="tgl_donasi">Rencana Tanggal Donasi</label>
        <input type="text" id="tgl_donasi" name="tgl_donasi" placeholder="dd/mm/yyyy">
      </div>

      <div class="form-group">
        <label for="cara_pengiriman">Cara Pengiriman</label>
        <input type="text" id="cara_pengiriman" name="cara_pengiriman">
      </div>

      </div>
    <div class="right">
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat">
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="jenis_pakaian">Jenis Pakaian</label>
        <input type="text" id="jenis_pakaian" name="jenis_pakaian">
      </div>
      
      <button type="cancel">Cancel</button>
      <button type="submit">Submit</button> 
    </form>
</div>


 @endsection
