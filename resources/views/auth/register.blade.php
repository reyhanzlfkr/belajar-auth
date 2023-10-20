@extends('auth.layouts')

@section('content')


        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                <div class="card-body">
                    <form action="{{ route('store') }}" method="post">  
                            @csrf
                            <div class="cold-md-5">
                                    <div class="col-md-6">
                                        <label for="inputLastName">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                            </div>
                                    <div class="cold-md-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                            <label for="inputLastName">Last name</label>
                                        </div>
                                    </div>
                                
                                        <div class="cold-md-3">                                                
                                            <div class="col-md-6">
                                                <label for="inputLastName">Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>                          
                                        </div>
                                            <div class="row mb-3">
                                                <div class="col-md-7">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label for="inputLastName">Password</label>
                                                        <input type="password" class="form-control"  @error('password') is-invalid @enderror" id="password" name="password">
                                                        @if ($errors->has('password'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-6">
                                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                                    </div>
                                                </div>
                                            
                                                <div class="mt-4 mb-0">
                                                        <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                                                </div>
                    </form>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection