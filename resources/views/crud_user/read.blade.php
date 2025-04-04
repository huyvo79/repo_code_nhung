
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
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
            <li><a href="">Đăng xuất </a></li>
        </ul>
    </div>
    <div class="formLogin">
        <h1 style="text-align: center;" >Màn hình chi tiết</h1>
            <div class="id_user">
                <label for="id_user">id: </label>
                <p>{{$messi->id}}</p>
            </div>
            <div class="userName mb-3">
                <label for="userName">user name: </label>
                <p>{{$messi->name}}</p>
            </div>
            <div class="email">
                <label for="email">your email: </label>
                <p>{{$messi->email}}</p>
            </div>
            <div class="age">
                <label for="age">tuoi </label>
                <p>{{$messi->age}}</p>
            </div>
            <div class="soThich">
                <label for="soThich">sothich </label>
                <p>{{$messi->soThich}}</p>
            </div>
            <div class="Update">
              <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}">update</a>
            </div>
    </div>
    <div class="nav_foot">
       lập trình web 2025
    </div>
</body>

</html>