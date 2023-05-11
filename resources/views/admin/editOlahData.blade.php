@extends('layouts.master')
@section('title')
    Edit Olah Data
@endsection
@section('content')
    @foreach ($olahdata as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->province }}</td>
            <td>{{ $data->rating }}</td>
            <td>
                <form action="{{ route('csv-data.update', $data->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="rating" value="{{ $data->rating }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('footer')
@endsection
