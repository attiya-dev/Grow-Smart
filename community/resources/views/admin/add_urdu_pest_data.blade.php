@extends('layouts.app')

@section('content')

@php
$crops = $pests
->map(function ($pest) {
return $pest->crop;
})
->filter()
->unique('id')
->sortBy('name')
->values();

$selected = $pests->firstWhere(
    'id',
    old('pest_id', $selectedPestId)
);

$selectedCropId = old(
    'crop_id',
    $selected?->crop_id
);

@endphp

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
    direction: rtl;
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
    line-height: 1.7;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #ef6c00;
    box-shadow: 0 0 4px rgba(239,108,0,.18);
}

.urdu {
    direction: rtl;
    text-align: right;
    font-family: "Noto Nastaliq Urdu", Tahoma, Arial, sans-serif;
}

.english-preview {
    direction: ltr;
    text-align: left;
    background: #f5f8f5;
    border: 1px solid #d9e5da;
    padding: 8px 10px;
    border-radius: 6px;
    margin-bottom: 11px;
    color: #555;
    font-size: 13px;
}

.btn {
    padding: 9px 17px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    display: inline-block;
    text-decoration: none;
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
    margin-right: 8px;
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
    direction: rtl;
    text-align: right;
}

.error ul {
    margin: 0;
    padding-right: 20px;
    padding-left: 0;
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

<div class="form-container" data-no-translate="true">

<h1>
    🐛 کیڑوں کے انتظام کی معلومات شامل کریں
</h1>

@if($errors->any())
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form
    action="{{ route('admin.pest.urdu.data.store') }}"
    method="POST"
>

    @csrf

    <input
        type="hidden"
        name="pest_id"
        id="pest_id"
        value="{{ old('pest_id', $selectedPestId) }}"
    >

    <div class="form-group">

        <label>
            فصل منتخب کریں
        </label>

        <select
            name="crop_id"
            id="crop_id"
            required
            onchange="changeCrop(this.value)"
        >

            <option value="">
                فصل منتخب کریں
            </option>

            @foreach($crops as $crop)

                <option
                    value="{{ $crop->id }}"
                    {{ (string)$selectedCropId === (string)$crop->id ? 'selected' : '' }}
                >
                    @if(!empty($crop->name_ur))
                        {{ $crop->name_ur }}
                        @if(!empty($crop->name))
                            — {{ $crop->name }}
                        @endif
                    @else
                        {{ $crop->name ?: 'فصل کا نام موجود نہیں' }}
                    @endif
                </option>

            @endforeach

        </select>

    </div>

    <div class="form-group">

        <label>
            کیڑے یا بیماری کا نام
        </label>

        <input
            type="text"
            class="urdu"
            name="name_ur"
            id="name_ur"
            placeholder="مثال: افڈز"
            value="{{ old('name_ur', $selected?->name_ur) }}"
            required
        >

    </div>


    <div class="form-group">

        <label>
            کیڑے کی قسم
        </label>

        <input
            type="text"
            class="urdu"
            name="type_ur"
            id="type_ur"
            placeholder="مثال: حشری کیڑا"
            value="{{ old('type_ur', $selected?->type_ur) }}"
            required
        >

    </div>

    <div class="form-group">

        <label>
            یہ کیسے پیدا ہوتا ہے
        </label>

        <textarea
            class="urdu"
            name="how_it_occurs_ur"
            id="how_it_occurs_ur"
            required
        >{{ old('how_it_occurs_ur', $selected?->how_it_occurs_ur) }}</textarea>

    </div>

    <div class="form-group">

        <label>
            علامات
        </label>

        <textarea
            class="urdu"
            name="symptoms_ur"
            id="symptoms_ur"
            required
        >{{ old('symptoms_ur', $selected?->symptoms_ur) }}</textarea>

    </div>

    <div class="form-group">

        <label>
            بچاؤ
        </label>

        <textarea
            class="urdu"
            name="protection_ur"
            id="protection_ur"
            required
        >{{ old('protection_ur', $selected?->protection_ur) }}</textarea>

    </div>

    <div class="form-group">

        <label>
            تجویز کردہ تدارک
        </label>

        <textarea
            class="urdu"
            name="recommended_control_ur"
            id="recommended_control_ur"
            required
        >{{ old('recommended_control_ur', $selected?->recommended_control_ur) }}</textarea>

    </div>

    <div>

        <button
            type="submit"
            class="btn save"
        >
            💾 اردو کیڑوں کی معلومات محفوظ کریں
        </button>

        <a
            href="{{ route('admin.crops') }}"
            class="btn back"
        >
            واپس
        </a>

    </div>

</form>

</div>

@endsection

@push('scripts')

@php
$pestUrduData = $pests->map(function ($pest) {
return [
'id' => $pest->id,
'crop_id' => $pest->crop_id,
'crop_name' => $pest->crop?->name,
'crop_name_ur' => $pest->crop?->name_ur,
'name' => $pest->name,
'name_ur' => $pest->name_ur,
'type_ur' => $pest->type_ur,
'how_it_occurs_ur' => $pest->how_it_occurs_ur,
'symptoms_ur' => $pest->symptoms_ur,
'protection_ur' => $pest->protection_ur,
'recommended_control_ur' => $pest->recommended_control_ur,
];
})->values();
@endphp

<script>
const pestUrduData = @json($pestUrduData);

function changeCrop(cropId) {
    const pestIdField = document.getElementById('pest_id');

    if (!cropId) {
        pestIdField.value = '';
        clearUrduFields();
        updateEnglishName(null);
        return;
    }

    const cropPests = pestUrduData.filter(function (pest) {
        return String(pest.crop_id) === String(cropId);
    });

    if (cropPests.length === 0) {
        pestIdField.value = '';
        clearUrduFields();
        updateEnglishName(null);
        return;
    }

    const currentPestId = pestIdField.value;

    const currentPest = cropPests.find(function (pest) {
        return String(pest.id) === String(currentPestId);
    });

    if (currentPest) {
        fillPest(currentPest.id);
        return;
    }

    fillPest(cropPests[0].id);
}

function fillPest(id) {
    const item = pestUrduData.find(function (pest) {
        return String(pest.id) === String(id);
    });

    if (!item) {
        return;
    }

    const pestIdField = document.getElementById('pest_id');

    if (pestIdField) {
        pestIdField.value = item.id;
    }

    const fields = {
        name_ur: item.name_ur,
        type_ur: item.type_ur,
        how_it_occurs_ur: item.how_it_occurs_ur,
        symptoms_ur: item.symptoms_ur,
        protection_ur: item.protection_ur,
        recommended_control_ur: item.recommended_control_ur
    };

    Object.entries(fields).forEach(function ([field, value]) {
        const element = document.querySelector(
            '[name="' + field + '"]'
        );

        if (element) {
            element.value = value || '';
        }
    });

    updateEnglishName(item);
}

function updateEnglishName(item) {
    const element = document.getElementById('englishPestName');

    if (!element) {
        return;
    }

    if (!item) {
        element.textContent = '—';
        return;
    }

    element.textContent = item.name || '—';
}

function clearUrduFields() {
    const fields = [
        'name_ur',
        'type_ur',
        'how_it_occurs_ur',
        'symptoms_ur',
        'protection_ur',
        'recommended_control_ur'
    ];

    fields.forEach(function (field) {
        const element = document.querySelector(
            '[name="' + field + '"]'
        );

        if (element) {
            element.value = '';
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const cropSelect = document.getElementById('crop_id');
    const pestIdField = document.getElementById('pest_id');

    if (!cropSelect || !pestIdField) {
        return;
    }

    const selectedPestId = pestIdField.value;

    if (selectedPestId) {
        fillPest(selectedPestId);
        return;
    }

    if (cropSelect.value) {
        changeCrop(cropSelect.value);
    }
});
</script>

@endpush
