@extends('layouts.app')

@section('content')

<style>
    .expert-users-container {
        width: 90%;
        max-width: 1000px;
        margin: 20px auto 40px;
    }
    .expert-users-container h2 { color:#1b5e20; margin-bottom:10px; }
    .intro { color:#666; margin-bottom:25px; }
    .user-card {
        background:white; padding:20px; margin-bottom:15px; border-radius:12px;
        box-shadow:0 5px 15px rgba(0,0,0,.1);
        display:flex; justify-content:space-between; align-items:center; gap:15px;
    }
    .user-name { color:#2e7d32; font-size:20px; font-weight:bold; margin-bottom:6px; }
    .question-count { color:#666; }
    .completed {
        display:inline-block; margin-top:7px; padding:5px 9px; border-radius:15px;
        background:#e8f5e9; color:#1b5e20; font-size:12px; font-weight:bold;
    }
    .user-actions { display:flex; align-items:center; gap:10px; }
    .view-btn {
        background:#2e7d32; color:white; text-decoration:none; padding:10px 20px;
        border-radius:25px; white-space:nowrap;
    }
    .view-btn:hover { background:#1b5e20; color:white; }
    .more-wrap { position:relative; }
    .more-btn {
        width:40px; height:40px; border:0; border-radius:50%; background:#f1f3f1;
        color:#333; font-size:23px; cursor:pointer;
    }
    .more-btn:hover { background:#e2e7e2; }
    .more-menu {
        display:none; position:absolute; right:0; top:45px; z-index:50; min-width:170px;
        background:#fff; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,.18); overflow:hidden;
    }
    .more-menu.show { display:block; }
    .delete-user {
        width:100%; border:0; background:white; color:#dc3545; text-align:left;
        padding:12px 14px; cursor:pointer;
    }
    .delete-user:hover { background:#fff1f1; }
    .no-users { background:#fff3cd; color:#856404; padding:15px; border-radius:10px; }
    @media(max-width:600px) {
        .user-card { flex-direction:column; align-items:flex-start; }
        .user-actions { width:100%; justify-content:space-between; }
        .view-btn { flex:1; text-align:center; }
    }
</style>

<div class="expert-users-container" data-no-translate="true">

    <h2>🥬 {{ t('Users Vegetable Questions', 'صارفین کے سبزیوں سے متعلق سوالات') }}</h2>
    <p class="intro">
        {{ t('Each user stays in this list until you manually remove them. Answered questions are still visible.', 'ہر صارف اس فہرست میں رہے گا جب تک آپ اسے خود نہ ہٹائیں۔ جواب دیے گئے سوالات بھی نظر آئیں گے۔') }}
    </p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse($users as $user)
        <div class="user-card">
            <div>
                <div class="user-name">👨‍🌾 {{ $user->name }}</div>
                <div class="question-count">
                    {{ $user->question_count }}
                    {{ $user->question_count == 1 ? t('Question', 'سوال') : t('Questions', 'سوالات') }}
                </div>

                @if($user->question_count > 0 && $user->answered_question_count == $user->question_count)
                    <span class="completed">✓ {{ t('All questions answered', 'تمام سوالات کے جوابات دے دیے گئے ہیں') }}</span>
                @endif
            </div>

            <div class="user-actions">
                <a href="{{ route('expert.vegetable.user.questions', $user->id) }}" class="view-btn">
                    {{ t('View Questions', 'سوالات دیکھیں') }}
                </a>

                <div class="more-wrap">
                    <button type="button" class="more-btn" aria-label="{{ t('More options', 'مزید اختیارات') }}">⋮</button>
                    <div class="more-menu">
                        <form action="{{ route('expert.user.hide', $user->id) }}" method="POST" class="hide-user-form" data-category="vegetable" data-user-name="{{ $user->name }}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="category" value="vegetable">
                            <button type="submit" class="delete-user">🗑 {{ t('Delete from list', 'فہرست سے حذف کریں') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="no-users">
            {{ t('No users have questions in this category.', 'اس زمرے میں کسی صارف کا کوئی سوال موجود نہیں۔') }}
        </div>
    @endforelse
</div>


<div class="expert-delete-modal" id="expertDeleteModal-vegetable" aria-hidden="true">
    <div class="expert-delete-backdrop"></div>
    <div class="expert-delete-box" role="dialog" aria-modal="true">
        <div class="expert-delete-icon">⋮</div>
        <h3>{{ t('Remove user from list?', 'کیا آپ اس صارف کو اپنی فہرست سے حذف کرنا چاہتے ہیں؟') }}</h3>
        <p id="expertDeleteMessage-vegetable">{{ t('The user account and questions will not be deleted.', 'صارف کا اکاؤنٹ اور اس کے سوالات حذف نہیں ہوں گے۔') }}</p>
        <div class="expert-delete-actions">
            <button type="button" class="expert-cancel-delete">{{ t('No', 'نہیں') }}</button>
            <button type="button" class="expert-confirm-delete">{{ t('Yes, Delete', 'جی ہاں، حذف کریں') }}</button>
        </div>
    </div>
</div>

<style>
.expert-delete-modal{display:none;position:fixed;inset:0;z-index:10000;align-items:center;justify-content:center;padding:20px}
.expert-delete-modal.show{display:flex}
.expert-delete-backdrop{position:absolute;inset:0;background:rgba(0,0,0,.55)}
.expert-delete-box{position:relative;width:100%;max-width:430px;background:#fff;border-radius:18px;padding:28px;box-shadow:0 20px 60px rgba(0,0,0,.25);text-align:center}
.expert-delete-icon{width:58px;height:58px;border-radius:50%;margin:0 auto 14px;background:#fff1f1;color:#dc3545;font-size:30px;line-height:54px;font-weight:700}
.expert-delete-box h3{margin:0 0 8px;color:#173b32}
.expert-delete-box p{color:#68736d;margin:0 0 22px;line-height:1.6}
.expert-delete-actions{display:flex;justify-content:center;gap:10px}
.expert-delete-actions button{border:0;border-radius:9px;padding:10px 20px;cursor:pointer;font-weight:700}
.expert-cancel-delete{background:#e9ecef;color:#333}
.expert-confirm-delete{background:#dc3545;color:#fff}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let pendingHideForm = null;
    const deleteModal = document.getElementById('expertDeleteModal-vegetable');
    document.querySelectorAll('.hide-user-form').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            pendingHideForm = form;
            deleteModal.classList.add('show');
            deleteModal.setAttribute('aria-hidden','false');
        });
    });
    deleteModal.querySelector('.expert-cancel-delete').addEventListener('click', function() {
        deleteModal.classList.remove('show'); deleteModal.setAttribute('aria-hidden','true'); pendingHideForm=null;
    });
    deleteModal.querySelector('.expert-confirm-delete').addEventListener('click', function() {
        if (pendingHideForm) pendingHideForm.submit();
    });
    deleteModal.querySelector('.expert-delete-backdrop').addEventListener('click', function() {
        deleteModal.classList.remove('show'); deleteModal.setAttribute('aria-hidden','true'); pendingHideForm=null;
    });

    document.querySelectorAll('.more-btn').forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.stopPropagation();
            document.querySelectorAll('.more-menu').forEach(function (menu) {
                if (menu !== button.nextElementSibling) menu.classList.remove('show');
            });
            button.nextElementSibling.classList.toggle('show');
        });
    });
    document.addEventListener('click', function () {
        document.querySelectorAll('.more-menu').forEach(function (menu) {
            menu.classList.remove('show');
        });
    });
});
</script>

@endsection
