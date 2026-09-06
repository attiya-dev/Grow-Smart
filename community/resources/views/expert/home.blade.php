@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-4">
        <h2>{{ t('Expert Questions', 'ماہر کے لیے سوالات') }}</h2>
        <p>{{ t('Approved questions waiting for an expert answer.', 'منظور شدہ سوالات جو ماہر کے جواب کے منتظر ہیں۔') }}</p>
    </div>

    @forelse($questions as $question)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <div class="mb-2"><strong>{{ t('Category', 'زمرہ') }}:</strong> {{ ucfirst($question->category) }}</div>
                <div class="mb-3"><strong>{{ t('User', 'صارف') }}:</strong> {{ $question->user->name ?? '' }}</div>
                <div class="p-3 bg-light rounded">{{ $question->question_text }}</div>
                @if($question->question_image)
                    <img src="{{ asset('storage/'.$question->question_image) }}" class="img-fluid rounded mt-3" style="max-width:320px">
                @endif
                @if($question->question_voice)
                    <audio controls class="w-100 mt-3">
                        <source src="{{ asset('storage/'.(is_array($question->question_voice) ? ($question->question_voice[0] ?? '') : $question->question_voice)) }}">
                    </audio>
                @endif
                <a href="{{ route('expert.crop') }}" class="btn btn-success mt-3">{{ t('Open Crop Questions', 'فصلوں کے سوالات کھولیں') }}</a>
            </div>
        </div>
    @empty
        <div class="alert alert-info text-center">{{ t('No questions are waiting for an expert answer.', 'اس وقت ماہر کے جواب کے لیے کوئی سوال موجود نہیں۔') }}</div>
    @endforelse
</div>
@endsection
