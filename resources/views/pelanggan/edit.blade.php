@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>NOMOR PELANGGAN</label>
                    <input type="text" class="form-control" name="pel_no" value="{{ $row->pel_no }}"></>
                </div>
                <div class="mb-3">
                    <label>NAMA PELANGGAN</label>
                    <input type="text" class="form-control" name="pel_nama" value="{{ $row->pel_nama }}"></>
                </div>
                <div class="mb-3">
                    <label>ALAMAT</label>
                    <input type="text" class="form-control" name="pel_alamat" value="{{ $row->pel_alamat }}"></>
                </div>
                <div class="mb-3">
                    <label>NO HP</label>
                    <input type="text" class="form-control" name="pel_hp" value="{{ $row->pel_hp }}"></>
                </div>
                <div class="mb-3">
                    <label>JUMLAH PEWANGI</label>
                    <input type="text" class="form-control" name="pel_pewangi" value="{{ $row->pel_pewangi }}"></>
                </div>
                <div class="mb-3">
                    <label>TAMBAHAN</label>
                    <input type="text" class="form-control" name="pel_tambahan" value="{{ $row->pel_tambahan }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('pelanggan/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection