@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('images/arip.jpeg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Arief Marzuki - 0702193175</h5>
                            <p class="card-text justify">Saya adalah seorang mahasiswa dari Universitas Islam Negeri Sumatera Utara saat Jurusan Sistem Informasi, saat ini saya berada di Semester 6.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
