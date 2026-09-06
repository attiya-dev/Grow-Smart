@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">{{ t('Review User Questions', 'صارف کے سوالات کا جائزہ') }}: {{ $user->name }}</h2>
    @forelse($questions as $question)
        <div class="card mb-3 shadow-sm"><div class="card-body">
            <div class="mb-3"><strong>{{ t('Category', 'زمرہ') }}:</strong> {{ ucfirst($question->category) }}</div>
            <div class="p-3 bg-light rounded mb-3">{{ $question->question_text }}</div>
            <div class="d-flex gap-2">
                <form action="{{ route('admin.question.approve') }}" method="POST">@csrf<input type="hidden" name="question_id" value="{{ $question->id }}"><button class="btn btn-success">{{ t('Approve', 'منظور کریں') }}</button></form>
                <form action="{{ route('admin.question.reject') }}" method="POST">@csrf<input type="hidden" name="question_id" value="{{ $question->id }}"><button class="btn btn-danger">{{ t('Reject', 'مسترد کریں') }}</button></form>
            </div>
        </div></div>
    @empty
        <div class="alert alert-info">{{ t('No pending questions are available.', 'اس وقت کوئی زیرِ التوا سوال موجود نہیں۔') }}</div>
    @endforelse
</div>
@endsection
