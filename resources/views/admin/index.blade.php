@extends('layouts.master');

@section('name')
    Admin Dashboard
@endsection

@section('sidebar')
@endsection

@section('content')
    <!-- ======================= Cards ================== -->
    <img src="{{ asset('assets/imgs/gambarback.png') }}" alt="gambarback" id="gambarback">
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Users</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Penjualan</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Komentar</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Donasi</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="detail-index">
        <div class="recentOrders-index">
            <div class="cardHeader">
                <h2>Recent Orders</h2>
                <a href="#" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Id Order </td>
                        <td>Nama Customert</td>
                        <td>Status</td>
                        <td>Jumlah Item</td>
                        <td>Total Biaya</td>
                        <td>Lokasi Penerima</td>
                        <td>Product Details</td>
                        <td>Lokasi</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Gatot Kaca</td>
                        <td><span class="status delivered">Delivered</span></td>
                        <td>2</td>
                        <td>Rp. 50.000</td>
                    </tr>


                </tbody>
            </table>
        </div>
        @parent

    </div>
    </div>
    </div>
@endsection

@section('footer')
@endsection
