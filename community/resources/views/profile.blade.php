@extends('layouts.app')

@section('title', 'My Profile | GrowSmart')

@section('content')

<div class="container profile-container">

    <div class="profile-card">

        <div class="profile-header">
            <h2>My Profile</h2>
            <p>Manage your GrowSmart profile picture.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <div class="profile-picture-area">

            @if(Auth::user()->profile_photo)

                <img
                    src="{{ asset(Auth::user()->profile_photo) }}"
                    class="profile-big-image"
                    id="profilePreview"
                    alt="Profile Picture"
                >

            @else

                <div class="profile-placeholder" id="profilePlaceholder">
                    <i class="bi bi-person"></i>
                </div>

                <img
                    src=""
                    class="profile-big-image d-none"
                    id="profilePreview"
                    alt="Profile Picture"
                >

            @endif

        </div>

        <div class="text-center profile-user-info">

            <h4>{{ Auth::user()->name }}</h4>

            <p class="text-muted">
                {{ Auth::user()->email }}
            </p>

        </div>

        <form
            action="{{ route('profile.update') }}"
            method="POST"
            enctype="multipart/form-data"
            class="profile-form"
        >

            @csrf

            <input
                type="file"
                name="profile_photo"
                id="galleryInput"
                accept="image/jpeg,image/png,image/jpg,image/webp"
                hidden
            >

            <input
                type="file"
                id="cameraInput"
                accept="image/jpeg,image/png,image/jpg,image/webp"
                capture="user"
                hidden
            >

            <div class="profile-buttons">

                <button
                    type="button"
                    class="profile-option"
                    onclick="document.getElementById('galleryInput').click()"
                >
                    <i class="bi bi-images"></i>
                    Gallery
                </button>

                <button
                    type="button"
                    class="profile-option"
                    onclick="document.getElementById('cameraInput').click()"
                >
                    <i class="bi bi-camera"></i>
                    Camera
                </button>

            </div>

            <div id="selectedFileName" class="selected-file">
                No new image selected
            </div>

            <button
                type="submit"
                class="save-profile"
            >
                <i class="bi bi-check-circle"></i>
                Save Profile Picture
            </button>

        </form>

        @if(Auth::user()->profile_photo)

            <form
                action="{{ route('profile.delete') }}"
                method="POST"
                class="text-center remove-form"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="remove-profile"
                >
                    <i class="bi bi-trash"></i>
                    Remove Profile Picture
                </button>

            </form>

        @endif

    </div>

</div>

@endsection

@push('styles')

<style>

.profile-container {
    padding-top: 10px;
    padding-bottom: 20px;
}

.profile-card {
    max-width: 600px;
    margin: 0 auto;
    background: white;
    border-radius: 18px;
    padding: 25px 30px;
    box-shadow: 0 8px 25px rgba(23, 59, 50, 0.10);
}

.profile-header {
    text-align: center;
    margin-bottom: 18px;
}

.profile-header h2 {
    color: #173b32;
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 25px;
}

.profile-header p {
    color: #718078;
    margin-bottom: 0;
    font-size: 14px;
}

.profile-picture-area {
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-big-image,
.profile-placeholder {
    width: 125px;
    height: 125px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #e6efe9;
}

.profile-placeholder {
    background: #e6efe9;
    color: #285c48;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 55px;
}

.profile-user-info {
    margin-top: 10px;
}

.profile-user-info h4 {
    margin-bottom: 2px;
    color: #173b32;
    font-size: 19px;
}

.profile-user-info p {
    margin-bottom: 0;
    font-size: 13px;
}

.profile-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 17px;
}

.profile-option {
    border: none;
    background: #e6efe9;
    color: #173b32;
    padding: 10px 20px;
    border-radius: 9px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s;
}

.profile-option:hover {
    background: #d2e3d9;
    transform: translateY(-1px);
}

.selected-file {
    text-align: center;
    color: #718078;
    font-size: 12px;
    margin-top: 10px;
    min-height: 18px;
}

.save-profile {
    width: 100%;
    border: none;
    background: #285c48;
    color: white;
    padding: 11px;
    border-radius: 9px;
    margin-top: 10px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s;
}

.save-profile:hover {
    background: #173b32;
}

.remove-form {
    margin-top: 10px;
}

.remove-profile {
    border: none;
    background: #f8d7da;
    color: #842029;
    padding: 8px 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
}

.remove-profile:hover {
    background: #f1bfc3;
}

.alert {
    border-radius: 9px;
    padding: 9px 12px;
    margin-bottom: 12px;
    font-size: 13px;
}

@media (max-width: 576px) {

    .profile-container {
        padding-top: 5px;
    }

    .profile-card {
        padding: 22px 16px;
        margin: 0 auto;
    }

    .profile-big-image,
    .profile-placeholder {
        width: 115px;
        height: 115px;
    }

    .profile-buttons {
        flex-direction: column;
    }

    .profile-option {
        width: 100%;
    }

}

</style>

@endpush

@push('scripts')

<script>

const galleryInput = document.getElementById('galleryInput');
const cameraInput = document.getElementById('cameraInput');
const profilePreview = document.getElementById('profilePreview');
const profilePlaceholder = document.getElementById('profilePlaceholder');
const selectedFileName = document.getElementById('selectedFileName');

function showSelectedImage(file) {

    if (!file) {
        return;
    }

    if (profilePreview) {
        profilePreview.src = URL.createObjectURL(file);
        profilePreview.classList.remove('d-none');
    }

    if (profilePlaceholder) {
        profilePlaceholder.classList.add('d-none');
    }

    if (selectedFileName) {
        selectedFileName.textContent = file.name;
    }
}

if (galleryInput) {

    galleryInput.addEventListener('change', function () {

        const file = this.files[0];

        if (!file) {
            return;
        }

        showSelectedImage(file);

    });

}

if (cameraInput) {

    cameraInput.addEventListener('change', function () {

        const file = this.files[0];

        if (!file) {
            return;
        }

        const dataTransfer = new DataTransfer();

        dataTransfer.items.add(file);

        galleryInput.files = dataTransfer.files;

        showSelectedImage(file);

    });

}

</script>

@endpush