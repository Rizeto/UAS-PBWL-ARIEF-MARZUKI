@extends('layouts.app')

@section('content')
<h3>Data Laundry
    <a class="btn btn-primary btn-sm float-end" href="{{ url('/laundry/create') }}">Tambah Data</a>
</h3>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>KODE</th>
        <th>JENIS LAUNDRY</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row )
    <tr>
        <td>{{ $row->lan_id }}</td>
        <td>{{ $row->lan_kode }}</td>
        <td>{{ $row->lan_nama }}</td>
        <td><a href="{{ url('laundry/' . $row->lan_id . '/edit') }}" class="btn btn-warning">EDIT</a></td>
        <td>
            <form action="{{ url('laundry/' . $row->lan_id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="button" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection