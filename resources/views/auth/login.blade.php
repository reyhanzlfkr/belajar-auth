@extends('auth.layouts')

@section('content')
<div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('authenticate') }}" method="post">
                                            @csrf 
                                            <div class="form-floating mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                                                <input class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-floating mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                                                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password">
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
@endsection