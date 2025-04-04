
<style>
    .formLogin * :not(.checkbox *) {
    margin-bottom: 10px;
 }
 .formLogin{
  padding: 20px;
  border: solid black 2px;
  margin: auto;
  margin-top: 10vh;
  width: 500px;
  width: fit-content;
 }
 .formLogin div {
    display: flex;
    align-items: center;
    justify-content: space-between; 
   }
 .formLogin .checkbox{
  margin-left: 20px;
 }
 .dangNhap{
  display: flex;
  align-items: center;
  justify-content: center;
 }
 .dangNhap *{
  margin-left: 20px;
 }
 .dangNhap button{
  background: rgb(89, 89, 212);
  border-radius: 5px;
  padding: 3px;
 }
 .dangNhap a{
  text-decoration: none;
 }
 .nav {
  border: 2px solid black;
  text-align: center;
 }
 .nav ul{
  display: flex;
  justify-content: center;
 }
 .nav ul li {
  list-style: none;
  margin-left: 20px;
 }
 .nav ul li:not(:last-child) {
  border-right: 1px solid black;
 }
 .nav ul li a {
  text-decoration: none;
  padding-right: 5px;
 }
 .nav_foot {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  border: 2px solid black;
  height: 50px;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
 }
 div input:not(.checkbox input){
    width:280px;
    height: 20px;
 }
.checkbox input{
    margin-left: 50px;
 }
 table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
}
table:first-child {
    border-bottom: 1px solid black;
    border-top: 1px solid black;
}
tr:first-child {
    border-bottom: 1px solid black;
}
th, td{
    border-left: 1px solid black;
    padding: 8px;

}
th {
    background-color: #e9cc7c;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
div.nav.phanTrang{
    border: none;
    position: fixed;
    bottom: 60px;
    left: 40%;
    text-align: center;
}

</style>
    <div class="nav">
        <ul>
            <li><a href="">Home </a></li>
            <li><a href="">Đăng Nhập </a></li>
            <li><a href="{{ route('user.createUser') }}">Đăng ký </a></li>
        </ul>
    </div>
    <div class="formLogin">
        <h1 style="text-align: center;">Màn hình đăng nhập</h1>
        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <div class="email mb-3">
                <label for="email">Email: </label>
                <input type="text" placeholder="Email" id="email" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="password">
                <label for="password">password: </label>
                <input type="password" placeholder="Password" id="password" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
            <div class="dangNhap">
                <a href="#">Quên mật Khẩu</a>
                <button type="submit">Đăng Nhập </button>
            </div>

    </div>
    <div class="nav_foot">
        lập trình web 2025
    </div>
    <!-- <form method="POST" action="{{ route('user.authUser') }}">


        <div class="email mb-3">
            <label for="email">Email: </label>
            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
        <div class="d-grid mx-auto">
            <button type="submit" class="btn btn-dark btn-block">Signin</button>
        </div>
    </form> -->

