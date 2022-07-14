@extends('Layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Laundry</h3>
        <form action="{{ url('/laundry') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>KODE</label>
                <input type="text" class="form-control" name="lan_kode">
            </div>
            <div class="mb-3">
                <label>JENIS LAUNDRY</label>
                <input type="text" class="form-control" name="lan_nama">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <a href="{{ url('laundry/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
</div>
@endsection