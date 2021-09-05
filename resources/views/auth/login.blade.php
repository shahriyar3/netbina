@extends('layouts.app-login')

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block "></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">وارد شوید</h1>
                        </div>
                        <div id="result">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if($errors->any())
                                @foreach($errors->all() as $key => $error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <form method="post" action="{{ route('login.submit') }}" autocomplete="off" class="user" name="form-login"
                              id="form-login"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user"
                                       id="password" aria-describedby="emailHelp" value="{{ old('email') }}"
                                       placeholder="ایمیل" >
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                       id="password" placeholder="رمز عبور" >
                            </div>

                            <div class="form-group form-check">
                                <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    مرا به خاطر بسپار
                                </label>
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                ورود
                            </button>

                        </form>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block "></div>
            </div>
        </div>
    </div>
@endsection
