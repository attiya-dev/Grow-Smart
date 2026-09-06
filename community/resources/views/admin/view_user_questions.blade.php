@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">{{ t('Questions by User', 'صارف کے سوالات') }}: {{ $user->name }}</h2>
    @forelse($questions as $question)
        <div class="card mb-3 shadow-sm"><div class="card-body">
            <div class="mb-2"><strong>{{ t('Category', 'زمرہ') }}:</strong> {{ ucfirst($question->category) }}</div>
            <div class="p-3 bg-light rounded">{{ $question->question_text }}</div>
            <div class="mt-2"><strong>{{ t('Status', 'حالت') }}:</strong> {{ ucfirst($question->status) }}</div>
        </div></div>
    @empty
        <div class="alert alert-info">{{ t('This user has no questions.', 'اس صارف کے کوئی سوالات نہیں ہیں۔') }}</div>
    @endforelse
</div>
@endsection
