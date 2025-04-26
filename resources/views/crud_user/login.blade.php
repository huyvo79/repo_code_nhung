@extends('dashboard')
@section('content')
    <main>
        
    <div class="col-md-4 mx-auto border border-1 border-dark mt-5 p-4">
        <h1 style="text-align: center;">Màn hình đăng nhập</h1>
        <form   method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <div class="email mb-3">
                <label for="email">Email: </label>
                <input  class="form-control" type="text" placeholder="Email" id="email" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="password">
                <label for="password">password: </label>
                <input class="form-control"  type="password" placeholder="Password" id="password" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember Me
            </div>
            <div class="dangNhap">
                <a href="#">Quên mật Khẩu</a>
                <button class="btn btn-primary w-100 " type="submit">Đăng Nhập </button>
            </div>

    </div>
    </main>
@endsection