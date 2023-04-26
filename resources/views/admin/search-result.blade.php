@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Search Results</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                @if (count($searchResults) > 0)
                    <h4>Donasi :
                        <a href="{{ route('kelola-donasi') }}"> -> (Menuju Halaman)</a>
                    </h4>
                    <ul>
                        @foreach ($searchResults['donasi'] as $donasi)
                            <li>{{ $donasi->judul }} - {{ $donasi->deskripsi }}</li>
                        @endforeach
                    </ul>

                    {{-- <h4>Sessions</h4>
                    <ul>
                        @foreach ($searchResults['sessions'] as $session)
                            <li>{{ $session->user_agent }} - {{ $session->payload }}</li>
                        @endforeach
                    </ul> --}}

                    <h4>Orders:
                        <a href="{{ route('manage-textil') }}"> -> (Menuju Halaman) </a>
                    </h4>
                    <ul>
                        @foreach ($searchResults['textils'] as $order)
                            <li>{{ $order->nama_customer }} - {{ $order->alamat_pengiriman }}</li>
                        @endforeach
                    </ul>

                    <h4>Textils: </h4>
                    <ul>
                        @foreach ($searchResults['textils'] as $textil)
                            <li>{{ $textil->nama }} - {{ $textil->jenis }}</li>
                        @endforeach
                    </ul>

                    {{-- <h4>Users Migration</h4>
                    <ul>
                        @foreach ($searchResults['users_migration'] as $user)
                            <li>{{ $user->nama }} - {{ $user->email }}</li>
                        @endforeach
                    </ul> --}}

                    <h4>Users: </h4>
                    <ul>
                        @foreach ($searchResults['users'] as $user)
                            <li>{{ $user->name }} - {{ $user->email }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No search results found.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
