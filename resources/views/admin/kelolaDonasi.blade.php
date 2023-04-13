@extends('layouts.master');

@section('title')
    Kelola Donasi
@endsection

@section('content')
    <div class="detail-index">
        <div class="recentOrders-index">
            <div class="cardHeader">
                <h2>Kelola Donasi</h2>
            </div>

            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($dataTextil))
                        @foreach ($dataTextil as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>
                                    <button
                                        class="toggleButton absolute top-2 right-2 p-2 rounded-full bg-white shadow-lg focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <img src="{{ asset('storage/assets/profile/' . $item->gambar) }}"
                                        class="w-64 h-48 object-cover rounded-lg">


                                </td>
                                <td>
                                    <button>Edit</button>
                                    <button>
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
            {{-- <a href="{{ route('create-textil') }}" class="btn">Tambah</a> --}}
        </div>
        @parent

    </div>
    <style>
        /* Set posisi tombol */
        button#toggleButton {
            z-index: 10;
        }

        /* Sembunyikan gambar */
        img {
            display: none;
        }

        /* Tampilkan gambar ketika tombol di klik */
        .show {
            display: block;
            animation: fadeIn 1s ease-out;
        }

        /* Animasi fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <script>
        const toggleButtons = document.querySelectorAll('.toggleButton');
        const imgs = document.querySelectorAll('img');

        // Loop melalui setiap tombol untuk menambahkan event listener
        toggleButtons.forEach(function(button, index) {
            button.addEventListener('click', function() {
                // Cari img dengan index yang sama dengan tombol yang di klik
                const img = imgs[index];
                img.classList.toggle('show');
            });
        });
    </script>
@endsection

@section('footer')
@endsection
