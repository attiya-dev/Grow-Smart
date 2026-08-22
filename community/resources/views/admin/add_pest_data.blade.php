@extends('layouts.app')

@section('content')

<style>

body {
    background: #f4f8f4;
}

.form-container {
    width: 90%;
    max-width: 650px;
    margin: 5px auto 25px auto;
    background: white;
    padding: 20px 24px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,.08);
    box-sizing: border-box;
}

.form-container h1 {
    text-align: center;
    color: #1b5e20;
    margin: 0 0 16px 0;
    font-size: 24px;
}

.form-group {
    margin-bottom: 11px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
    font-size: 14px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    font-size: 14px;
    font-family: inherit;
    background: white;
}

.form-group input,
.form-group select {
    height: 38px;
}

.form-group textarea {
    height: 70px;
    min-height: 70px;
    resize: vertical;
    line-height: 1.4;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #ef6c00;
    box-shadow: 0 0 4px rgba(239,108,0,.18);
}

.btn {
    padding: 9px 17px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    display: inline-block;
}

.save {
    background: #ef6c00;
    color: white;
}

.save:hover {
    background: #e65100;
}

.back {
    background: #777;
    color: white;
    text-decoration: none;
    margin-left: 8px;
}

.back:hover {
    background: #555;
}

.error {
    background: #f8d7da;
    color: #721c24;
    padding: 9px 11px;
    border-radius: 6px;
    margin-bottom: 14px;
    font-size: 13px;
}

.error ul {
    margin: 0;
    padding-left: 20px;
}

@media (max-width: 700px) {

    .form-container {
        width: 94%;
        max-width: 650px;
        margin: 5px auto 20px auto;
        padding: 18px;
    }

    .form-container h1 {
        font-size: 22px;
        margin-bottom: 14px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-group textarea {
        height: 65px;
        min-height: 65px;
    }

    .btn {
        padding: 9px 15px;
    }

}

</style>


<div class="form-container">

    <h1>
        🐛 Add Pest Management Data
    </h1>


    @if($errors->any())

        <div class="error">

            <ul>

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('admin.pest.data.store') }}"
        method="POST"
    >

        @csrf


        <div class="form-group">

            <label>
                Select Crop
            </label>

            <select
                name="crop_id"
                required
            >

                <option value="">
                    Select Crop
                </option>

                @foreach($crops as $crop)

                    <option
                        value="{{ $crop->id }}"
                        {{ old('crop_id') == $crop->id ? 'selected' : '' }}
                    >
                        {{ $crop->name }} - {{ ucfirst($crop->category) }}
                    </option>

                @endforeach

            </select>

        </div>


        <div class="form-group">

            <label>
                Pest / Disease Name
            </label>

            <input
                type="text"
                name="name"
                placeholder="Example: Aphids"
                value="{{ old('name') }}"
                required
            >

        </div>


        <div class="form-group">

            <label>
                Pest Type
            </label>

            <input
                type="text"
                name="type"
                placeholder="Example: Insect Pest"
                value="{{ old('type') }}"
                required
            >

        </div>


        <div class="form-group">

            <label>
                How It Occurs
            </label>

            <textarea
                name="how_it_occurs"
                required
            >{{ old('how_it_occurs') }}</textarea>

        </div>


        <div class="form-group">

            <label>
                Symptoms
            </label>

            <textarea
                name="symptoms"
                required
            >{{ old('symptoms') }}</textarea>

        </div>


        <div class="form-group">

            <label>
                Protection
            </label>

            <textarea
                name="protection"
                required
            >{{ old('protection') }}</textarea>

        </div>


        <div class="form-group">

            <label>
                Recommended Control
            </label>

            <textarea
                name="recommended_control"
                required
            >{{ old('recommended_control') }}</textarea>

        </div>


        <div>

            <button
                type="submit"
                class="btn save"
            >
                💾 Save Pest Data
            </button>


            <a
                href="{{ route('admin.crops') }}"
                class="btn back"
            >
                Back
            </a>

        </div>

    </form>

</div>

@endsection