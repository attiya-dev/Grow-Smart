@extends('layouts.app')

@section('content')

<style>
    .admin-users-wrap { max-width: 1250px; margin: 25px auto; }
    .admin-users-header { display:flex; justify-content:space-between; align-items:center; gap:15px; margin-bottom:20px; }
    .admin-users-header h2 { margin:0; color:#173b32; }
    .add-expert-btn { border:0; border-radius:10px; padding:11px 18px; background:#2e7d32; color:#fff; font-weight:700; cursor:pointer; }
    .add-expert-btn:hover { background:#1b5e20; }
    .add-expert-modal { display:none; position:fixed; inset:0; z-index:9999; background:rgba(0,0,0,.55); align-items:center; justify-content:center; padding:20px; }
    .add-expert-modal.show { display:flex; }
    .add-expert-box { width:100%; max-width:520px; background:#fff; border-radius:18px; padding:25px; box-shadow:0 20px 60px rgba(0,0,0,.25); }
    .add-expert-box h4 { color:#173b32; margin-bottom:20px; }
    .add-expert-actions { display:flex; justify-content:flex-end; gap:10px; margin-top:20px; }
    .password-field-wrap { position:relative; }
    .password-field-wrap .form-control { padding-right:48px; }
    .password-eye { position:absolute; right:10px; top:50%; transform:translateY(-50%); border:0; background:transparent; color:#5f6b66; cursor:pointer; font-size:18px; padding:5px; }
    .password-eye:hover { color:#2e7d32; }
    .add-expert-actions button { border:0; border-radius:8px; padding:10px 18px; cursor:pointer; }
    .cancel-add { background:#e9ecef; color:#333; }
    .save-add { background:#2e7d32; color:white; }
    .role-badge { min-width:60px; display:inline-block; text-align:center; }
    .actions-cell { min-width:360px; }
    @media(max-width:700px) {
        .admin-users-header { flex-direction:column; align-items:stretch; }
        .actions-cell { min-width:0; }
        .table { font-size:12px; }
    }
</style>

<div class="container admin-users-wrap" data-no-translate="true">

    <div class="admin-users-header">
        <h2>{{ is_urdu() ? 'تمام رجسٹرڈ صارفین' : 'All Registered Users' }}</h2>
        <button type="button" class="add-expert-btn" id="openAddExpert">
            ➕ {{ is_urdu() ? 'ماہر شامل کریں' : 'Add Expert' }}
        </button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>{{ is_urdu() ? 'شناخت' : 'ID' }}</th>
                    <th>{{ is_urdu() ? 'نام' : 'Name' }}</th>
                    <th>{{ is_urdu() ? 'ای میل' : 'Email' }}</th>
                    <th>{{ is_urdu() ? 'کردار' : 'Role' }}</th>
                    <th>{{ is_urdu() ? 'حیثیت' : 'Status' }}</th>
                    <th>{{ is_urdu() ? 'اقدامات' : 'Actions' }}</th>
                </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->is_admin)
                            <span class="badge bg-primary role-badge">{{ is_urdu() ? 'منتظم' : 'Admin' }}</span>
                        @elseif($user->is_expert)
                            <span class="badge bg-success role-badge">{{ is_urdu() ? 'ماہر' : 'Expert' }}</span>
                        @else
                            <span class="badge bg-secondary role-badge">{{ is_urdu() ? 'صارف' : 'User' }}</span>
                        @endif
                    </td>
                    <td>
                        @if($user->is_active)
                            <span class="text-success">{{ is_urdu() ? 'فعال' : 'Active' }}</span>
                        @else
                            <span class="text-danger">{{ is_urdu() ? 'غیر فعال' : 'Inactive' }}</span>
                        @endif
                    </td>
                    <td class="actions-cell">
                        @if(!$user->is_admin)
                            <form action="{{ route('admin.makeAdmin') }}" method="POST" style="display:inline;">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button class="btn btn-primary btn-sm">{{ is_urdu() ? 'منتظم بنائیں' : 'Make Admin' }}</button>
                            </form>
                        @endif

                        @if(!$user->is_expert)
                            <form action="{{ route('admin.makeExpert') }}" method="POST" style="display:inline;">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button class="btn btn-success btn-sm">{{ is_urdu() ? 'ماہر بنائیں' : 'Make Expert' }}</button>
                            </form>
                        @endif

                        @if($user->is_admin || $user->is_expert)
                            <form action="{{ route('admin.makeUser') }}" method="POST" style="display:inline;">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button class="btn btn-secondary btn-sm">{{ is_urdu() ? 'صارف بنائیں' : 'Make User' }}</button>
                            </form>
                        @endif

                        <form action="{{ route('admin.toggleActive') }}" method="POST" style="display:inline;">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button class="btn btn-warning btn-sm">
                                {{ $user->is_active ? (is_urdu() ? 'غیر فعال کریں' : 'Deactivate') : (is_urdu() ? 'فعال کریں' : 'Activate') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">{{ is_urdu() ? 'کوئی صارف نہیں ملا۔' : 'No Users Found' }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="add-expert-modal" id="addExpertModal">
    <div class="add-expert-box">
        <h4>➕ {{ is_urdu() ? 'نیا اکاؤنٹ شامل کریں' : 'Add Expert / Account' }}</h4>

        <form action="{{ route('admin.addExpert') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">{{ is_urdu() ? 'نام' : 'Name' }}</label>
                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">{{ is_urdu() ? 'ای میل' : 'Email' }}</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">{{ is_urdu() ? 'پاس ورڈ' : 'Password' }}</label>
                <div class="password-field-wrap">
                    <input type="password" name="password" id="adminAddPassword" class="form-control" required>
                    <button type="button" class="password-eye" onclick="toggleAdminPassword('adminAddPassword', this)" aria-label="Show password"><i class="bi bi-eye"></i></button>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">{{ is_urdu() ? 'پاس ورڈ کی تصدیق' : 'Confirm Password' }}</label>
                <div class="password-field-wrap">
                    <input type="password" name="password_confirmation" id="adminAddPasswordConfirmation" class="form-control" required>
                    <button type="button" class="password-eye" onclick="toggleAdminPassword('adminAddPasswordConfirmation', this)" aria-label="Show password"><i class="bi bi-eye"></i></button>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">{{ is_urdu() ? 'کردار منتخب کریں' : 'Select Role' }}</label>
                <select name="role" class="form-select" required>
                    <option value="expert" {{ old('role','expert') === 'expert' ? 'selected' : '' }}>
                        {{ is_urdu() ? 'ماہر' : 'Expert' }}
                    </option>
                    <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>
                        {{ is_urdu() ? 'منتظم' : 'Admin' }}
                    </option>
                    <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>
                        {{ is_urdu() ? 'صارف' : 'User' }}
                    </option>
                </select>
            </div>

            <div class="add-expert-actions">
                <button type="button" class="cancel-add" id="closeAddExpert">
                    {{ is_urdu() ? 'منسوخ' : 'Cancel' }}
                </button>
                <button type="submit" class="save-add">
                    {{ is_urdu() ? 'شامل کریں' : 'Add' }}
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function toggleAdminPassword(id, button) {
    const input = document.getElementById(id);
    const icon = button.querySelector('i');
    if (!input) return;
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
        button.setAttribute('aria-label', 'Hide password');
    } else {
        input.type = 'password';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
        button.setAttribute('aria-label', 'Show password');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('addExpertModal');
    const open = document.getElementById('openAddExpert');
    const close = document.getElementById('closeAddExpert');

    open.addEventListener('click', () => modal.classList.add('show'));
    close.addEventListener('click', () => modal.classList.remove('show'));

    modal.addEventListener('click', (event) => {
        if (event.target === modal) modal.classList.remove('show');
    });

    @if($errors->any())
        modal.classList.add('show');
    @endif
});
</script>

@endsection
