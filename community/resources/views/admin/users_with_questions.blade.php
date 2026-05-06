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
<h3 class="mb-4">Users Who Asked Questions</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Total Questions</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->questions->count() }}</td>
                <td>
                    <a href="{{ route('admin.user.questions.review', $user->id) }}" 
                       class="btn btn-warning btn-sm">
                       View Questions
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

</body>
</html>