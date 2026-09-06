@extends('layouts.app')

@section('content')

<style>
    body {
        background: #f4f8f4;
        font-family: Arial, sans-serif;
    }

    .questions-box {
        width: 92%;
        max-width: 1000px;
        margin: 15px auto 40px;
    }

    .page-title {
        text-align: center;
        margin-bottom: 25px;
    }

    .page-title h2 {
        color: #1b5e20;
        font-size: 32px;
        margin-bottom: 5px;
    }

    .page-title p {
        color: #777;
        margin: 0;
    }

    .question-card {
        background: white;
        border-radius: 18px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2eee3;
    }

    .question-title {
        color: #1b5e20;
        font-size: 21px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .question-text {
        color: #444;
        font-size: 16px;
        line-height: 1.6;
        background: #f7fbf7;
        padding: 14px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .question-image {
        width: 280px;
        max-width: 100%;
        border-radius: 12px;
        margin-bottom: 15px;
        display: block;
    }

    .voice-title {
        color: #2e7d32;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .question-voice {
        width: 100%;
        margin-bottom: 8px;
    }

    .line {
        border: 0;
        border-top: 1px solid #e5e5e5;
        margin: 25px 0;
    }

    .answer-title {
        color: #1b5e20;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .answer-label {
        display: block;
        color: #333;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .answer-text {
        width: 100%;
        min-height: 120px;
        border: 1px solid #d5e2d6;
        border-radius: 12px;
        padding: 14px;
        resize: vertical;
        font-size: 15px;
        outline: none;
    }

    .answer-text:focus {
        border-color: #2e7d32;
        box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.1);
    }

    .image-input {
        width: 100%;
        border: 1px solid #d5e2d6;
        border-radius: 10px;
        padding: 10px;
        background: #fafafa;
    }

    .voice-record-area {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 10px;
    }

    .recordBtn {
        width: 55px;
        height: 55px;
        border: none;
        border-radius: 50%;
        background: #2e7d32;
        color: white;
        font-size: 23px;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(46, 125, 50, 0.25);
        transition: 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .recordBtn:hover {
        background: #1b5e20;
        transform: scale(1.05);
    }

    .recordBtn.recording {
        background: #dc3545;
        animation: pulse 1.2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
        }

        70% {
            box-shadow: 0 0 0 12px rgba(220, 53, 69, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(220, 53, 69, 0);
        }
    }

    .recordTimer {
        color: #dc3545;
        font-size: 18px;
        font-weight: bold;
    }

    .voice-list {
        margin-top: 15px;
        max-width: 100%;
    }

    .voice-item {
        position: relative;
        background: #f4faf4;
        border: 1px solid #d7e9d8;
        border-radius: 12px;
        padding: 9px 10px;
        margin-bottom: 8px;
        max-width: 100%;
    }

    .voice-player {
        display: flex;
        align-items: center;
        gap: 8px;
        width: 100%;
    }

    .playVoiceBtn {
        width: 36px;
        height: 36px;
        border: none;
        border-radius: 50%;
        background: #2e7d32;
        color: white;
        cursor: pointer;
        font-size: 14px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .playVoiceBtn:hover {
        background: #1b5e20;
    }

    .voiceProgress {
        flex: 1;
        min-width: 80px;
        cursor: pointer;
        accent-color: #2e7d32;
    }

    .voiceTime {
        color: #555;
        font-size: 12px;
        min-width: 70px;
        text-align: center;
    }

    .voiceMoreBtn {
        width: 32px;
        height: 32px;
        border: none;
        border-radius: 50%;
        background: transparent;
        color: #333;
        font-size: 21px;
        cursor: pointer;
        flex-shrink: 0;
    }

    .voiceMoreBtn:hover {
        background: #e4e9e4;
    }

    .voice-menu {
        display: none;
        position: absolute;
        right: 10px;
        top: 48px;
        background: white;
        min-width: 160px;
        border-radius: 10px;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.18);
        overflow: hidden;
        z-index: 20;
    }

    .voice-menu.show {
        display: block;
    }

    .voice-delete {
        width: 100%;
        border: none;
        background: white;
        color: #dc3545;
        text-align: left;
        padding: 11px 13px;
        cursor: pointer;
        font-size: 13px;
    }

    .voice-delete:hover {
        background: #fff1f1;
    }

    .submit-answer-btn {
        width: 100%;
        border: none;
        border-radius: 30px;
        background: #2e7d32;
        color: white;
        padding: 14px;
        font-size: 17px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 10px;
        transition: 0.2s;
    }

    .submit-answer-btn:hover {
        background: #1b5e20;
        transform: translateY(-1px);
    }

    .empty-box {
        background: white;
        text-align: center;
        padding: 30px;
        border-radius: 15px;
        color: #777;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    @media (max-width: 600px) {

        .questions-box {
            width: 94%;
            margin-top: 10px;
        }

        .question-card {
            padding: 18px;
        }

        .page-title h2 {
            font-size: 27px;
        }

        .voice-player {
            gap: 5px;
        }

        .voiceTime {
            min-width: 60px;
            font-size: 11px;
        }

        .recordBtn {
            width: 52px;
            height: 52px;
            font-size: 21px;
        }
    }
</style>

<div class="questions-box">

    <div class="page-title">
        <h2>🥬 {{ t('Vegetable Questions', 'سبزیوں سے متعلق سوالات') }}</h2>
        <p>{{ t('Answer the user\'s vegetable questions', 'صارف کے سبزیوں سے متعلق سوالات کے جوابات دیں۔') }}</p>
    </div>

    @forelse($questions as $question)

        <div class="question-card">

            <div class="question-title">
                🥬 {{ t('Vegetable Question', 'سبزی سے متعلق سوال') }}
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

                <div class="voice-title">
                    🎤 {{ t('Voice Question', 'آواز میں سوال') }}
                </div>

                @foreach($question->question_voice as $voice)

                    <audio
                        controls
                        controlsList="nodownload"
                        class="question-voice"
                    >
                        <source src="{{ asset('storage/' . $voice) }}">
                    </audio>

                @endforeach

            @endif

            @if($question->answers->count())
                <div class="existing-answers" style="background:#f8fbf8;border:1px solid #dcebdd;border-radius:12px;padding:15px;margin-bottom:18px;">
                    <div style="color:#1b5e20;font-weight:bold;margin-bottom:10px;">
                        ✓ {{ t('Previous Expert Answers', 'ماہر کے سابقہ جوابات') }}
                    </div>
                    @foreach($question->answers as $answer)
                        <div style="background:#fff;border-radius:10px;padding:12px;margin-bottom:8px;">
                            <strong>👨‍🌾 {{ $answer->expert->name ?? t('Expert', 'ماہر') }}</strong>
                            @if($answer->answer_text)
                                <div class="mt-2">{{ $answer->answer_text }}</div>
                            @endif
                            @if($answer->answer_image)
                                <img src="{{ asset('storage/'.$answer->answer_image) }}" class="img-fluid rounded mt-2" style="max-width:220px;">
                            @endif
                            @if($answer->answer_voice)
                                @foreach((is_array($answer->answer_voice) ? $answer->answer_voice : [$answer->answer_voice]) as $voice)
                                    <audio controls class="w-100 mt-2">
                                        <source src="{{ asset('storage/'.$voice) }}">
                                    </audio>
                                @endforeach
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif

            <hr class="line">

            <div class="answer-title">
                👨‍🌾 {{ t('Your Answer', 'آپ کا جواب') }}
            </div>

            <form
                action="{{ route('answers.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                <input
                    type="hidden"
                    name="question_id"
                    value="{{ $question->id }}"
                >

                <div>

                    <label class="answer-label">
                        {{ t('Write Answer', 'جواب لکھیں') }}
                    </label>

                    <textarea
                        name="answer_text"
                        class="answer-text"
                        placeholder="{{ t('Write your agricultural advice here...', 'اپنا زرعی مشورہ یہاں لکھیں...') }}"
                    ></textarea>

                </div>

                <div style="margin-top:18px;">

                    <label class="answer-label">
                        🖼️ {{ t('Answer Image', 'جواب کی تصویر') }}
                    </label>

                    <input
                        type="file"
                        name="answer_image"
                        class="image-input"
                        accept="image/*"
                        capture="environment"
                    >

                </div>

                <div style="margin-top:18px;">

                    <label class="answer-label">
                        🎤 {{ t('Record Voice Answer', 'آواز میں جواب ریکارڈ کریں') }}
                    </label>

                    <div class="voice-record-area">

                        <button
                            type="button"
                            class="recordBtn"
                            title="{{ t('Start recording', 'ریکارڈنگ شروع کریں') }}"
                        >
                            🎤
                        </button>

                        <span class="recordTimer">
                            00:00
                        </span>

                    </div>

                    <div class="voice-list"></div>

                    <div class="voice-inputs"></div>

                </div>

                <button
                    type="submit"
                    class="submit-answer-btn"
                >
                    👨‍🌾 {{ t('Submit Answer', 'جواب جمع کریں') }}
                </button>

            </form>

        </div>

    @empty

        <div class="empty-box">
            {{ t('This user has no unanswered crop questions.', 'اس صارف کے کوئی غیر جوابی فصلوں سے متعلق سوالات موجود نہیں ہیں۔') }}
        </div>

    @endforelse

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const isUrdu = @json(is_urdu());

    function formatTime(seconds) {

        seconds = Math.floor(seconds);

        let minutes = Math.floor(seconds / 60);
        let secondsLeft = seconds % 60;

        return minutes + ":" + (secondsLeft < 10 ? "0" : "") + secondsLeft;
    }

    document.querySelectorAll(".recordBtn").forEach(function (button) {

        button.addEventListener("click", async function () {

            const form = button.closest("form");
            const timer = form.querySelector(".recordTimer");
            const voiceList = form.querySelector(".voice-list");
            const voiceInputs = form.querySelector(".voice-inputs");

            if (button.classList.contains("recording")) {

                if (button.mediaRecorder) {
                    button.mediaRecorder.stop();
                }

                return;
            }

            try {

                const stream = await navigator.mediaDevices.getUserMedia({
                    audio: true
                });

                const recorder = new MediaRecorder(stream);

                button.mediaRecorder = recorder;

                let chunks = [];
                let seconds = 0;

                recorder.start();

                button.classList.add("recording");
                button.innerHTML = "⏹";
                timer.innerText = "00:00";

                const timerInterval = setInterval(function () {

                    seconds++;
                    timer.innerText = formatTime(seconds);

                }, 1000);

                recorder.ondataavailable = function (event) {

                    if (event.data.size > 0) {
                        chunks.push(event.data);
                    }

                };

                recorder.onstop = function () {

                    clearInterval(timerInterval);

                    stream.getTracks().forEach(function (track) {
                        track.stop();
                    });

                    button.classList.remove("recording");
                    button.innerHTML = "🎤";
                    timer.innerText = "00:00";

                    const blob = new Blob(chunks, {
                        type: recorder.mimeType
                    });

                    let extension = "webm";

                    if (recorder.mimeType.includes("ogg")) {
                        extension = "ogg";
                    }

                    const file = new File(
                        [blob],
                        "answer_voice_" + Date.now() + "." + extension,
                        {
                            type: recorder.mimeType
                        }
                    );

                    const input = document.createElement("input");

                    input.type = "file";
                    input.name = "answer_voice[]";
                    input.hidden = true;

                    const data = new DataTransfer();

                    data.items.add(file);

                    input.files = data.files;

                    voiceInputs.appendChild(input);

                    createVoicePlayer(
                        blob,
                        input,
                        voiceList
                    );
                };

            } catch (error) {

                alert(
                    "Please allow microphone permission to record your answer."
                );

            }

        });

    });

    function createVoicePlayer(blob, input, voiceList) {

        const voiceItem = document.createElement("div");

        voiceItem.className = "voice-item";

        const audio = document.createElement("audio");

        audio.src = URL.createObjectURL(blob);
        audio.className = "recorded-audio";

        const player = document.createElement("div");

        player.className = "voice-player";

        const playButton = document.createElement("button");

        playButton.type = "button";
        playButton.className = "playVoiceBtn";
        playButton.innerHTML = "▶";

        const progress = document.createElement("input");

        progress.type = "range";
        progress.className = "voiceProgress";
        progress.min = 0;
        progress.max = 100;
        progress.value = 0;

        const time = document.createElement("span");

        time.className = "voiceTime";
        time.innerText = "0:00 / 0:00";

        const moreButton = document.createElement("button");

        moreButton.type = "button";
        moreButton.className = "voiceMoreBtn";
        moreButton.innerHTML = "⋮";

        const menu = document.createElement("div");

        menu.className = "voice-menu";

        const deleteButton = document.createElement("button");

        deleteButton.type = "button";
        deleteButton.className = "voice-delete";
        deleteButton.innerHTML = `🗑 ${isUrdu ? 'ریکارڈنگ حذف کریں' : 'Delete Recording'}`;

        menu.appendChild(deleteButton);

        player.appendChild(playButton);
        player.appendChild(progress);
        player.appendChild(time);
        player.appendChild(moreButton);

        voiceItem.appendChild(player);
        voiceItem.appendChild(menu);

        voiceList.appendChild(voiceItem);

        document.body.appendChild(audio);

        playButton.addEventListener("click", function () {

            if (audio.paused) {

                document.querySelectorAll(".recorded-audio").forEach(function (other) {

                    if (other !== audio) {
                        other.pause();
                    }

                });

                audio.play();
                playButton.innerHTML = "⏸";

            } else {

                audio.pause();
                playButton.innerHTML = "▶";

            }

        });

        audio.addEventListener("loadedmetadata", function () {

            time.innerText =
                "0:00 / " + formatTime(audio.duration);

        });

        audio.addEventListener("timeupdate", function () {

            if (audio.duration) {

                progress.value =
                    (audio.currentTime / audio.duration) * 100;

                time.innerText =
                    formatTime(audio.currentTime) +
                    " / " +
                    formatTime(audio.duration);

            }

        });

        audio.addEventListener("ended", function () {

            playButton.innerHTML = "▶";
            progress.value = 0;

        });

        progress.addEventListener("input", function () {

            if (audio.duration) {

                audio.currentTime =
                    (progress.value / 100) * audio.duration;

            }

        });

        moreButton.addEventListener("click", function (event) {

            event.stopPropagation();

            document.querySelectorAll(".voice-menu").forEach(function (otherMenu) {

                if (otherMenu !== menu) {
                    otherMenu.classList.remove("show");
                }

            });

            menu.classList.toggle("show");

        });

        deleteButton.addEventListener("click", function () {

            audio.pause();

            input.remove();
            audio.remove();
            voiceItem.remove();

        });

    }

    document.addEventListener("click", function () {

        document.querySelectorAll(".voice-menu").forEach(function (menu) {

            menu.classList.remove("show");

        });

    });

    document.querySelectorAll("form").forEach(function (form) {

        form.addEventListener("submit", function (event) {

            const textarea =
                form.querySelector("textarea[name='answer_text']");

            const voiceInputs =
                form.querySelectorAll("input[name='answer_voice[]']");

            if (
                textarea.value.trim() === "" &&
                voiceInputs.length === 0
            ) {

                event.preventDefault();

                alert(
                    "Please write an answer or record at least one voice answer."
                );

            }

        });

    });

});
</script>

@endsection
