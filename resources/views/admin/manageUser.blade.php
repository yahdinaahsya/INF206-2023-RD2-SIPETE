@extends('layouts.master');

@section('title')
    Manage User
@endsection

@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Manage Users</h2>
                <a href="#" class="btn">View All</a>
                <div class="card-tools">
                    <a href="{{ route('create-user') }}" class="btn btn-success">Tambah Data<i
                            class="fas fa-plus-square"></i></a>
                </div>
            </div>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Provinsi</th>
                        <th>Alamat</th>
                        <th>Access Level</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($datauser as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tgllhr }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->provinsi }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>User</td>
                            <td><button>Edit</button><button>Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @parent
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Recent Users</h2>
            </div>

            <table>
                @if (isset($datauser))
                    @foreach ($datauser as $item)
                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <img src="{{ asset('storage/assets/profile/' . $item->gambar) }}" alt="">
                                </div>
                            </td>
                            <td>
                                <h4>{{ $item->nama }}<br>
                                    <span>{{ $item->provinsi }}</span>
                                </h4>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection

@section('foooter')
@endsection
