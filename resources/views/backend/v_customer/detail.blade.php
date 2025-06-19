@extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title"> {{$judul}} </h4>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Foto</label>
                                {{-- view image --}}
                                @if ($edit->user->foto)
                                <img src="{{ asset('storage/img-customer/' . $edit->user->foto) }}" class="foto-preview" width="100%">
                                <p></p>
                                @else
                                <img src="{{ asset('storage/img-user/img-default.jpg') }}" class="foto-preview" width="100%">
                                <p></p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" readonly value="{{ $edit->user->nama }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" readonly value="{{ $edit->user->email }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>HP</label>
                                <input type="text" readonly value="{{ $edit->user->hp }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" readonly>{{ $edit->alamat }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input type="text" readonly value="{{ $edit->pos }}" class="form-control">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <a href="{{ route('backend.customer.index') }}">
                            <button type="button" class="btn btn-secondary">Kembali</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- contentAkhir -->
@endsection