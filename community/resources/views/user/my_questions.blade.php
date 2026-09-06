@extends('layouts.app')

@section('content')

<style>

.my-questions-container {
    width: 80%;
    max-width: 950px;
    margin: 30px auto;
}

.my-question-card {
    border-radius: 12px;
}

.my-question-card .card-body {
    padding: 22px;
}

.answer-box {
    background: #f8fbf8;
    border: 1px solid #dcebdd;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 15px;
}

.voice-box {
    background: white;
    border: 1px solid #dfe8df;
    border-radius: 10px;
    padding: 12px;
    margin-top: 10px;
}

.delete-question-form {
    display: inline-block;
}

.delete-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    align-items: center;
    justify-content: center;
}

.delete-modal-box {
    width: 90%;
    max-width: 420px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}

.delete-modal-header {
    padding: 18px 20px;
    border-bottom: 1px solid #e5e5e5;
}

.delete-modal-header h5 {
    margin: 0;
    color: #1b5e20;
    font-weight: bold;
    font-size: 20px;
}

.delete-modal-body {
    padding: 25px 20px;
    text-align: center;
}

.delete-modal-body h5 {
    margin-bottom: 10px;
}

.delete-modal-body p {
    color: #777;
    margin-bottom: 0;
}

.delete-modal-footer {
    padding: 15px 20px;
    border-top: 1px solid #e5e5e5;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.delete-modal-footer button {
    border: none;
    padding: 9px 18px;
    border-radius: 7px;
    cursor: pointer;
    font-size: 14px;
}

.cancel-delete {
    background: #6c757d;
    color: white;
}

.confirm-delete {
    background: #dc3545;
    color: white;
}

.cancel-delete:hover {
    background: #5a6268;
}

.confirm-delete:hover {
    background: #bb2d3b;
}

.question-more-wrap {
    position: relative;
    display: flex;
    justify-content: flex-end;
    direction: inherit;
}

.question-more-btn {
    width: 42px;
    height: 42px;
    border: 0;
    border-radius: 50%;
    background: #f1f3f1;
    color: #333;
    font-size: 24px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.question-more-btn:hover {
    background: #e2e7e2;
}

.question-more-menu {
    display: none;
    position: absolute;
    bottom: 48px;
    inset-inline-end: 0;
    min-width: 180px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, .18);
    overflow: hidden;
    z-index: 100;
    direction: inherit;
}

.question-more-menu.show {
    display: block;
}

.question-delete-option {
    width: 100%;
    border: 0;
    background: #fff;
    color: #dc3545;
    text-align: start;
    padding: 12px 14px;
    cursor: pointer;
    direction: inherit;
}

.question-delete-option:hover {
    background: #fff1f1;
}

@media (max-width: 768px) {

    .my-questions-container {
        width: 94%;
        margin: 20px auto;
    }

    .my-question-card .card-body {
        padding: 18px;
    }

    .delete-modal-box {
        width: 92%;
    }

}

</style>

<div class="my-questions-container" dir="{{ is_urdu() ? 'rtl' : 'ltr' }}">

<h2 class="mb-4 text-success">
    📋 {{ t('My Questions', 'میرے سوالات') }}
</h2>

@if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif

@forelse($questions as $question)

    <div class="card shadow mb-4 my-question-card">

        <div class="card-body">

            <h5>
                {{ t('Category:', 'زمرہ:') }}
                {{ is_urdu() ? local_text($question, 'category') : ucfirst($question->category) }}
            </h5>

            @if($question->status == 'approved')

                <div class="alert alert-success mt-3">

                    ✅
                    <strong>{{ t('Status:', 'حیثیت:') }}</strong>
                    {{ t('Approved', 'منظور شدہ') }}

                </div>

            @elseif($question->status == 'rejected')

                <div class="alert alert-danger mt-3">

                    ❌
                    <strong>{{ t('Status:', 'حیثیت:') }}</strong>
                    {{ t('Rejected', 'مسترد شدہ') }}

                    <br>

                    {{ t(
                        'Your question was not approved by the admin.',
                        'آپ کا سوال منتظم نے منظور نہیں کیا۔'
                    ) }}

                </div>

            @else

                <div class="alert alert-warning mt-3">

                    ⏳
                    <strong>{{ t('Status:', 'حیثیت:') }}</strong>
                    {{ t(
                        'Waiting for approval',
                        'منظوری کا انتظار ہے'
                    ) }}

                </div>

            @endif

            @if($question->question_text)

                <div class="mt-3">

                    <strong>
                        {{ t('Question:', 'سوال:') }}
                    </strong>

                    <p class="mt-2">
                        {{ $question->question_text }}
                    </p>

                </div>

            @endif

            @if($question->question_image)

                <div class="mb-3">

                    <strong>
                        📷 {{ t(
                            'Uploaded Image',
                            'اپ لوڈ کی گئی تصویر'
                        ) }}
                    </strong>

                    <br>

                    <img
                        src="{{ asset('storage/'.$question->question_image) }}"
                        class="img-fluid rounded mt-2"
                        style="max-width:250px;"
                        alt="{{ t('Question Image', 'سوال کی تصویر') }}"
                    >

                </div>

            @endif

            @if($question->question_voice)

                <div class="mb-3">

                    <strong>
                        🎤 {{ t(
                            'Voice Questions',
                            'صوتی سوالات'
                        ) }}
                    </strong>

                    @php

                        $voices = $question->question_voice;

                        if (is_string($voices)) {

                            $decodedVoices = json_decode(
                                $voices,
                                true
                            );

                            if (
                                json_last_error() === JSON_ERROR_NONE &&
                                is_array($decodedVoices)
                            ) {

                                $voices = $decodedVoices;

                            } else {

                                $voices = [$voices];

                            }

                        }

                        if (!is_array($voices)) {
                            $voices = [$voices];
                        }

                    @endphp

                    @foreach($voices as $index => $voice)

                        @if($voice)

                            <div class="voice-box">

                                <div class="mb-2">

                                    🎤
                                    {{ t(
                                        'Voice Question',
                                        'صوتی سوال'
                                    ) }}
                                    {{ $index + 1 }}

                                </div>

                                <audio
                                    controls
                                    class="w-100"
                                    controlsList="nodownload"
                                >

                                    <source
                                        src="{{ asset('storage/'.$voice) }}"
                                    >

                                    {{ t(
                                        'Your browser does not support audio playback.',
                                        'آپ کا براؤزر آڈیو چلانے کی سہولت فراہم نہیں کرتا۔'
                                    ) }}

                                </audio>

                            </div>

                        @endif

                    @endforeach

                </div>

            @endif

            @if($question->answers->count())

                <hr>

                <h5 class="text-success mb-3">

                    👨‍🌾
                    {{ t(
                        'Expert Answers',
                        'ماہرین کے جوابات'
                    ) }}

                </h5>

                @foreach($question->answers as $answer)

                    <div class="answer-box">

                        <strong>

                            👨‍🌾
                            {{ $answer->expert->name }}

                        </strong>

                        @if($answer->answer_text)

                            <p class="mt-2 mb-3">
                                {{ $answer->answer_text }}
                            </p>

                        @endif

                        @if($answer->answer_image)

                            <div class="mt-2">

                                <strong>

                                    📷
                                    {{ t(
                                        'Expert Image',
                                        'ماہر کی تصویر'
                                    ) }}

                                </strong>

                                <br>

                                <img
                                    src="{{ asset('storage/'.$answer->answer_image) }}"
                                    class="img-fluid rounded mt-2"
                                    style="max-width:220px;"
                                    alt="{{ t(
                                        'Expert Answer Image',
                                        'ماہر کے جواب کی تصویر'
                                    ) }}"
                                >

                            </div>

                        @endif

                        @if($answer->answer_voice)

                            <div class="mt-3">

                                <strong>

                                    🎙
                                    {{ t(
                                        'Expert Voice Replies',
                                        'ماہر کے صوتی جوابات'
                                    ) }}

                                </strong>

                                @php

                                    $answerVoices =
                                        $answer->answer_voice;

                                    if (is_string($answerVoices)) {

                                        $decodedAnswerVoices =
                                            json_decode(
                                                $answerVoices,
                                                true
                                            );

                                        if (
                                            json_last_error() === JSON_ERROR_NONE &&
                                            is_array($decodedAnswerVoices)
                                        ) {

                                            $answerVoices =
                                                $decodedAnswerVoices;

                                        } else {

                                            $answerVoices =
                                                [$answerVoices];

                                        }

                                    }

                                    if (!is_array($answerVoices)) {

                                        $answerVoices =
                                            [$answerVoices];

                                    }

                                @endphp

                                @foreach(
                                    $answerVoices
                                    as $voiceIndex => $answerVoice
                                )

                                    @if($answerVoice)

                                        <div class="voice-box">

                                            <div class="mb-2">

                                                🎙
                                                {{ t(
                                                    'Voice Reply',
                                                    'صوتی جواب'
                                                ) }}
                                                {{ $voiceIndex + 1 }}

                                            </div>

                                            <audio
                                                controls
                                                class="w-100"
                                                controlsList="nodownload"
                                            >

                                                <source
                                                    src="{{ asset('storage/'.$answerVoice) }}"
                                                >

                                                {{ t(
                                                    'Your browser does not support audio playback.',
                                                    'آپ کا براؤزر آڈیو چلانے کی سہولت فراہم نہیں کرتا۔'
                                                ) }}

                                            </audio>

                                        </div>

                                    @endif

                                @endforeach

                            </div>

                        @endif

                    </div>

                @endforeach

            @endif

            @if(
                $question->answers->count() ||
                $question->status == 'rejected'
            )

                <div class="question-more-wrap mt-3">

                    <button
                        type="button"
                        class="question-more-btn"
                        aria-label="{{ t(
                            'More options',
                            'مزید اختیارات'
                        ) }}"
                    >
                        ⋮
                    </button>

                    <div class="question-more-menu">

                        <form
                            action="{{ route(
                                'question.delete',
                                $question->id
                            ) }}"
                            method="POST"
                            class="delete-question-form"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="question-delete-option"
                            >

                                🗑
                                {{ t(
                                    'Delete Question',
                                    'سوال حذف کریں'
                                ) }}

                            </button>

                        </form>

                    </div>

                </div>

            @endif

        </div>

    </div>

@empty

    <div class="alert alert-warning">

        {{ t(
            'You have not asked any questions yet.',
            'آپ نے ابھی تک کوئی سوال نہیں پوچھا۔'
        ) }}

    </div>

@endforelse

</div>

<div
    class="delete-modal"
    id="deleteModal"
>

```
<div class="delete-modal-box">

    <div class="delete-modal-header">

        <h5>
            GrowSmart
        </h5>

    </div>

    <div class="delete-modal-body">

        <h5>
            {{ t(
                'Delete Question?',
                'کیا آپ یہ سوال حذف کرنا چاہتے ہیں؟'
            ) }}
        </h5>

        <p>
            {{ t(
                'Are you sure you want to delete this question?',
                'کیا آپ واقعی یہ سوال حذف کرنا چاہتے ہیں؟'
            ) }}
        </p>

    </div>

    <div class="delete-modal-footer">

        <button
            type="button"
            class="cancel-delete"
            id="cancelDelete"
        >

            {{ t(
                'Cancel',
                'منسوخ کریں'
            ) }}

        </button>

        <button
            type="button"
            class="confirm-delete"
            id="confirmDelete"
        >

            🗑
            {{ t(
                'Delete',
                'حذف کریں'
            ) }}

        </button>

    </div>

</div>

</div>

<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {

        let deleteForm = null;

        const modal =
            document.getElementById("deleteModal");

        const cancelButton =
            document.getElementById("cancelDelete");

        const confirmButton =
            document.getElementById("confirmDelete");

        document
            .querySelectorAll(".delete-question-form")
            .forEach(function (form) {

                form.addEventListener(
                    "submit",
                    function (event) {

                        event.preventDefault();

                        deleteForm = form;

                        modal.style.display = "flex";

                    }
                );

            });

        cancelButton.addEventListener(
            "click",
            function () {

                modal.style.display = "none";

                deleteForm = null;

            }
        );

        confirmButton.addEventListener(
            "click",
            function () {

                if (deleteForm) {

                    HTMLFormElement.prototype.submit.call(
                        deleteForm
                    );

                }

            }
        );

        modal.addEventListener(
            "click",
            function (event) {

                if (event.target === modal) {

                    modal.style.display = "none";

                    deleteForm = null;

                }

            }
        );

        document.addEventListener(
            "keydown",
            function (event) {

                if (
                    event.key === "Escape" &&
                    modal.style.display === "flex"
                ) {

                    modal.style.display = "none";

                    deleteForm = null;

                }

            }
        );

        document
            .querySelectorAll(".question-more-btn")
            .forEach(function (button) {

                button.addEventListener(
                    "click",
                    function (event) {

                        event.stopPropagation();

                        const menu =
                            button.nextElementSibling;

                        document
                            .querySelectorAll(".question-more-menu")
                            .forEach(function (other) {

                                if (other !== menu) {

                                    other.classList.remove(
                                        "show"
                                    );

                                }

                            });

                        menu.classList.toggle("show");

                    }
                );

            });

        document.addEventListener(
            "click",
            function () {

                document
                    .querySelectorAll(".question-more-menu")
                    .forEach(function (menu) {

                        menu.classList.remove("show");

                    });

            }
        );

    }
);

</script>

@endsection
