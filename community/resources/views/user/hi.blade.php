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
<h4>Your Questions</h4>

@foreach($questions as $question)
    <div class="card mb-3 shadow-sm">
        <div class="card-body">

            @if($question->question_text)
                <p>{{ $question->question_text }}</p>
            @endif

            @if($question->question_image)
                <img src="{{ asset('storage/'.$question->question_image) }}" class="img-fluid mb-2" alt="Question Image">
            @endif

            <!-- Status -->
          <!-- Status -->
<p><strong>Status:</strong> 
    <span class="badge bg-{{ $question->status == 'pending' ? 'warning' : ($question->status == 'approved' ? 'success' : 'danger') }}">
        {{ ucfirst($question->status) }}
    </span>
</p>

{{-- ⭐ SHOW EDIT ONLY IF THERE ARE NO ANSWERS AND QUESTION IS PENDING --}}
@if($question->answers->count() == 0 && $question->status == 'pending')
    <a href="{{ route('question.edit', $question->id) }}" 
       class="btn btn-warning btn-sm mt-2">✏ Edit Question</a>
@endif

{{-- ❗ Delete button ALWAYS shown --}}
<form action="{{ route('question.delete', $question->id) }}" method="POST" 
      onsubmit="return confirm('Are you sure you want to delete this question?');">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm mt-2">Delete Question</button>
</form>


            <hr>

            <h6>Answers:</h6>

            @forelse($question->answers as $answer)
                <div class="border p-2 mb-2 rounded">
                    @if($answer->answer_text)
                        <p>{{ $answer->answer_text }}</p>
                    @endif

                    @if($answer->answer_image)
                        <img src="{{ asset('storage/'.$answer->answer_image) }}" class="img-fluid" alt="Answer Image">
                    @endif

                    <small class="text-muted">Answered by: {{ $answer->expert->name }}</small>
                </div>
            @empty
                <p class="text-muted">No answers yet.</p>
            @endforelse

        </div>
    </div>
@endforeach
        <div class="row">
    <div class="col-md-6">
        <!-- Ask Question Form -->
        <div class="card mb-4 shadow-sm">
           <div class="card-header" style="background-color: rgb(72, 188, 72); color: white;">Ask another Question</div>
            <div class="card-body">
                <form method="POST" action="/question" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Question Text</label>
                        <textarea name="question_text" class="form-control" rows="3"></textarea>
                    </div>
                   
<button type="submit" class="btn btn-primary" style="background-color: rgb(72, 188, 72); border-color:rgb(72, 188, 72);">Submit Question</button>
                </form>
            </div>
@endsection
</body>
</html>

