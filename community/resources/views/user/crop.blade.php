@extends('layouts.app')

@section('content')

<style>
* {
    box-sizing: border-box;
}

body {
    background: #eef8ee;
}

.container {
    width: 80%;
    max-width: 1250px;
    margin: 18px auto 40px;
}

.heading {
    text-align: center;
    margin-bottom: 18px;
}

.heading h1 {
    color: #176b32;
    font-size: 32px;
    margin: 0 0 5px;
}

.heading p {
    color: #666;
    font-size: 14px;
    margin: 0;
}

.form-box {
    background: white;
    padding: 25px 30px;
    border-radius: 18px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    height: auto;
    min-height: 450px;
}

label {
    display: block;
    color: #333;
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 7px;
}

.form-group {
    margin-bottom: 18px;
}

input[type="file"] {
    width: 100%;
    min-height: 50px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 9px;
    background: #fafafa;
    font-size: 14px;
}

input[type="file"]:focus {
    border-color: #2e7d32;
}

.preview {
    display: none;
    margin-top: 10px;
}

.preview img {
    width: 130px;
    height: 90px;
    object-fit: cover;
    border-radius: 8px;
    border: 1px solid #ddd;
}

textarea {
    width: 100%;
    height: 140px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    resize: vertical;
    font-size: 14px;
    outline: none;
}

textarea:focus {
    border-color: #2e7d32;
}

.record-box {
    display: flex;
    align-items: center;
    gap: 12px;
}

.record-btn {
    width: 48px;
    height: 48px;
    border: none;
    border-radius: 50%;
    background: #2e7d32;
    color: white;
    font-size: 21px;
    cursor: pointer;
}

.record-btn:hover {
    background: #176b32;
}

.record-btn.recording {
    background: #d32f2f;
    animation: pulse 1s infinite;
}

@keyframes pulse {
    50% {
        transform: scale(1.08);
    }
}

.timer {
    color: #d32f2f;
    font-weight: bold;
    font-size: 16px;
}

.voice-list {
    margin-top: 10px;
}

.voice-item {
    position: relative;
    background: #f5fff5;
    border: 1px solid #d8ead8;
    border-radius: 10px;
    padding: 8px;
    margin-bottom: 7px;
}

.voice-player {
    display: flex;
    align-items: center;
    gap: 8px;
    width: 100%;
}

.voice-play {
    width: 36px;
    height: 36px;
    border: none;
    border-radius: 50%;
    background: #2e7d32;
    color: white;
    cursor: pointer;
    flex-shrink: 0;
}

.voice-play:hover {
    background: #176b32;
}

.voice-progress {
    flex: 1;
    height: 5px;
    accent-color: #2e7d32;
}

.voice-time {
    color: #555;
    font-size: 12px;
    min-width: 35px;
}

.voice-more {
    width: 32px;
    height: 32px;
    border: none;
    background: transparent;
    font-size: 22px;
    cursor: pointer;
    flex-shrink: 0;
}

.voice-more:hover {
    background: #e5e5e5;
    border-radius: 50%;
}

.voice-menu {
    position: absolute;
    right: 8px;
    top: 45px;
    display: none;
    background: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
    z-index: 10;
}

.voice-menu button {
    border: none;
    background: white;
    color: #d32f2f;
    padding: 9px 13px;
    cursor: pointer;
    font-size: 13px;
}

.voice-menu button:hover {
    background: #f5f5f5;
}

.voice-count {
    color: #666;
    font-size: 12px;
    margin-top: 5px;
}

.submit-btn {
    width: 100%;
    height: 45px;
    border: none;
    border-radius: 25px;
    background: #2e7d32;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 5px;
}

.submit-btn:hover {
    background: #176b32;
}

.success {
    background: #d4edda;
    color: #155724;
    padding: 10px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    font-size: 14px;
}

.error {
    background: #f8d7da;
    color: #721c24;
    padding: 10px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    font-size: 14px;
}

@media (max-height: 800px) and (min-width: 769px) {
    .container {
        margin-top: 10px;
        margin-bottom: 35px;
    }

    .heading {
        margin-bottom: 12px;
    }

    .heading h1 {
        font-size: 28px;
    }

    .heading p {
        font-size: 13px;
    }

    .form-box {
        padding: 20px 25px;
        min-height: 430px;
    }

    .form-group {
        margin-bottom: 13px;
    }

    textarea {
        height: 125px;
    }

    .record-btn {
        width: 42px;
        height: 42px;
    }

    .submit-btn {
        height: 40px;
    }
}

@media (max-width: 768px) {
    .container {
        width: 94%;
        margin: 20px auto 35px;
    }

    .heading {
        margin-bottom: 18px;
    }

    .heading h1 {
        font-size: 27px;
    }

    .heading p {
        font-size: 13px;
    }

    .form-box {
        padding: 20px;
        min-height: 0;
    }

    textarea {
        height: 140px;
    }

    input[type="file"] {
        min-height: 45px;
    }
}

@media (max-width: 480px) {
    .container {
        width: 94%;
        margin: 18px auto 30px;
    }

    .heading h1 {
        font-size: 24px;
    }

    .heading p {
        font-size: 12px;
    }

    .form-box {
        padding: 15px;
        border-radius: 14px;
    }

    label {
        font-size: 14px;
    }

    textarea {
        height: 135px;
        font-size: 13px;
    }

    .record-btn {
        width: 44px;
        height: 44px;
    }

    .voice-player {
        gap: 5px;
    }

    .voice-time {
        font-size: 11px;
    }

    .submit-btn {
        height: 43px;
        font-size: 15px;
    }

    .preview img {
        width: 110px;
        height: 80px;
    }
}
</style>

<div class="container">

    <div class="heading">
        <h1>🌾 Crop Community</h1>
        <p>Ask your crop questions and get help from agricultural experts.</p>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="form-box">

        <form
            action="{{ route('question.store') }}"
            method="POST"
            enctype="multipart/form-data"
            id="questionForm"
        >

            @csrf

            <input
                type="hidden"
                name="category"
                value="crop"
            >

            <div class="form-group">

                <label>Upload Crop Image</label>

                <input
                    type="file"
                    name="question_image"
                    accept="image/*"
                    capture="environment"
                    id="image"
                >

                <div
                    class="preview"
                    id="imagePreview"
                >
                    <img id="showImage">
                </div>

            </div>

            <div class="form-group">

                <label>🎤 Voice Question</label>

                <div class="record-box">

                    <button
                        type="button"
                        id="recordBtn"
                        class="record-btn"
                        title="Start recording"
                    >
                        🎤
                    </button>

                    <span
                        id="timer"
                        class="timer"
                    >
                        00:00
                    </span>

                </div>

                <div
                    id="voiceList"
                    class="voice-list"
                ></div>

                <div
                    id="voiceCount"
                    class="voice-count"
                    style="display:none;"
                ></div>

                <div id="voiceInputs"></div>

            </div>

            <div class="form-group">

                <label>Ask Your Question</label>

                <textarea
                    name="question_text"
                    id="question_text"
                    placeholder="Write your crop problem here..."
                ></textarea>

            </div>

            <button
                type="submit"
                class="submit-btn"
            >
                Submit Question
            </button>

        </form>

    </div>

</div>

<script>
const image = document.getElementById("image");
const imagePreview = document.getElementById("imagePreview");
const showImage = document.getElementById("showImage");

image.onchange = function() {
    const file = image.files[0];

    if (file) {
        imagePreview.style.display = "block";
        showImage.src = URL.createObjectURL(file);
    }
};

let recorder = null;
let chunks = [];
let stream = null;
let seconds = 0;
let timerInterval = null;
let recordedFiles = [];

const recordBtn = document.getElementById("recordBtn");
const timer = document.getElementById("timer");
const voiceList = document.getElementById("voiceList");
const voiceInputs = document.getElementById("voiceInputs");
const voiceCount = document.getElementById("voiceCount");

recordBtn.onclick = async function() {

    if (recorder && recorder.state === "recording") {
        recorder.stop();
        return;
    }

    try {

        stream = await navigator.mediaDevices.getUserMedia({
            audio: true
        });

        recorder = new MediaRecorder(stream);
        chunks = [];

        recorder.ondataavailable = function(event) {
            if (event.data.size > 0) {
                chunks.push(event.data);
            }
        };

        recorder.onstop = function() {

            clearInterval(timerInterval);

            if (stream) {
                stream.getTracks().forEach(function(track) {
                    track.stop();
                });
            }

            const type = recorder.mimeType || "audio/webm";

            const blob = new Blob(chunks, {
                type: type
            });

            let extension = "webm";

            if (type.includes("ogg")) {
                extension = "ogg";
            }

            if (type.includes("mp4")) {
                extension = "m4a";
            }

            const file = new File(
                [blob],
                "voice_" + Date.now() + "." + extension,
                {
                    type: type
                }
            );

            recordedFiles.push(file);

            rebuildVoiceList();

            recordBtn.classList.remove("recording");
            recordBtn.innerHTML = "🎤";
            recordBtn.title = "Start recording";

            timer.innerHTML = "00:00";
        };

        recorder.start();

        recordBtn.classList.add("recording");
        recordBtn.innerHTML = "⏹";
        recordBtn.title = "Stop recording";

        seconds = 0;
        timer.innerHTML = "00:00";

        timerInterval = setInterval(function() {

            seconds++;

            const minutes = Math.floor(seconds / 60);
            const secs = seconds % 60;

            timer.innerHTML =
                String(minutes).padStart(2, "0") +
                ":" +
                String(secs).padStart(2, "0");

        }, 1000);

    } catch (error) {

        alert("Please allow microphone permission to record your voice.");

    }
};

function rebuildVoiceList() {

    voiceList.innerHTML = "";
    voiceInputs.innerHTML = "";

    recordedFiles.forEach(function(file, index) {

        addVoiceToList(file, index);

        const input = document.createElement("input");

        input.type = "file";
        input.name = "question_voice[]";
        input.hidden = true;

        const data = new DataTransfer();

        data.items.add(file);

        input.files = data.files;

        voiceInputs.appendChild(input);

    });

    updateVoiceCount();
}

function addVoiceToList(file, index) {

    const voiceItem = document.createElement("div");

    voiceItem.className = "voice-item";

    const audio = new Audio();

    audio.src = URL.createObjectURL(file);

    const player = document.createElement("div");

    player.className = "voice-player";

    const playButton = document.createElement("button");

    playButton.type = "button";
    playButton.className = "voice-play";
    playButton.innerHTML = "▶";

    const progress = document.createElement("input");

    progress.type = "range";
    progress.className = "voice-progress";
    progress.min = 0;
    progress.max = 100;
    progress.value = 0;

    const time = document.createElement("span");

    time.className = "voice-time";
    time.innerHTML = "0:00";

    const moreButton = document.createElement("button");

    moreButton.type = "button";
    moreButton.className = "voice-more";
    moreButton.innerHTML = "⋮";

    const menu = document.createElement("div");

    menu.className = "voice-menu";

    const deleteButton = document.createElement("button");

    deleteButton.type = "button";
    deleteButton.innerHTML = "🗑 Delete";

    menu.appendChild(deleteButton);

    playButton.onclick = function(event) {

        event.stopPropagation();

        if (audio.paused) {

            document.querySelectorAll(".voice-play").forEach(function(button) {

                if (button !== playButton) {
                    button.innerHTML = "▶";
                }

            });

            audio.play();
            playButton.innerHTML = "⏸";

        } else {

            audio.pause();
            playButton.innerHTML = "▶";

        }
    };

    audio.ontimeupdate = function() {

        if (audio.duration) {

            progress.value =
                (audio.currentTime / audio.duration) * 100;

            const minutes =
                Math.floor(audio.currentTime / 60);

            const seconds =
                Math.floor(audio.currentTime % 60);

            time.innerHTML =
                minutes +
                ":" +
                String(seconds).padStart(2, "0");
        }
    };

    audio.onloadedmetadata = function() {

        const minutes =
            Math.floor(audio.duration / 60);

        const seconds =
            Math.floor(audio.duration % 60);

        time.innerHTML =
            minutes +
            ":" +
            String(seconds).padStart(2, "0");
    };

    audio.onended = function() {

        playButton.innerHTML = "▶";
        progress.value = 0;

    };

    progress.oninput = function() {

        if (audio.duration) {

            audio.currentTime =
                (progress.value / 100) * audio.duration;

        }
    };

    moreButton.onclick = function(event) {

        event.stopPropagation();

        document.querySelectorAll(".voice-menu").forEach(function(item) {

            if (item !== menu) {
                item.style.display = "none";
            }

        });

        menu.style.display =
            menu.style.display === "block"
                ? "none"
                : "block";
    };

    deleteButton.onclick = function(event) {

        event.stopPropagation();

        audio.pause();

        recordedFiles.splice(index, 1);

        rebuildVoiceList();
    };

    player.appendChild(playButton);
    player.appendChild(progress);
    player.appendChild(time);
    player.appendChild(moreButton);

    voiceItem.appendChild(player);
    voiceItem.appendChild(menu);

    voiceList.appendChild(voiceItem);
}

document.addEventListener("click", function() {

    document.querySelectorAll(".voice-menu").forEach(function(menu) {
        menu.style.display = "none";
    });

});

function updateVoiceCount() {

    if (recordedFiles.length === 0) {

        voiceCount.style.display = "none";
        return;

    }

    voiceCount.style.display = "block";

    voiceCount.innerHTML =
        "🎤 " +
        recordedFiles.length +
        (
            recordedFiles.length === 1
                ? " voice recording"
                : " voice recordings"
        );
}

document.getElementById("questionForm").addEventListener(
    "submit",
    function(event) {

        const text =
            document.getElementById("question_text")
            .value
            .trim();

        if (text === "" && recordedFiles.length === 0) {

            event.preventDefault();

            alert(
                "Please write your question or record your voice."
            );

            return;
        }

        rebuildVoiceList();

    }
);
</script>

@endsection