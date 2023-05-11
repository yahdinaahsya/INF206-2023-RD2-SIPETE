@extends('layouts.master')

@section('title')
    Kelola Koin
@endsection

@section('content')
    {{-- @php
        $datakoin = session()->get('datakoin');
    @endphp --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Id User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Saldo Koin
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($datakoin as $koin)
                    <tr>
                        <td class="px-6 py-4">{{ $koin->id }}</td>
                        <td class="px-6 py-4">{{ Auth::user()->id }}</td>
                        <td class="px-6 py-4">{{ $koin->saldo_koin }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection

@section('footer')
@endsection
