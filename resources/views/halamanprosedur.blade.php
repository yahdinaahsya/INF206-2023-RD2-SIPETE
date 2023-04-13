@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Prosedur Donasi Sipete</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
            }

            .container {
                max-width: 960px;
                margin: 0 auto;
                padding: 10px;
            }

            h1 {
                font-size: 35px;
                text-align: center;
            }

            .step {
                margin-top: 35px;
                display: flex;
            }

            .step-number {
                color: black;
                text-align: center;
                line-height: 33px;
                margin-right: 20px;
                font-size: 20px;
            }

            .step-content {
                flex: 1;
            }

            .step-title {
                font-size: 22px;
                margin-bottom: 10px;
            }

            .step-description {
                font-size: 15px;
            }

            .btn {
                position: absolute;
                top: 212px;
                right: 58%;
                transform: translate(50%, -50%);
                padding: 8px 20px;
                font-size: 15px;
                font-weight: bold;
                background-color: #F3CA3A;
                color: white;
                border-radius: 8px;
            }

            .btn:hover {
                background-color: #F3CA3A;
                color: white;
            }

            .lihat-info {
                position: absolute;
                bottom: 122px;
                left: 31%;
                transform: translateX(-50%);
                background-color: #599544;
                padding: 8px 25px;
                border-radius: 5px;
            }

            .lihat-info a {
                color: #fff;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Prosedur Donasi Sipete</h1>
            <div class="step">
                <div class="step-number">1.</div>
                <div class="step-content">
                    <div class="step-title">Mengisi Form Data Diri</div>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-primary">Form Donasi</button>
                </div>

            </div>
            <div class="step">
                <div class="step-number">2.</div>
                <div class="step-content">
                    <div class="step-title">Mengirim/Mengantar Donasi</div>
                    <div style="font-size: 15px;">
                        <p>Bisa mengirim atau mengantar donasi yang telah disiapkan ke alamat tujuan.</p>
                        <p><strong>(Harap cantumkan nama dan no.hp di paket donasi)</strong></p>
                    </div>

                </div>
            </div>
            <div class="step">
                <div class="step-number">3.</div>
                <div class="step-content">
                    <div class="step-title">Konfirmasi ke CP:</div>
                    <div class="step-description">
                        <ul>
                            <li>Format Konfirmasi :</li>
                            <li>Nama :</li>
                            <li>No. HP :</li>
                            <li>Tanggal Pengiriman :</li>
                            <li>Cara Pengiriman :</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="step-number">4.</div>
                <div class="step-content">
                    <div class="step-title">Akan mendapatkan konfirmasi jika donasi telah diterima</div>
                    <div class="lihat-info">
                        <a href="#">Lihat Info Selengkapnya</a>
                    </div>

                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
