<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <style>
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 20px;
    margin-bottom: 20px;
}

/* Question & Answer Images */
.card img {
    max-width: 50%;       /* image width 50% of container */
    height: auto;         /* maintain aspect ratio */
    display: block;
    margin: 10px auto;    /* center horizontally */
    border-radius: 10px;
}

/* Answers section */
.answers-section {
    margin-top: 10px;
}

.answers-section h6 {
    margin-bottom: 10px;
}

.answer-box {
    background-color: #f9f9f9;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 10px;
}

/* Form styling */
form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-bottom: 10px;
}

form button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 10px;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

/* Responsive design */
@media (max-width: 768px) {
    .card {
        padding: 10px;
    }

    .card img {
        max-width: 100%;   /* full width on small screens */
    }
}
</style>

</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        
        <h4 class="mb-3">All Questions</h4>

        @foreach($questions as $question)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">

                    <!-- Question Info -->
                    <strong>Asked by:</strong> {{ $question->user->name }} <br>

                    @if($question->question_text)
                        <p class="mt-2">{{ $question->question_text }}</p>
                    @endif

                    @if($question->question_image)
                        <img src="{{ asset('storage/'.$question->question_image) }}"
                             class="img-fluid mb-2 rounded" 
                             alt="Question Image">
                    @endif

                    <hr>

                    <!-- Answers Listing -->
                    <h6>Answers:</h6>
                    @forelse($question->answers as $answer)
                        <div class="border p-2 mb-2 rounded bg-light">
                            @if($answer->answer_text)
                                <p>{{ $answer->answer_text }}</p>
                            @endif
                            <small class="text-muted">
                                Answered by: {{ $answer->expert->name }}
                            </small>
    </div>
</div>
                    @empty
                        <p class="text-muted">No answers yet.</p>
                    @endforelse

                    <!-- Admin Answer Form (TEXT ONLY) -->
                    <form method="POST" action="/answer">
                        @csrf
                        <input type="hidden" name="question_id" value="{{ $question->id }}">

                        <div class="mb-2">
                            <textarea name="answer_text"
                                      class="form-control"
                                      placeholder="Write your answer..."
                                      rows="2"
                                      required></textarea>
                        </div>

                        <button class="btn btn-primary btn-sm" style="background-color: rgb(72, 188, 72); border-color: rgb(72, 188, 72);">Submit Answer</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection

</body>
</html>