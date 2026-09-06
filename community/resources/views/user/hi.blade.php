@extends('layouts.app')

@section('content')

<style>
    .my-q-wrap { max-width:950px; width:92%; margin:30px auto; }
    .my-q-card { border-radius:14px; }
    .answer-box { background:#f8fbf8; border:1px solid #dcebdd; border-radius:10px; padding:14px; margin-bottom:10px; }
    .question-more-wrap { position:relative; display:flex; justify-content:flex-end; margin-top:15px; }
    .question-more-btn { width:42px;height:42px;border:0;border-radius:50%;background:#f1f3f1;color:#333;font-size:24px;cursor:pointer; }
    .question-more-btn:hover { background:#e2e7e2; }
    .question-more-menu { display:none; position:absolute; right:0; bottom:48px; min-width:180px; background:#fff; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,.18); overflow:hidden; z-index:100; }
    .question-more-menu.show { display:block; }
    .question-delete-option { width:100%; border:0; background:#fff; color:#dc3545; text-align:left; padding:12px 14px; cursor:pointer; }
    .question-delete-option:hover { background:#fff1f1; }
</style>

<div class="my-q-wrap">
    <h4 class="mb-4">{{ t('Your Questions', 'آپ کے سوالات') }}</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse($questions as $question)
        <div class="card mb-3 shadow-sm my-q-card">
            <div class="card-body">
                @if($question->question_text)
                    <p>{{ $question->question_text }}</p>
                @endif

                @if($question->question_image)
                    <img src="{{ asset('storage/'.$question->question_image) }}" class="img-fluid mb-2 rounded" style="max-width:300px;" alt="Question Image">
                @endif

                <p>
                    <strong>{{ t('Status', 'حیثیت') }}:</strong>
                    <span class="badge bg-{{ $question->status == 'pending' ? 'warning' : ($question->status == 'approved' ? 'success' : 'danger') }}">
                        {{ ucfirst($question->status) }}
                    </span>
                </p>

                @if($question->answers->count() == 0 && $question->status == 'pending')
                    <a href="{{ route('question.edit', $question->id) }}" class="btn btn-warning btn-sm">
                        ✏ {{ t('Edit Question', 'سوال میں ترمیم کریں') }}
                    </a>
                @endif

                @if($question->answers->count())
                    <hr>
                    <h6 class="text-success">{{ t('Expert Answers', 'ماہر کے جوابات') }}</h6>
                    @foreach($question->answers as $answer)
                        <div class="answer-box">
                            <strong>👨‍🌾 {{ $answer->expert->name ?? t('Expert', 'ماہر') }}</strong>
                            @if($answer->answer_text)
                                <p class="mt-2 mb-1">{{ $answer->answer_text }}</p>
                            @endif
                            @if($answer->answer_image)
                                <img src="{{ asset('storage/'.$answer->answer_image) }}" class="img-fluid rounded mt-2" style="max-width:240px;">
                            @endif
                            @if($answer->answer_voice)
                                @foreach((is_array($answer->answer_voice) ? $answer->answer_voice : [$answer->answer_voice]) as $voice)
                                    <audio controls class="w-100 mt-2"><source src="{{ asset('storage/'.$voice) }}"></audio>
                                @endforeach
                            @endif
                        </div>
                    @endforeach
                @else
                    <hr>
                    <h6>{{ t('Answers', 'جوابات') }}</h6>
                    <p class="text-muted">{{ t('No answers yet.', 'ابھی تک کوئی جواب نہیں آیا۔') }}</p>
                @endif

                @if($question->answers->count() || $question->status == 'rejected')
                    <div class="question-more-wrap">
                        <button type="button" class="question-more-btn">⋮</button>
                        <div class="question-more-menu">
                            <form action="{{ route('question.delete', $question->id) }}" method="POST"
                                  onsubmit="return confirm('{{ t('Delete this question?', 'کیا یہ سوال حذف کرنا چاہتے ہیں؟') }}');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="question-delete-option">🗑 {{ t('Delete Question', 'سوال حذف کریں') }}</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @empty
        <div class="alert alert-info">{{ t('You have not asked any questions yet.', 'آپ نے ابھی تک کوئی سوال نہیں پوچھا۔') }}</div>
    @endforelse
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.question-more-btn').forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.stopPropagation();
            const menu = button.nextElementSibling;
            document.querySelectorAll('.question-more-menu').forEach(function (other) {
                if (other !== menu) other.classList.remove('show');
            });
            menu.classList.toggle('show');
        });
    });
    document.addEventListener('click', function () {
        document.querySelectorAll('.question-more-menu').forEach(function (menu) {
            menu.classList.remove('show');
        });
    });
});
</script>

@endsection
