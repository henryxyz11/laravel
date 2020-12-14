@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--5 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="col text-center pb-2">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('argon') }}/img/brand/angkasa.png" height="70px">
                            </a>
                        </div>
                        <div class="text-center "><h1><b>SIGN UP</b></h1></div>
                        <div class="text-muted text-center mt-1 mb-0"><small>{{ __('Sign up your account') }}</small></div>
                        {{-- <div class="text-center">
                             <a href="#" class="btn btn-neutral btn-icon mr-4">
                                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/github.svg"></span>
                                <span class="btn-inner--text">{{ __('Github') }}</span>
                            </a>
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/google.svg"></span>
                                <span class="btn-inner--text">{{ __('Google') }}</span>
                            </a>
                        </div> --}}
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        {{-- <div class="text-center text-muted mb-4">
                            <small>{{ __('Or sign up with credentials') }}</small>
                        </div> --}}
                        <form role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-file ">
                                  <input type="file" id="avatar" name="avatar" class="custom-file-input">
                                  <label class="custom-file-label form-control" for="avatar">
                                    <i class="ni ni-album-2">&nbsp;&nbsp</i>
                                    Upload Your Photo</label>
                                  </div>
                              </div>

                              {{-- <div class="form-group">
                              <select name="user" id="user" class="form-control">
                                  <option value="">== Select Departemen ==</option>
                                 @foreach ($user as $id => $user)
                                 <option value="{{ $id }}">{{ $user}}
                                </option> @endforeach
                            </select>
                              </div> --}}



                            {{-- <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Departemen') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div> --}}
                            {{-- <div class="text-muted font-italic">
                                <small>{{ __('password strength') }}: <span class="text-success font-weight-700">{{ __('strong') }}strong</span></small>
                            </div> --}}
                            {{-- <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        {{-- <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Privacy Policy') }}</a></span>
                                        </label>
                                    {{-- </div>
                                </div>
                            </div> --}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                            </div>
                            <div class="text-muted text-center mt-1 mb-0">
                                <small>{{ __('Already Have an Account?') }}
                                <a href="{{route('login')}}">Login Here</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
