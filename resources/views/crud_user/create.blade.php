@extends('dashboard');
@section('content')
<main>
    <div class="formLogin col-md-4 mx-auto border border-1 border-dark mt-5 p-4">
        <h1 style="text-align: center;">Màn hình đăng ký</h1>
        <form action="{{ route('user.postUser') }}" method="POST">
            @csrf
            <input name="id" type="hidden">
            <div class="userName mb-3">
                <label for="userName">user name: </label>
                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="email">
                <label for="email">email: </label>

                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required
                    autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="password">
                <label for="password">password </label>

                <input class="form-control" type="password" placeholder="Password" id="password" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="RePassword">
                <label for="Recomfirm">comfirm <br>password: </label>
                <input class="form-control"  type="password" placeholder="comfirm yor password" id="RePassword" name="RePassword" required>
            </div>
            <div class="form-check">
                <label>
                    <input class="form-check-input"  type="checkbox" name="remember"> Remember Me
                </label>
            </div>
            <div class="dangNhap">
                <a href="#">Đã có tài khoản</a>
                <button class="btn btn-primary" type="submit">đăng ký</button>
            </div>
        </form>

</main>
@endsection