@extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->

<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="{{ route('backend.customer.store') }}" method="post">
            @csrf

            <div class="card-body">
                <h4 class="card-title">{{$sub}}</h4>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder=" Masukkan Nama customer">
                    @error('nama')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Hp</label>
                    <input type="text" name="hp" value="{{ old('hp') }}" class="form-control @error('hp') is-invalid @enderror" placeholder=" Masukkan Nomor Hp customer">
                    @error('hp')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('backend.customer.index') }}">
                        <button type="button" class="btn btn-secondary">Kembali</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- contentAkhir -->
@endsection