@extends('layouts.master');

@section('title')
    create user
@endsection

@section('content')
    <h3 class="editData">EDIT DATA</h3>
    <div class="card-body">
        <form action="{{ route('updateDataUser', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="nama"
                    value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                    value="{{ $data->email }}">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="profile"
                    class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100" />
            </div>
            <div class="form-group">
                <button
                    class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 ... rounded-full ..."
                    type="submit">Simpan</button>
            </div>

        </form>
    </div>
@endsection
@section('foooter')
@endsection
