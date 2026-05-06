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
<h3>{{ $user->name }} - Pending Questions</h3>

@foreach($questions as $question)
<div class="card mb-3 shadow-sm">
    <div class="card-body">

        <p><strong>Status:</strong> 
            <span class="badge bg-{{ $question->status == 'pending' ? 'warning' : ($question->status == 'approved' ? 'success' : 'danger') }}">
                {{ ucfirst($question->status) }}
            </span>
        </p>

        @if($question->question_text)
            <p>{{ $question->question_text }}</p>
        @endif

        @if($question->question_image)
            <img src="{{ asset('storage/'.$question->question_image) }}" class="img-fluid mb-2">
        @endif

        <hr>

        @if($question->status == 'pending')
        <form method="POST" action="{{ route('admin.question.approve') }}" style="display:inline-block;">
            @csrf
            <input type="hidden" name="question_id" value="{{ $question->id }}">
            <button class="btn btn-success btn-sm">Approve / Post</button>
        </form>

        <form method="POST" action="{{ route('admin.question.reject') }}" style="display:inline-block;">
            @csrf
            <input type="hidden" name="question_id" value="{{ $question->id }}">
            <button class="btn btn-danger btn-sm">Reject</button>
        </form>
        @endif
    </div>
</div>
@endforeach

@endsection

</body>
</html>