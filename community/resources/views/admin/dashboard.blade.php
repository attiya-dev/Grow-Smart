<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      @extends('layouts.app')

@section('content')
<h4 class="mb-4">Admin Dashboard - Manage Users</h4>
<table class="table table-striped shadow-sm">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->is_admin)
                        Admin
                    @elseif($user->is_expert)
                        Expert
                    @else
                        User
                    @endif
                </td>
                <td>{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
                <td>
                    {{-- Role buttons: only one role at a time --}}
                    @if(!$user->is_admin)
                        <form method="POST" action="{{ url('/admin/make-admin') }}" style="display:inline-block;">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button class="btn btn-primary btn-sm">Make Admin</button>
                        </form>
                    @endif

                    @if(!$user->is_expert)
                        <form method="POST" action="{{ url('/admin/make-expert') }}" style="display:inline-block;">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button class="btn btn-success btn-sm">Make Expert</button>
                        </form>
                    @endif

                    @if($user->is_admin || $user->is_expert)
                        <form method="POST" action="{{ url('/admin/make-user') }}" style="display:inline-block;">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button class="btn btn-secondary btn-sm">Make User</button>
                        </form>
                    @endif

                    {{-- Toggle Active --}}
                    <form method="POST" action="{{ url('/admin/toggle-active') }}" style="display:inline-block;">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button class="btn btn-warning btn-sm">
                            {{ $user->is_active ? 'Deactivate' : 'Activate' }}
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

</body>
</html>