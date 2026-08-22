@extends('layouts.app')

@section('content')

<div class="container">

<h2>All Registered Users</h2>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>
<th>Status</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

@forelse($users as $user)

<tr>

<td>{{ $user->id }}</td>

<td>{{ $user->name }}</td>

<td>{{ $user->email }}</td>

<td>

@if($user->is_admin)

<span class="badge bg-primary">Admin</span>

@elseif($user->is_expert)

<span class="badge bg-success">Expert</span>

@else

<span class="badge bg-secondary">User</span>

@endif

</td>

<td>

@if($user->is_active)

<span class="text-success">Active</span>

@else

<span class="text-danger">Inactive</span>

@endif

</td>

<td>

@if(!$user->is_admin)

<form action="{{ route('admin.makeAdmin') }}"
method="POST"
style="display:inline;">

@csrf

<input type="hidden"
name="user_id"
value="{{ $user->id }}">

<button class="btn btn-primary btn-sm">

Make Admin

</button>

</form>

@endif



@if(!$user->is_expert)

<form action="{{ route('admin.makeExpert') }}"
method="POST"
style="display:inline;">

@csrf

<input type="hidden"
name="user_id"
value="{{ $user->id }}">

<button class="btn btn-success btn-sm">

Make Expert

</button>

</form>

@endif



@if($user->is_admin || $user->is_expert)

<form action="{{ route('admin.makeUser') }}"
method="POST"
style="display:inline;">

@csrf

<input type="hidden"
name="user_id"
value="{{ $user->id }}">

<button class="btn btn-secondary btn-sm">

Make User

</button>

</form>

@endif



<form action="{{ route('admin.toggleActive') }}"
method="POST"
style="display:inline;">

@csrf

<input type="hidden"
name="user_id"
value="{{ $user->id }}">

<button class="btn btn-warning btn-sm">

{{ $user->is_active ? 'Deactivate' : 'Activate' }}

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="6" align="center">

No Users Found

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

@endsection