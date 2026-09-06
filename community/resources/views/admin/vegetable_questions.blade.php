@extends('layouts.app')

@section('content')

<style>

body {
    background: #eef5ee;
    font-family: Arial, sans-serif;
}

.container {
    width: 90%;
    max-width: 1000px;
    margin: 10px auto 40px;
}

.heading {
    text-align: center;
    margin-bottom: 20px;
}

.heading h1 {
    color: #1b5e20;
    font-size: 36px;
    margin: 0;
}

.question-card {
    background: white;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}

.user {
    color: #2e7d32;
    font-weight: bold;
    margin-bottom: 15px;
}

.question-text {
    color: #333;
    margin-bottom: 15px;
    line-height: 1.6;
}

.question-image {
    width: 250px;
    max-width: 100%;
    margin-top: 10px;
    border-radius: 10px;
}

.voice {
    margin-top: 15px;
}

.voice-title {
    color: #2e7d32;
    font-weight: bold;
    margin-bottom: 10px;
}

.voice-item {
    margin-bottom: 10px;
}

audio {
    width: 100%;
}

.btn {
    border: none;
    padding: 12px 25px;
    border-radius: 30px;
    cursor: pointer;
    color: white;
    margin-top: 20px;
    margin-right: 10px;
    font-size: 15px;
}

.approve {
    background: #2e7d32;
}

.approve:hover {
    background: #1b5e20;
}

.reject {
    background: #d32f2f;
}

.reject:hover {
    background: #b71c1c;
}

.empty {
    text-align: center;
    color: #d32f2f;
    font-size: 22px;
    margin-top: 50px;
}

</style>

<div class="container">

    <div class="heading">
        <h1>{{ t('🥕 Vegetable Questions', '🥕 سبزیوں سے متعلق سوالات') }}</h1>
    </div>

    @if($questions->count() == 0)

        <div class="empty">
            {{ t('No Pending Vegetable Questions', 'سبزیوں سے متعلق کوئی زیرِ التوا سوال نہیں ہے۔') }}
        </div>

    @else

        @foreach($questions as $question)

            <div class="question-card">

                <div class="user">
                    Asked By: {{ $question->user->name }}
                </div>

                @if($question->question_text)

                    <div class="question-text">
                        {{ $question->question_text }}
                    </div>

                @endif

                @if($question->question_image)

                    <img
                        src="{{ asset('storage/' . $question->question_image) }}"
                        class="question-image"
                    >

                @endif

                @if($question->question_voice)

                    <div class="voice">

                        <div class="voice-title">
                            {{ t('🎤 Voice Question', '🎤 آواز میں سوال') }}s
                        </div>

                        @foreach($question->question_voice as $voice)

                            <div class="voice-item">

                                <audio controls>
                                    <source src="{{ asset('storage/' . $voice) }}">
                                </audio>

                            </div>

                        @endforeach

                    </div>

                @endif

                <form
                    action="{{ route('admin.question.approve') }}"
                    method="POST"
                    style="display:inline;"
                >

                    @csrf

                    <input
                        type="hidden"
                        name="question_id"
                        value="{{ $question->id }}"
                    >

                    <button type="submit" class="btn approve">
                        {{ t('Approve', 'منظور کریں') }}
                    </button>

                </form>

                <form
                    action="{{ route('admin.question.reject') }}"
                    method="POST"
                    style="display:inline;"
                >

                    @csrf

                    <input
                        type="hidden"
                        name="question_id"
                        value="{{ $question->id }}"
                    >

                    <button type="submit" class="btn reject">
                        {{ t('Reject', 'مسترد کریں') }}
                    </button>

                </form>

            </div>

        @endforeach

    @endif

</div>

@endsection
