@extends('layouts.app')

@section('content')

<style>

.form-container{
    width:92%;
    max-width:850px;
    margin:10px auto 30px;
    background:#fff;
    padding:24px;
    border-radius:14px;
    box-shadow:0 4px 18px rgba(0,0,0,.08);
}

.form-container h1{
    text-align:center;
    color:#1b5e20;
    margin:0 0 7px;
    font-size:26px;
}

.note{
    text-align:center;
    color:#666;
    font-size:13px;
    margin-bottom:20px;
}

.form-group{
    margin-bottom:13px;
}

.form-container{
    direction:rtl;
}

.form-group label{
    display:block;
    font-weight:700;
    color:#333;
    font-size:14px;
    margin-bottom:6px;
}

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    padding:10px 11px;
    border:1px solid #ccc;
    border-radius:7px;
    box-sizing:border-box;
    font-family:inherit;
    font-size:14px;
}

.form-group textarea{
    min-height:105px;
    resize:vertical;
    line-height:1.7;
}

.urdu{
    direction:rtl;
    text-align:right;
    font-family:"Noto Nastaliq Urdu",Tahoma,Arial,sans-serif;
}

.btn{
    padding:10px 17px;
    border:0;
    border-radius:7px;
    cursor:pointer;
    font-size:14px;
    text-decoration:none;
    display:inline-block;
}

.save{
    background:#2e7d32;
    color:#fff;
}

.back{
    background:#777;
    color:#fff;
    margin-left:7px;
}

.error{
    background:#f8d7da;
    color:#721c24;
    padding:10px;
    border-radius:7px;
    margin-bottom:15px;
}

.error ul{
    margin:0;
    padding-left:20px;
}

.help{
    font-size:11px;
    color:#777;
    margin-top:4px;
}

.warning{
    background:#fff3cd;
    color:#664d03;
    border:1px solid #ffecb5;
    padding:11px 13px;
    border-radius:8px;
    margin-bottom:16px;
    line-height:1.8;
}

.crop-option-en{
    direction:ltr;
}

</style>


<div class="form-container" dir="rtl">

    <h1>
        🇵🇰 اردو فصل کا ڈیٹا شامل یا اپ ڈیٹ کریں
    </h1>

    <div class="note">
        انگریزی فصل کا ڈیٹا الگ محفوظ رہتا ہے۔ اردو مواد تمام اردو فیلڈز محفوظ ہونے کے بعد ہی اردو ویب سائٹ پر دکھایا جاتا ہے۔
    </div>


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
        action="{{ route('admin.crop.urdu.data.store') }}"
        method="POST"
    >

        @csrf


        {{-- Crop Selection --}}

        <div class="form-group">

            <label>
                فصل منتخب کریں
            </label>

            <select
                dir="rtl"
                name="crop_id"
                id="crop_id"
                required
                onchange="loadCropUrdu(this.value)"
            >

                <option value="">
                    فصل منتخب کریں
                </option>


                @foreach($crops as $crop)

                    @php
                        $displayName = trim($crop->name_ur ?? '');
                        $englishName = trim($crop->name ?? '');
                    @endphp

                    <option
                        value="{{ $crop->id }}"
                        {{ old('crop_id', $selectedCropId) == $crop->id ? 'selected' : '' }}
                    >

                        @if($displayName !== '')

                            {{ $displayName }}

                            @if($englishName !== '')
                                — {{ $englishName }}
                            @endif

                        @else

                            {{ $englishName ?: 'فصل کا نام موجود نہیں' }}

                        @endif

                    </option>

                @endforeach

            </select>


            <div class="help">

                اگر فصل کا اردو نام پہلے سے موجود نہیں ہے تو یہاں انگریزی نام دکھایا جائے گا۔
                اردو نام درج کرنے کے بعد وہ اردو نام بھی محفوظ ہو جائے گا۔

            </div>

        </div>


        @php

            $fields = [

                'introduction_ur' => 'تعارف',

                'basic_information_ur' => 'بنیادی معلومات',

                'sowing_season_ur' => 'کاشت کا موسم',

                'harvesting_season_ur' => 'کٹائی کا موسم',

                'climate_requirements_ur' => 'آب و ہوا کی ضروریات',

                'soil_requirements_ur' => 'مٹی کی ضروریات',

                'land_preparation_ur' => 'زمین کی تیاری',

                'seed_selection_ur' => 'بیج کا انتخاب',

                'seed_rate_ur' => 'بیج کی مقدار',

                'irrigation_requirements_ur' => 'آبپاشی کی ضروریات',

                'fertilizer_requirements_ur' => 'کھاد کی ضروریات',

                'growing_stages_ur' => 'نشوونما کے مراحل',

                'types_of_crop_ur' => 'فصل کی اقسام',

                'crop_varieties_ur' => 'فصل کی اقسام / ورائٹیز',

                'nutritional_value_ur' => 'غذائی قدر',

                'importance_of_crop_ur' => 'فصل کی اہمیت',

            ];


            $selected = $crops->firstWhere(
                'id',
                old('crop_id', $selectedCropId)
            );

        @endphp


        {{-- English Data Status --}}

        @if($selected)

            @if(!$selected->cropDetail)

                <div class="warning">

                    <strong>
                        ⚠️ توجہ:
                    </strong>

                    اس فصل کا انگریزی ڈیٹا ابھی محفوظ نہیں کیا گیا۔
                    پہلے انگریزی فصل کا مکمل ڈیٹا محفوظ کریں، پھر اس فصل کا اردو ڈیٹا شامل کریں۔

                </div>

            @else

                <div class="help" style="margin-bottom:15px;">

                    انگریزی فصل:
                    <strong>
                        {{ $selected->name }}
                    </strong>

                    — انگریزی ڈیٹا موجود ہے، آپ اردو ڈیٹا درج کر سکتے ہیں۔

                </div>

            @endif

        @endif


        {{-- Urdu Crop Name --}}

        <div class="form-group">

            <label>
                فصل کا اردو نام
            </label>

            <input
                class="urdu"
                type="text"
                name="name_ur"
                value="{{ old('name_ur', $selected?->name_ur) }}"
                placeholder="مثال: آم"
                required
            >

        </div>


        {{-- Urdu Fields --}}

        @foreach($fields as $field => $label)

            <div class="form-group">

                <label>
                    {{ $label }}
                </label>

                <textarea
                    class="urdu"
                    name="{{ $field }}"
                    required
                >{{ old($field, $selected?->{$field}) }}</textarea>

            </div>

        @endforeach


        <button
            type="submit"
            class="btn save"
            {{ $selected && !$selected->cropDetail ? 'disabled' : '' }}
        >

            💾 اردو فصل کا ڈیٹا محفوظ کریں

        </button>


        <a
            href="{{ route('admin.crops') }}"
            class="btn back"
        >

            واپس جائیں

        </a>

    </form>

</div>

@endsection


@push('scripts')

@php

    $cropUrduData = $crops->map(function ($crop) use ($fields) {

        $data = [

            'name_ur' => $crop->name_ur,

        ];


        foreach (array_keys($fields) as $field) {

            $data[$field] =
                $crop->cropDetail?->{$field};

        }


        return [

            'id' => $crop->id,

            'name' => $crop->name,

            'name_ur' => $crop->name_ur,

            'has_english_data' => $crop->cropDetail !== null,

            'data' => $data,

        ];

    })->values();

@endphp


<script>

const cropUrduData = @json($cropUrduData);


function loadCropUrdu(id)
{

    const item = cropUrduData.find(function (x) {

        return String(x.id) === String(id);

    });


    if (!item) {

        return;

    }


    /*
     * Fill Urdu crop name
     */

    const nameField =
        document.querySelector('[name="name_ur"]');


    if (nameField) {

        nameField.value =
            item.data.name_ur || '';

    }


    /*
     * Fill all Urdu crop fields
     */

    Object.entries(item.data).forEach(
        function ([field, value]) {

            const el =
                document.querySelector(
                    `[name="${field}"]`
                );


            if (el) {

                el.value =
                    value || '';

            }

        }
    );

}


/*
 * Automatically load selected crop
 * when the page opens.
 */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const select =
            document.getElementById('crop_id');


        if (
            select &&
            select.value
        ) {

            loadCropUrdu(
                select.value
            );

        }

    }
);

</script>

@endpush