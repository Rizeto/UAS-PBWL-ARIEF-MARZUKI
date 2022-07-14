@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Mahasiswa</h3>
        <form action="{{ url('/laundry/' . $row->lan_id) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>KODE</label>
                    <input type="text" class="form-control" name="lan_kode" value="{{ $row->lan_kode }}"></>
                </div>
                <div class="mb-3">
                    <label>NAMA</label>
                    <input type="text" class="form-control" name="lan_nama" value="{{ $row->lan_nama }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('laundry/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection