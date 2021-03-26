@extends('layouts.auth')

@section('content')
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <h4>Reset Password</h4>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <form class="pt-3" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                  <input id="email" type="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>

                <div class="mt-3">
                  <button type="submit"  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Send Password Reset Link</button>
                </div>

    </div>

@endsection