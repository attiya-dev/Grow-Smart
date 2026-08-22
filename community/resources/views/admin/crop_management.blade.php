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


/* ============================= */
/* DELETE CONFIRMATION MODAL */
/* ============================= */

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


/* ============================= */
/* RESPONSIVE */
/* ============================= */

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


<div class="container-box">

    <div class="heading">

        <h1>
            🌱 Manage Crops
        </h1>

        <p>
            Add and manage all crops in your website.
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
            ➕ Add Crop
        </a>


        <a
            href="{{ route('admin.crop.data.create') }}"
            class="btn data"
        >
            📚 Add Crop Data
        </a>


        <a
            href="{{ route('admin.pest.data.create') }}"
            class="btn pest"
        >
            🐛 Add Pest Data
        </a>

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
                            alt="{{ $crop->name }}"
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
                            🌱 Image Not Found
                        </div>

                    </div>

                @else

                    <div class="no-image">

                        🌱 Image Not Found

                    </div>

                @endif


                <h3>
                    {{ $crop->name }}
                </h3>


                <div class="info">

                    <strong>
                        Category:
                    </strong>

                    {{ ucfirst($crop->category) }}

                </div>


                <div class="info">

                    <strong>
                        Season:
                    </strong>

                    {{ ucfirst($crop->season) }}

                </div>


                <div class="info">

                    <strong>
                        Type:
                    </strong>

                    {{ $crop->type
                        ? ucfirst($crop->type)
                        : 'Not specified'
                    }}

                </div>


                @if($crop->cropDetail)

                    <span class="badge">

                        ✓ Crop Data Added

                    </span>

                @else

                    <span class="badge missing-badge">

                        Crop Data Missing

                    </span>

                @endif


                @if(
                    $crop->pestManagements &&
                    $crop->pestManagements->count() > 0
                )

                    <span class="badge">

                        ✓ Pest Data Added

                    </span>

                @else

                    <span class="badge missing-badge">

                        No Pest Data

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

                        🗑 Delete Crop

                    </button>

                </form>


            </div>

        @empty

            <div class="empty-box">

                <h3>
                    No crops available.
                </h3>

                <p>
                    Click "Add Crop" to create your first crop.
                </p>

            </div>

        @endforelse

    </div>

</div>


<!-- DELETE CONFIRMATION BOX -->

<div
    id="deleteModal"
    class="delete-modal"
>

    <div class="delete-modal-content">

        <div class="delete-icon">
            ⚠️
        </div>

        <h2>
            Delete Crop?
        </h2>

        <p>
            Are you sure you want to delete this crop?
            This action cannot be undone.
        </p>

        <div class="modal-buttons">

            <button
                type="button"
                class="modal-cancel"
                onclick="closeDeleteModal()"
            >
                Cancel
            </button>

            <button
                type="button"
                class="modal-delete"
                onclick="confirmDelete()"
            >
                Yes, Delete
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


/* Close modal when clicking outside the box */

document.getElementById('deleteModal').addEventListener(
    'click',
    function(event) {

        if (event.target === this) {

            closeDeleteModal();

        }

    }
);


/* Close modal with Escape key */

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