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

.form-group select {
    height: 38px;
}

.form-group textarea {
    height: 70px;
    min-height: 70px;
    resize: vertical;
    line-height: 1.4;
}

.form-group textarea:focus,
.form-group select:focus {
    outline: none;
    border-color: #2e7d32;
    box-shadow: 0 0 4px rgba(46,125,50,.18);
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
    background: #2e7d32;
    color: white;
}

.save:hover {
    background: #1b5e20;
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
        📚 Add Crop Data
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
        action="{{ route('admin.crop.data.store') }}"
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

            <label>Introduction</label>

            <textarea
                name="introduction"
                required
            >{{ old('introduction') }}</textarea>

        </div>


        <div class="form-group">

            <label>Basic Information</label>

            <textarea
                name="basic_information"
                required
            >{{ old('basic_information') }}</textarea>

        </div>


        <div class="form-group">

            <label>Sowing Season</label>

            <textarea
                name="sowing_season"
                required
            >{{ old('sowing_season') }}</textarea>

        </div>


        <div class="form-group">

            <label>Harvesting Season</label>

            <textarea
                name="harvesting_season"
                required
            >{{ old('harvesting_season') }}</textarea>

        </div>


        <div class="form-group">

            <label>Climate Requirements</label>

            <textarea
                name="climate_requirements"
                required
            >{{ old('climate_requirements') }}</textarea>

        </div>


        <div class="form-group">

            <label>Soil Requirements</label>

            <textarea
                name="soil_requirements"
                required
            >{{ old('soil_requirements') }}</textarea>

        </div>


        <div class="form-group">

            <label>Land Preparation</label>

            <textarea
                name="land_preparation"
                required
            >{{ old('land_preparation') }}</textarea>

        </div>


        <div class="form-group">

            <label>Seed Selection</label>

            <textarea
                name="seed_selection"
                required
            >{{ old('seed_selection') }}</textarea>

        </div>


        <div class="form-group">

            <label>Seed Rate</label>

            <textarea
                name="seed_rate"
                required
            >{{ old('seed_rate') }}</textarea>

        </div>


        <div class="form-group">

            <label>Irrigation Requirements</label>

            <textarea
                name="irrigation_requirements"
                required
            >{{ old('irrigation_requirements') }}</textarea>

        </div>


        <div class="form-group">

            <label>Fertilizer Requirements</label>

            <textarea
                name="fertilizer_requirements"
                required
            >{{ old('fertilizer_requirements') }}</textarea>

        </div>


        <div class="form-group">

            <label>Growing Stages</label>

            <textarea
                name="growing_stages"
                required
            >{{ old('growing_stages') }}</textarea>

        </div>


        <div class="form-group">

            <label>Types of Crop</label>

            <textarea
                name="types_of_crop"
                required
            >{{ old('types_of_crop') }}</textarea>

        </div>


        <div class="form-group">

            <label>Crop Varieties</label>

            <textarea
                name="crop_varieties"
                required
            >{{ old('crop_varieties') }}</textarea>

        </div>


        <div class="form-group">

            <label>Nutritional Value</label>

            <textarea
                name="nutritional_value"
                required
            >{{ old('nutritional_value') }}</textarea>

        </div>


        <div class="form-group">

            <label>Importance of Crop</label>

            <textarea
                name="importance_of_crop"
                required
            >{{ old('importance_of_crop') }}</textarea>

        </div>


        <div>

            <button
                type="submit"
                class="btn save"
            >
                💾 Save Crop Data
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