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
<div class="container">
    <h4 class="mb-3">All Users</h4>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Questions status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                    @php
                        $unanswered = $user->questions()->doesntHave('answers')->count();
                    @endphp
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($unanswered > 0)
                                <span class="badge bg-warning text-dark">{{ $unanswered }}</span>
                            @else
                                <span class="badge bg-success">All Answered</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('expert.user.questions', $user->id) }}"
                               class="btn btn-sm {{ $unanswered > 0 ? 'btn-warning' : 'btn-success' }}">
                               View Questions
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

</body>
</html>