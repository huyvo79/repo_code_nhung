@extends('dashboard');
@section('content')
    <main>
    <p style="text-align: center; font-size: 2rem;">Danh sách User</p>
    <div class="table">
        <table class="table table-bordered">
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
                            <a href="{{ route('user.role', ['role_id' => $role->id]) }}">
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
    {{ $users->links() }};

    </main>

@endsection