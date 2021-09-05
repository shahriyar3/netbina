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
                            <h1 class="h4 text-gray-900 mb-4">جمله خود را وارد کنید</h1>
                        </div>
                        <div id="result">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    تعداد جمله های ثبت شده {{ session('message') }}
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
                        <form method="post" action="{{ route('home.show') }}" autocomplete="off" class="user" name="form-sentenses"
                              id="form-sentenses"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <textarea name="body" class="form-control"
                                       id="body" >{{ old('body') }}</textarea>
                                <small id="emailHelp" class="form-text text-muted">جمله ها را با اینتر از همدیگر جدا کنید</small>
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                ثبت
                            </button>

                        </form>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block "></div>
            </div>
        </div>
    </div>
@endsection
