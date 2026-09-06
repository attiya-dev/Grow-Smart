@extends('layouts.app')

@section('content')

<style>

body {
    background: #f4f8f4;
}

.container-box {
    width: 92%;
    max-width: 1100px;
    margin: 8px auto 25px auto;
}

.heading {
    text-align: center;
    margin-bottom: 18px;
}

.heading h1 {
    color: #1b5e20;
    margin: 0 0 5px 0;
    font-size: 28px;
}

.heading p {
    color: #666;
    margin: 0;
    font-size: 14px;
}

.actions {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.btn {
    padding: 10px 16px;
    border-radius: 7px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    font-size: 14px;
    display: inline-block;
}

.btn:hover {
    opacity: 0.9;
}

.add {
    background: #2e7d32;
    color: white;
}

.data {
    background: #1565c0;
    color: white;
}

.pest {
    background: #ef6c00;
    color: white;
}

.success {
    background: #d4edda;
    color: #155724;
    padding: 10px 12px;
    border-radius: 7px;
    margin-bottom: 15px;
    font-size: 14px;
}

.crop-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}

.crop-card {
    background: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,.08);
    overflow: hidden;
}

.crop-image-container {
    width: 100%;
    height: 170px;
    border-radius: 8px;
    overflow: hidden;
    background: #e8f5e9;
}

.crop-card img {
    width: 100%;
    height: 170px;
    object-fit: cover;
    border-radius: 8px;
    display: block;
}

.no-image {
    width: 100%;
    height: 170px;
    background: #e8f5e9;
    border-radius: 8px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #2e7d32;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}

.crop-card h3 {
    color: #1b5e20;
    margin-top: 12px;
    margin-bottom: 8px;
    font-size: 19px;
}

.info {
    color: #666;
    margin: 5px 0;
    font-size: 13px;
}

.info strong {
    color: #333;
}

.delete-btn {
    width: 100%;
    margin-top: 12px;
    padding: 9px;

    background: #c62828;
    color: white;

    border: none;
    border-radius: 6px;

    cursor: pointer;
    font-size: 13px;
}

.delete-btn:hover {
    background: #b71c1c;
}

.badge {
    display: inline-block;

    padding: 4px 8px;
    margin-top: 5px;
    margin-right: 3px;

    background: #e8f5e9;
    color: #2e7d32;

    border-radius: 12px;

    font-size: 11px;
}

.missing-badge {
    background: #fff3cd;
    color: #856404;
}

.empty-box {
    grid-column: 1 / -1;
    text-align: center;
    padding: 45px 20px;

    background: white;
    border-radius: 12px;

    box-shadow: 0 4px 15px rgba(0,0,0,.08);
}

.empty-box h3 {
    color: #1b5e20;
}






.delete-modal {
    display: none;

    position: fixed;
    top: 0;
    left: 0;

    width: 100%;
    height: 100%;

    background: rgba(0, 0, 0, 0.5);

    align-items: center;
    justify-content: center;

    z-index: 9999;
}

.delete-modal-content {
    width: 90%;
    max-width: 400px;

    background: white;

    border-radius: 12px;

    padding: 25px;

    text-align: center;

    box-shadow: 0 8px 30px rgba(0,0,0,.25);

    animation: modalShow 0.2s ease;
}

.delete-icon {
    font-size: 42px;
    margin-bottom: 10px;
}

.delete-modal-content h2 {
    margin: 5px 0 10px;

    color: #333;

    font-size: 22px;
}

.delete-modal-content p {
    color: #666;

    font-size: 14px;

    margin-bottom: 22px;
}

.modal-buttons {
    display: flex;

    justify-content: center;

    gap: 10px;
}

.modal-delete {
    background: #c62828;

    color: white;

    border: none;

    padding: 10px 20px;

    border-radius: 6px;

    cursor: pointer;

    font-size: 14px;
}

.modal-delete:hover {
    background: #b71c1c;
}

.modal-cancel {
    background: #777;

    color: white;

    border: none;

    padding: 10px 20px;

    border-radius: 6px;

    cursor: pointer;

    font-size: 14px;
}

.modal-cancel:hover {
    background: #555;
}

@keyframes modalShow {

    from {
        transform: scale(0.9);
        opacity: 0;
    }

    to {
        transform: scale(1);
        opacity: 1;
    }

}






@media(max-width: 900px) {

    .container-box {
        width: 94%;
        margin-top: 8px;
    }

    .crop-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media(max-width: 600px) {

    .container-box {
        width: 94%;
        margin-top: 5px;
    }

    .heading h1 {
        font-size: 24px;
    }

    .crop-grid {
        grid-template-columns: 1fr;
    }

    .actions {
        gap: 7px;
    }

    .btn {
        padding: 9px 13px;
        font-size: 13px;
    }

    .delete-modal-content {
        width: 85%;
        padding: 20px;
    }

}

</style>


<div class="container-box" dir="{{ is_urdu() ? 'rtl' : 'ltr' }}">

    <div class="heading">

        <h1>
            🌱 {{ t('Manage Crops', 'فصلوں کا انتظام') }}
        </h1>

        <p>
            {{ t('Add and manage all crops in your website.', 'اپنی ویب سائٹ پر تمام فصلیں شامل کریں اور ان کا انتظام کریں۔') }}
        </p>

    </div>


    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif


    <div class="actions">

        <a
            href="{{ route('admin.crop.create') }}"
            class="btn add"
        >
            ➕ {{ t('Add Crop', 'فصل شامل کریں') }}
        </a>


        @if(!is_urdu())
        <a href="{{ route('admin.crop.data.create') }}" class="btn data">
            📚 {{ t('Add Crop Data', 'فصل کا ڈیٹا شامل کریں') }}
        </a>
        @else
        <a href="{{ route('admin.crop.urdu.data.create') }}" class="btn data">
            🇵🇰 {{ t('Add / Update Urdu Crop Data', 'اردو فصل کا ڈیٹا شامل یا اپ ڈیٹ کریں') }}
        </a>
        @endif

        @if(!is_urdu())
        <a href="{{ route('admin.pest.data.create') }}" class="btn pest">
            🐛 {{ t('Add Pest Data', 'کیڑوں کا ڈیٹا شامل کریں') }}
        </a>
        @else
        <a href="{{ route('admin.pest.urdu.data.create') }}" class="btn pest">
            🇵🇰 {{ t('Add / Update Urdu Pest Data', 'اردو کیڑوں کا ڈیٹا شامل یا اپ ڈیٹ کریں') }}
        </a>
        @endif

    </div>


    <div class="crop-grid">

        @forelse($crops as $crop)

            <div class="crop-card">

                @php

                    $imageUrl = null;

                    if ($crop->image) {

                        $filename = basename($crop->image);

                        $path1 = public_path(
                            'images/crops/' . $filename
                        );

                        $path2 = public_path(
                            'images/' . $filename
                        );

                        $path3 = public_path(
                            'images/crop/' . $filename
                        );

                        if (file_exists($path1)) {

                            $imageUrl = asset(
                                'images/crops/' . $filename
                            );

                        } elseif (file_exists($path2)) {

                            $imageUrl = asset(
                                'images/' . $filename
                            );

                        } elseif (file_exists($path3)) {

                            $imageUrl = asset(
                                'images/crop/' . $filename
                            );

                        }

                    }

                @endphp


                @if($imageUrl)

                    <div class="crop-image-container">

                        <img
                            src="{{ $imageUrl }}"
                            alt="{{ is_urdu() && $crop->name_ur ? $crop->name_ur : $crop->name }}"
                            loading="lazy"
                            onerror="
                                this.style.display='none';
                                this.nextElementSibling.style.display='flex';
                            "
                        >

                        <div
                            class="no-image"
                            style="display:none;"
                        >
                            🌱 {{ t('Image Not Found', 'تصویر دستیاب نہیں ہے') }}
                        </div>

                    </div>

                @else

                    <div class="no-image">

                        🌱 {{ t('Image Not Found', 'تصویر دستیاب نہیں ہے') }}

                    </div>

                @endif


                <h3>
                    {{ is_urdu() && $crop->name_ur ? $crop->name_ur : $crop->name }}
                </h3>


                <div class="info">

                    <strong>
                        {{ t('Category:', 'زمرہ:') }}
                    </strong>

                    {{ local_text($crop, 'category') }}

                </div>


                <div class="info">

                    <strong>
                        {{ t('Season:', 'موسم:') }}
                    </strong>

                    {{ local_text($crop, 'season') }}

                </div>


                <div class="info">

                    <strong>
                        {{ t('Type:', 'قسم:') }}
                    </strong>

                    {{ $crop->type ? local_text($crop, 'type') : t('Not specified', 'درج نہیں کیا گیا') }}

                </div>


                @if($crop->cropDetail)

                    <span class="badge">

                        ✓ {{ t('Crop Data Added', 'فصل کا ڈیٹا شامل ہے') }}

                    </span>

                @else

                    <span class="badge missing-badge">

                        {{ t('Crop Data Missing', 'فصل کا ڈیٹا موجود نہیں ہے') }}

                    </span>

                @endif


                @if($crop->urdu_completed)
                    <span class="badge">✓ {{ t('Urdu Crop Complete', 'اردو فصل کا ڈیٹا مکمل ہے') }}</span>
                @else
                    <a href="{{ route('admin.crop.urdu.data.create', ['crop_id' => $crop->id]) }}" class="badge missing-badge" style="text-decoration:none;">🇵🇰 {{ t('Add Urdu Crop Data', 'اردو فصل کا ڈیٹا شامل کریں') }}</a>
                @endif


                @if(
                    $crop->pestManagements &&
                    $crop->pestManagements->count() > 0
                )

                    <span class="badge">

                        ✓ {{ t('Pest Data Added', 'کیڑوں کا ڈیٹا شامل ہے') }}

                    </span>

                @else

                    <span class="badge missing-badge">

                        {{ t('No Pest Data', 'کیڑوں کا ڈیٹا موجود نہیں ہے') }}

                    </span>

                @endif


                <form
                    action="{{ route(
                        'admin.crop.delete',
                        $crop->id
                    ) }}"
                    method="POST"
                    class="delete-form"
                >

                    @csrf

                    @method('DELETE')


                    <button
                        type="button"
                        class="delete-btn"
                        onclick="openDeleteModal(this)"
                    >

                        🗑 {{ t('Delete Crop', 'فصل حذف کریں') }}

                    </button>

                </form>


            </div>

        @empty

            <div class="empty-box">

                <h3>
                    {{ t('No crops available.', 'اس وقت کوئی فصل موجود نہیں ہے۔') }}
                </h3>

                <p>
                    {{ t('Click "Add Crop" to create your first crop.', 'اپنی پہلی فصل شامل کرنے کے لیے "فصل شامل کریں" پر کلک کریں۔') }}
                </p>

            </div>

        @endforelse

    </div>

</div>




<div
    id="deleteModal"
    class="delete-modal"
>

    <div class="delete-modal-content">

        <div class="delete-icon">
            ⚠️
        </div>

        <h2>
            {{ t('Delete Crop?', 'فصل حذف کریں؟') }}
        </h2>

        <p>
            {{ t('Are you sure you want to delete this crop?', 'کیا آپ واقعی اس فصل کو حذف کرنا چاہتے ہیں؟') }}
            {{ t('This action cannot be undone.', 'یہ کارروائی واپس نہیں کی جا سکتی۔') }}
        </p>

        <div class="modal-buttons">

            <button
                type="button"
                class="modal-cancel"
                onclick="closeDeleteModal()"
            >
                {{ t('Cancel', 'منسوخ کریں') }}
            </button>

            <button
                type="button"
                class="modal-delete"
                onclick="confirmDelete()"
            >
                {{ t('Yes, Delete', 'جی ہاں، حذف کریں') }}
            </button>

        </div>

    </div>

</div>


<script>

let selectedDeleteForm = null;


function openDeleteModal(button)
{
    selectedDeleteForm =
        button.closest('.delete-form');

    document.getElementById('deleteModal').style.display =
        'flex';
}


function closeDeleteModal()
{
    document.getElementById('deleteModal').style.display =
        'none';

    selectedDeleteForm = null;
}


function confirmDelete()
{
    if (selectedDeleteForm) {

        selectedDeleteForm.submit();

    }
}




document.getElementById('deleteModal').addEventListener(
    'click',
    function(event) {

        if (event.target === this) {

            closeDeleteModal();

        }

    }
);




document.addEventListener(
    'keydown',
    function(event) {

        if (event.key === 'Escape') {

            closeDeleteModal();

        }

    }
);

</script>

@endsection
