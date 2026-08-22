@extends('layouts.app')

@section('content')

<style>

body {
    background: #f4f8f4;
}

.form-container {
    width: 90%;
    max-width: 600px;
    margin: 5px auto 25px auto;
    background: white;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,.08);
    box-sizing: border-box;
}

.form-container h1 {
    text-align: center;
    color: #1b5e20;
    margin: 0 0 20px 0;
    font-size: 26px;
}

.form-group {
    margin-bottom: 14px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
    font-size: 14px;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 9px 11px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    font-size: 14px;
    background: white;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #2e7d32;
    box-shadow: 0 0 4px rgba(46,125,50,.2);
}

.form-group input[type="file"] {
    padding: 7px;
}

.btn {
    padding: 10px 18px;
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
    padding: 10px 12px;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 13px;
}

.error ul {
    margin: 0;
    padding-left: 20px;
}

@media (max-width: 700px) {

    .form-container {
        width: 94%;
        padding: 20px;
        margin: 5px auto 20px auto;
    }

    .form-container h1 {
        font-size: 23px;
    }

    .btn {
        padding: 9px 15px;
    }

}

</style>


<div class="form-container">

    <h1>
        🌱 Add New Crop
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
        action="{{ route('admin.crop.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf


        <div class="form-group">

            <label>
                Crop Image
            </label>

            <input
                type="file"
                name="image"
                accept="image/*"
                required
            >

        </div>


        <div class="form-group">

            <label>
                Crop Name
            </label>

            <input
                type="text"
                name="name"
                placeholder="Example: Mango"
                value="{{ old('name') }}"
                required
            >

        </div>


        <div class="form-group">

            <label>
                Category
            </label>

            <select
                name="category"
                required
            >

                <option value="">
                    Select Category
                </option>

                <option
                    value="fruit"
                    {{ old('category') == 'fruit' ? 'selected' : '' }}
                >
                    Fruit
                </option>

                <option
                    value="vegetable"
                    {{ old('category') == 'vegetable' ? 'selected' : '' }}
                >
                    Vegetable
                </option>

                <option
                    value="grain"
                    {{ old('category') == 'grain' ? 'selected' : '' }}
                >
                    Grain
                </option>

            </select>

        </div>


        <div class="form-group">

            <label>
                Season
            </label>

            <select
                name="season"
                required
            >

                <option value="">
                    Select Season
                </option>

                <option
                    value="summer"
                    {{ old('season') == 'summer' ? 'selected' : '' }}
                >
                    Summer
                </option>

                <option
                    value="winter"
                    {{ old('season') == 'winter' ? 'selected' : '' }}
                >
                    Winter
                </option>

            </select>

        </div>


        <div class="form-group">

            <label>
                Type
            </label>

            <select
                name="type"
            >

                <option value="">
                    Select Type
                </option>

                <option
                    value="indoor"
                    {{ old('type') == 'indoor' ? 'selected' : '' }}
                >
                    Indoor
                </option>

                <option
                    value="outdoor"
                    {{ old('type') == 'outdoor' ? 'selected' : '' }}
                >
                    Outdoor
                </option>

            </select>

        </div>


        <div>

            <button
                type="submit"
                class="btn save"
            >
                💾 Save Crop
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