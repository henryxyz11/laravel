@extends('layouts.app', ['title' => __('List Barang')])

@section('content')
    @include('layouts.headers.header', ['title' => __('Tambah Barang Baru')])

    <div class="container-fluid mt--3">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Inventory Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('barang.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('barang.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Informasi Barang') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-nama">{{ __('Nama Barang') }}</label>
                                    <input type="text" name="nama" id="input-nama" class="form-control form-control-alternative{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Barang') }}" value="{{ old('nama') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Kode Barang') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('Kode Barang') ? ' is-invalid' : '' }}" placeholder="{{ __('Kode Barang') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Merk') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('Jenis Barang') ? ' is-invalid' : '' }}" placeholder="{{ __('Merk') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Stock') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('Jenis Barang') ? ' is-invalid' : '' }}" placeholder="{{ __('Stock') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">Foto Barang</label>
                                    <div class="col-md-6">
                                        <img width="200" height="200" />
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="foto">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Deskripsi') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('Deskripsi') ? ' is-invalid' : '' }}" placeholder="{{ __('Deskripsi') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Lokasi') }}</label>
                                    <select class="form-control" name="Lokasi" required="">
                                        <option value="kondisi"></option>
                                        <option value="satker">Satker</option>
                                        <option value="admin">Admin</option>

                                    </select>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} ">
                                    <label class="form-control-label" for="input-name">{{ __('Kondisi') }}</label>
                                    <select class="form-control" name="Kondisi" required="">
                                        <option value="kondisi"></option>
                                        <option value="baru">Baru</option>
                                        <option value="lama">Lama</option>

                                    </select>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    <button type="submit" class="btn btn-danger mt-4">{{ __('reset') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
