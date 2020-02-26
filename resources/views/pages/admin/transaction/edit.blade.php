@extends('layouts.admin')
    
@section('title','Halaman Travel Package Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Status</h1>            
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
                <form action="{{ route('transaction.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf                    
                    <div class="form-group">
                        <label for="transaction_status">Status</label>
                        <select name="transaction_status" required>
                            <option value="">Pilih Status</option>                                         
                            <option value="IN_CART" {{ $item->transaction_status == 'IN_CART' ? 'selected' : '' }}>In Cart</option>
                            <option value="PENDING" {{ $item->transaction_status == 'PENDING' ? 'selected' : '' }}>Pending</option>
                            <option value="SUCCESS" {{ $item->transaction_status == 'SUCCESS' ? 'selected' : '' }}>Success</option>
                            <option value="CANCEL" {{ $item->transaction_status == 'CANCEL' ? 'selected' : '' }}>Cancel</option>
                            <option value="FAILED" {{ $item->transaction_status == 'FAILED' ? 'selected' : '' }}>Failed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection