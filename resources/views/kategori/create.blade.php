@extends('layouts.app', ['title' => __('List Barang')])

@section('content')
    @include('layouts.headers.header', ['title' => __('Tambah Kategori')])

    <div class="container-fluid mt--3">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Tambah Kategori') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('kategori.store') }}" autocomplete="off">
                            @csrf

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Informasi Barang') }}</h6> --}}
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Kategori') }}</label>
                                    <input type="text" name="kategori" id="input-kategori" class="form-control form-control-alternative{{ $errors->has('kategori') ? ' is-invalid' : '' }}" placeholder="{{ __('Kategori') }}" value="{{ old('kategori') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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
