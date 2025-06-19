@extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->

<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="{{ route('backend.user.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <h4 class="card-title">{{$judul}}</h4>

                <div class="form-group">
                    <label>Hak Ases</label>
                    <select name="role" class="form-control @error('role') is-invalid @enderror">
                        <option value="" {{ old('role',$edit->role) == '' ? 'selected' : '' }}> - Pilih Hak Akses
                            -
                        </option>
                        <option value="1" {{ old('role',$edit->role) == '1' ? 'selected' : '' }}> Super Admin</option>
                        <option value="0" {{ old('role',$edit->role) == '0' ? 'selected' : '' }}> Admin
                        </option>
                    </select>
                    @error('role')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ old('nama',$edit->nama) }}" class="form-control @error('nama') is-invalid @enderror" placeholder=" Masukkan Nama">
                    @error('nama')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ old('email',$edit->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
                    @error('email')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>HP</label>
                    <input type="text" name="hp" value="{{ old('hp',$edit->hp) }}" class="form-control @error('hp') is-invalid @enderror" placeholder="Masukkan HP">
                    @error('hp')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                    <a href="{{ route('backend.user.index') }}">
                        <button type="button" class="btn btn-secondary">Kembali</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- contentAkhir -->
@endsection