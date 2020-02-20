@extends('layouts.admin')
    
@section('title','Halaman Travel Package Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Travel</h1>            
        </div>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $item->id }}</td>
                    </tr>
                    <tr>
                        <th>Paket Travel</th>
                        <td>{{ $item->travelpackage->title }}</td>
                    </tr>
                    <tr>
                        <th>Pembeli</th>
                        <td>{{ $item->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Additional Visa</th>
                        <td>{{ $item->additional_visa }}</td>
                    </tr>
                    <tr>
                        <th>Total Transaksi</th>
                        <td>{{ $item->transaction_total }}</td>
                    </tr>
                    <tr>
                        <th>Status Transaksi</th>
                        <td>{{ $item->transaction_status }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $item->travelpackage->price }}</td>
                    </tr>
                    <tr>
                        <th>Pembelian</th>
                        <td>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Nationality</th>
                                        <th>Visa</th>
                                        <th>Passport</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item->detail as $val)
                                    <tr>
                                        <td>{{ $val->id }}</td>
                                        <td>{{ $val->user_name }}</td>
                                        <td>{{ $val->nationality }}</td>
                                        <td>{{ $val->is_visa ? '30 Days' : 'N/A' }}</td>
                                        <td>{{ $val->doe_passport }}</td>
                                    </tr>                                    
                                    @endforeach
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection