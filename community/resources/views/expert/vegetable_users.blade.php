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
        margin: 20px auto;
    }

    h2 {
        color: #1b5e20;
        margin-bottom: 10px;
    }

    .text {
        color: #666;
        margin-bottom: 25px;
    }

    .user-card {
        background: white;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .user-name {
        color: #2e7d32;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .questions {
        color: #666;
    }

    .view-btn {
        background: #2e7d32;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 25px;
    }

    .view-btn:hover {
        background: #1b5e20;
        color: white;
    }

    .no-users {
        background: #fff3cd;
        color: #856404;
        padding: 15px;
        border-radius: 10px;
    }

    @media (max-width: 600px) {
        .user-card {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .view-btn {
            width: 100%;
            text-align: center;
        }
    }
</style>

<div class="container">

    <h2>🥬 Users Vegetable Questions</h2>

    <p class="text">
        Select a user to see their vegetable questions.
    </p>

    @forelse($users as $user)

        <div class="user-card">

            <div>

                <div class="user-name">
                    👨‍🌾 {{ $user->name }}
                </div>

                <div class="questions">
                    {{ $user->question_count }}
                    {{ $user->question_count == 1 ? 'Question' : 'Questions' }}
                </div>

            </div>

            <a
                href="{{ route('expert.vegetable.user.questions', $user->id) }}"
                class="view-btn">

                View Questions →

            </a>

        </div>

    @empty

        <div class="no-users">
            No users have unanswered vegetable questions.
        </div>

    @endforelse

</div>

@endsection