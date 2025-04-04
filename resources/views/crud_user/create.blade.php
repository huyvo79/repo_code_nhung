<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
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

<body>
    <div class="nav">
        <ul>
            <li><a href="">Home </a></li>
            <li><a href="">Đăng Nhập </a></li>
            <li><a href="">Đăng ký </a></li>
        </ul>
    </div>
    <div class="formLogin">
        <h1 style="text-align: center;">Màn hình đăng ký</h1>
        <form action="{{ route('user.postUser') }}" method="POST">
            @csrf
            <input name="id" type="hidden">
            <div class="userName mb-3">
            <label for="userName">user name: </label>
                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                   required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <label for="age">tuoi: </label>
                <input type="number" placeholder="age" id="age" class="form-control" name="age"
                   required autofocus>
            </div>
            <label for="soThich">so thich: </label>
                <input type="text" placeholder="soThich" id="soThich" class="form-control" name="soThich"
                   required autofocus>
                
            </div>
            <div class="email">
            <label for="email">email: </label>

                <input type="text" placeholder="Email" id="email_address" class="form-control"
                  name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="password">
            <label for="password">password </label>

                <input type="password" placeholder="Password" id="password"  name="password"
                    required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="RePassword">
                <label for="Recomfirm">comfirm <br>password: </label>
                <input type="password" placeholder="comfirm yor password" id="RePassword"  name="RePassword"
                    required>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
            <div class="dangNhap">
                <a href="#">Đã có tài khoản</a>
                <button type="submit">đăng ký</button>
            </div>
        </form>
      
    </div>
    <div class="nav_foot">
        lập trình web 2025
    </div>
</body>

</html>