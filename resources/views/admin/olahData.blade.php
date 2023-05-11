@extends('layouts.master')
@section('title')
    Olah Data
@endsection
@section('content')
    <h1>Data</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Province</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ratings as $record)
                <tr>
                    <td>{{ $record['id'] }}</td>
                    <td>{{ $record['province'] }}</td>
                    <td>{{ $record['rating'] }}</td>
                    <td>
                        <form action="{{ route('ratings.update', $record['id']) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="number" name="rating" value="{{ $record['rating'] }}">
                            <input type="hidden" name="province" value="{{ $record['province'] }}">
                            <button type="submit">Update</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')
@endsection
