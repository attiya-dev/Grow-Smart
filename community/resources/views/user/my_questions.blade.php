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

/* =========================
   CUSTOM DELETE MODAL
========================= */

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

/* =========================
   MOBILE
========================= */

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


<!-- =========================
     MAIN CONTAINER
========================= -->

<div class="my-questions-container">

    <h2 class="mb-4 text-success">
        📋 My Questions
    </h2>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <!-- =========================
         QUESTIONS
    ========================= -->

    @forelse($questions as $question)

        <div class="card shadow mb-4 my-question-card">

            <div class="card-body">


                <!-- CATEGORY -->

                <h5>
                    Category: {{ ucfirst($question->category) }}
                </h5>


                <!-- =========================
                     QUESTION STATUS
                ========================= -->

                @if($question->status == 'approved')

                    <div class="alert alert-success mt-3">

                        ✅ <strong>Status:</strong> Approved

                    </div>

                @elseif($question->status == 'rejected')

                    <div class="alert alert-danger mt-3">

                        ❌ <strong>Status:</strong> Rejected

                        <br>

                        Your question was not approved by the admin.

                    </div>

                @else

                    <div class="alert alert-warning mt-3">

                        ⏳ <strong>Status:</strong>
                        Waiting for approval

                    </div>

                @endif


                <!-- =========================
                     QUESTION TEXT
                ========================= -->

                @if($question->question_text)

                    <div class="mt-3">

                        <strong>
                            Question:
                        </strong>

                        <p class="mt-2">

                            {{ $question->question_text }}

                        </p>

                    </div>

                @endif


                <!-- =========================
                     QUESTION IMAGE
                ========================= -->

                @if($question->question_image)

                    <div class="mb-3">

                        <strong>
                            📷 Uploaded Image
                        </strong>

                        <br>

                        <img
                            src="{{ asset('storage/'.$question->question_image) }}"
                            class="img-fluid rounded mt-2"
                            style="max-width:250px;"
                            alt="Question Image"
                        >

                    </div>

                @endif


                <!-- =========================
                     MULTIPLE VOICE QUESTIONS
                ========================= -->

                @if($question->question_voice)

                    <div class="mb-3">

                        <strong>
                            🎤 Voice Questions
                        </strong>


                        @php

                            $voices = $question->question_voice;

                            /*
                             * If database value is JSON,
                             * convert it into an array.
                             */

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


                            /*
                             * Make sure voices is always an array.
                             */

                            if (!is_array($voices)) {

                                $voices = [$voices];

                            }

                        @endphp


                        @foreach($voices as $index => $voice)

                            @if($voice)

                                <div class="voice-box">

                                    <div class="mb-2">

                                        🎤 Voice Question
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

                                        Your browser does not support
                                        audio playback.

                                    </audio>

                                </div>

                            @endif

                        @endforeach

                    </div>

                @endif


                <!-- =========================
                     EXPERT ANSWERS
                ========================= -->

                @if($question->answers->count())

                    <hr>

                    <h5 class="text-success mb-3">

                        👨‍🌾 Expert Answers

                    </h5>


                    @foreach($question->answers as $answer)

                        <div class="answer-box">


                            <!-- EXPERT NAME -->

                            <strong>

                                👨‍🌾

                                {{ $answer->expert->name }}

                            </strong>


                            <!-- =========================
                                 ANSWER TEXT
                            ========================= -->

                            @if($answer->answer_text)

                                <p class="mt-2 mb-3">

                                    {{ $answer->answer_text }}

                                </p>

                            @endif


                            <!-- =========================
                                 EXPERT IMAGE
                            ========================= -->

                            @if($answer->answer_image)

                                <div class="mt-2">

                                    <strong>
                                        📷 Expert Image
                                    </strong>

                                    <br>

                                    <img
                                        src="{{ asset('storage/'.$answer->answer_image) }}"
                                        class="img-fluid rounded mt-2"
                                        style="max-width:220px;"
                                        alt="Expert Answer Image"
                                    >

                                </div>

                            @endif


                            <!-- =========================
                                 MULTIPLE EXPERT VOICE REPLIES
                            ========================= -->

                            @if($answer->answer_voice)

                                <div class="mt-3">

                                    <strong>
                                        🎙 Expert Voice Replies
                                    </strong>


                                    @php

                                        $answerVoices =
                                            $answer->answer_voice;


                                        /*
                                         * Convert JSON into array.
                                         */

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


                                        /*
                                         * Make sure it is always
                                         * an array.
                                         */

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

                                                    🎙 Voice Reply
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

                                                    Your browser does not
                                                    support audio playback.

                                                </audio>

                                            </div>

                                        @endif

                                    @endforeach

                                </div>

                            @endif

                        </div>

                    @endforeach

                @endif


                <!-- =========================
                     DELETE BUTTON
                ========================= -->

                @if(
                    $question->answers->count() ||
                    $question->status == 'rejected'
                )

                    <div class="text-end mt-3">

                        <form
                            action="{{ route('question.delete', $question->id) }}"
                            method="POST"
                            class="delete-question-form"
                        >

                            @csrf

                            @method('DELETE')


                            <button
                                type="submit"
                                class="btn btn-danger"
                            >

                                🗑 Delete Question

                            </button>

                        </form>

                    </div>

                @endif

            </div>

        </div>


    @empty


        <!-- NO QUESTIONS -->

        <div class="alert alert-warning">

            You have not asked any questions yet.

        </div>


    @endforelse

</div>


<!-- =========================
     CUSTOM DELETE MODAL
========================= -->

<div
    class="delete-modal"
    id="deleteModal"
>

    <div class="delete-modal-box">


        <!-- MODAL HEADER -->

        <div class="delete-modal-header">

            <h5>
                GrowSmart
            </h5>

        </div>


        <!-- MODAL BODY -->

        <div class="delete-modal-body">

            <h5>
                Delete Question?
            </h5>

            <p>
                Are you sure you want to delete this question?
            </p>

        </div>


        <!-- MODAL FOOTER -->

        <div class="delete-modal-footer">

            <button
                type="button"
                class="cancel-delete"
                id="cancelDelete"
            >

                Cancel

            </button>


            <button
                type="button"
                class="confirm-delete"
                id="confirmDelete"
            >

                🗑 Delete

            </button>

        </div>

    </div>

</div>


<!-- =========================
     JAVASCRIPT
========================= -->

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


        /*
         * Open custom confirmation box
         */

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


        /*
         * Cancel delete
         */

        cancelButton.addEventListener(
            "click",
            function () {

                modal.style.display = "none";

                deleteForm = null;

            }
        );


        /*
         * Confirm delete
         */

        confirmButton.addEventListener(
            "click",
            function () {


                if (deleteForm) {

                    /*
                     * Submit the original form
                     * without triggering the
                     * confirmation event again.
                     */

                    HTMLFormElement.prototype.submit.call(
                        deleteForm
                    );

                }

            }
        );


        /*
         * Close modal when clicking
         * outside the modal box.
         */

        modal.addEventListener(
            "click",
            function (event) {


                if (event.target === modal) {

                    modal.style.display = "none";

                    deleteForm = null;

                }

            }
        );


        /*
         * Close modal with Escape key.
         */

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

    }
);

</script>

@endsection