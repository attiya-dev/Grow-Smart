@extends('layouts.app')

@section('title', t('My Profile | GrowSmart', 'میرا پروفائل | گرو اسمارٹ'))

@section('content')

<div class="container py-4">

    <div class="profile-card">

        <div class="profile-header">
            <h2>{{ t('My Profile', 'میرا پروفائل') }}</h2>
            <p>{{ t('Manage your GrowSmart profile picture.', 'اپنی گرو اسمارٹ پروفائل تصویر کا انتظام کریں۔') }}</p>
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
                    :alt="t('Profile Picture', 'پروفائل تصویر')"
                >

            @else

                <div class="profile-placeholder" id="profilePlaceholder">
                    <i class="bi bi-person"></i>
                </div>

                <img
                    src=""
                    class="profile-big-image d-none"
                    id="profilePreview"
                    :alt="t('Profile Picture', 'پروفائل تصویر')"
                >

            @endif

        </div>

        <div class="text-center mt-3">

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
                    {{ t('Gallery', 'گیلری') }}
                </button>

                <button
                    type="button"
                    class="profile-option"
                    onclick="document.getElementById('cameraInput').click()"
                >
                    <i class="bi bi-camera"></i>
                    {{ t('Camera', 'کیمرہ') }}
                </button>

            </div>

            <div id="selectedFileName" class="selected-file">
                {{ t('No new image selected', 'کوئی نئی تصویر منتخب نہیں کی گئی') }}
            </div>

            <button
                type="submit"
                class="save-profile"
            >
                <i class="bi bi-check-circle"></i>
                {{ t('Save Profile Picture', 'پروفائل تصویر محفوظ کریں') }}
            </button>

        </form>

        @if(Auth::user()->profile_photo)

            <form
                action="{{ route('profile.delete') }}"
                method="POST"
                class="text-center mt-3"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="remove-profile"
                >
                    <i class="bi bi-trash"></i>
                    {{ t('Remove Profile Picture', 'پروفائل تصویر ہٹا دیں') }}
                </button>

            </form>

        @endif

    </div>

</div>

@endsection

@push('styles')

<style>

.profile-card {
    max-width: 650px;
    margin: 20px auto;
    background: white;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 10px 35px rgba(23, 59, 50, 0.10);
}

.profile-header {
    text-align: center;
    margin-bottom: 25px;
}

.profile-header h2 {
    color: #173b32;
    font-weight: bold;
    margin-bottom: 8px;
}

.profile-header p {
    color: #718078;
    margin-bottom: 0;
}

.profile-picture-area {
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-big-image,
.profile-placeholder {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #e6efe9;
}

.profile-placeholder {
    background: #e6efe9;
    color: #285c48;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 65px;
}

.profile-buttons {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-top: 25px;
}

.profile-option {
    border: none;
    background: #e6efe9;
    color: #173b32;
    padding: 12px 22px;
    border-radius: 10px;
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
    font-size: 13px;
    margin-top: 15px;
    min-height: 20px;
}

.save-profile {
    width: 100%;
    border: none;
    background: #285c48;
    color: white;
    padding: 13px;
    border-radius: 10px;
    margin-top: 15px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s;
}

.save-profile:hover {
    background: #173b32;
}

.remove-profile {
    border: none;
    background: #f8d7da;
    color: #842029;
    padding: 10px 18px;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
}

.remove-profile:hover {
    background: #f1bfc3;
}

.alert {
    border-radius: 10px;
}

@media (max-width: 576px) {

    .profile-card {
        padding: 25px 18px;
        margin: 10px auto;
    }

    .profile-big-image,
    .profile-placeholder {
        width: 130px;
        height: 130px;
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
