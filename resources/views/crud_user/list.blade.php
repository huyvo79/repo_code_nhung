<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<style>
    .formLogin * :not(.checkbox *) {
        margin-bottom: 10px;
    }

    .formLogin {
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

    .formLogin .checkbox {
        margin-left: 20px;
    }

    .dangNhap {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dangNhap * {
        margin-left: 20px;
    }

    .dangNhap button {
        background: rgb(89, 89, 212);
        border-radius: 5px;
        padding: 3px;
    }

    .dangNhap a {
        text-decoration: none;
    }

    .nav {
        border: 2px solid black;
        text-align: center;
    }

    .nav ul {
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

    div input:not(.checkbox input) {
        width: 280px;
        height: 20px;
    }

    .checkbox input {
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

    th,
    td {
        border-left: 1px solid black;
        padding: 8px;

    }

    th {
        background-color:white;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    div.nav.phanTrang {
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
            <li><a href="{{ route('signout') }}">Đăng xuất </a></li>
        </ul>
    </div>
    <p style="text-align: center; font-size: 2rem;">Danh sách User</p>
    <div class="table">
        <table>
            <tr>
                <th>STT</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Thao tác</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->email }}</th>
                    <th>
                        @foreach($user->roles as $role)
                            <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                {{ $role->name . '-' }}
                            </a>
                        @endforeach
                    </th>
                    <th>
                        <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>

    <!-- <div class="nav phanTrang">
        <ul>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href="">5</a></li>
            <li><a href="">6</a></li>
        </ul>
    </div>
    <div class="nav_foot">
        lập trình web 2025
    </div> -->
</body>

</html>