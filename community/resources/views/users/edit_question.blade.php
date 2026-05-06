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
<div class="row">
    <div class="col-md-6 offset-md-3">

        <div class="card shadow-sm">
            <div class="card-header bg-warning text-white">
                Edit Your Question
            </div>

            <div class="card-body">

                <form method="POST" action="{{ route('question.update', $question->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Question Text</label>
                        <textarea name="question_text" class="form-control" rows="3">{{ $question->question_text }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Current Image</label><br>
                        @if($question->question_image)
                            <img src="{{ asset('storage/'.$question->question_image) }}" 
                                 class="img-fluid mb-2 rounded" 
                                 width="150">
                        @else
                            <p class="text-muted">No image uploaded.</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload New Image (optional)</label>
                        <input type="file" name="question_image" class="form-control">
                    </div>

                    <button class="btn btn-warning w-100">Update Question</button>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection

</body>
</html>