@extends('utils_admin.layout')

@section('content')
    <div class="container">
        <h2>Selamat datang di Dashboard Admin!</h2>
        <p>Anda dapat melihat statistik, mengelola data, dan banyak lagi di sini.</p>

        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    Jumlah Pengguna
                </div>
                <div class="card-body">
                    <h1>100</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Jumlah Pesanan
                </div>
                <div class="card-body">
                    <h1>50</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Pendapatan Bulan Ini
                </div>
                <div class="card-body">
                    <h1>Rp 10.000.000</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
