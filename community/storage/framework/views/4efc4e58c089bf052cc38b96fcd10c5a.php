<?php $__env->startSection('content'); ?>

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
        <h2><?php echo e(is_urdu() ? 'تمام رجسٹرڈ صارفین' : 'All Registered Users'); ?></h2>
        <button type="button" class="add-expert-btn" id="openAddExpert">
            ➕ <?php echo e(is_urdu() ? 'ماہر شامل کریں' : 'Add Expert'); ?>

        </button>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th><?php echo e(is_urdu() ? 'شناخت' : 'ID'); ?></th>
                    <th><?php echo e(is_urdu() ? 'نام' : 'Name'); ?></th>
                    <th><?php echo e(is_urdu() ? 'ای میل' : 'Email'); ?></th>
                    <th><?php echo e(is_urdu() ? 'کردار' : 'Role'); ?></th>
                    <th><?php echo e(is_urdu() ? 'حیثیت' : 'Status'); ?></th>
                    <th><?php echo e(is_urdu() ? 'اقدامات' : 'Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <?php if($user->is_admin): ?>
                            <span class="badge bg-primary role-badge"><?php echo e(is_urdu() ? 'منتظم' : 'Admin'); ?></span>
                        <?php elseif($user->is_expert): ?>
                            <span class="badge bg-success role-badge"><?php echo e(is_urdu() ? 'ماہر' : 'Expert'); ?></span>
                        <?php else: ?>
                            <span class="badge bg-secondary role-badge"><?php echo e(is_urdu() ? 'صارف' : 'User'); ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($user->is_active): ?>
                            <span class="text-success"><?php echo e(is_urdu() ? 'فعال' : 'Active'); ?></span>
                        <?php else: ?>
                            <span class="text-danger"><?php echo e(is_urdu() ? 'غیر فعال' : 'Inactive'); ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="actions-cell">
                        <?php if(!$user->is_admin): ?>
                            <form action="<?php echo e(route('admin.makeAdmin')); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                                <button class="btn btn-primary btn-sm"><?php echo e(is_urdu() ? 'منتظم بنائیں' : 'Make Admin'); ?></button>
                            </form>
                        <?php endif; ?>

                        <?php if(!$user->is_expert): ?>
                            <form action="<?php echo e(route('admin.makeExpert')); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                                <button class="btn btn-success btn-sm"><?php echo e(is_urdu() ? 'ماہر بنائیں' : 'Make Expert'); ?></button>
                            </form>
                        <?php endif; ?>

                        <?php if($user->is_admin || $user->is_expert): ?>
                            <form action="<?php echo e(route('admin.makeUser')); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                                <button class="btn btn-secondary btn-sm"><?php echo e(is_urdu() ? 'صارف بنائیں' : 'Make User'); ?></button>
                            </form>
                        <?php endif; ?>

                        <form action="<?php echo e(route('admin.toggleActive')); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <button class="btn btn-warning btn-sm">
                                <?php echo e($user->is_active ? (is_urdu() ? 'غیر فعال کریں' : 'Deactivate') : (is_urdu() ? 'فعال کریں' : 'Activate')); ?>

                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center"><?php echo e(is_urdu() ? 'کوئی صارف نہیں ملا۔' : 'No Users Found'); ?></td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="add-expert-modal" id="addExpertModal">
    <div class="add-expert-box">
        <h4>➕ <?php echo e(is_urdu() ? 'نیا اکاؤنٹ شامل کریں' : 'Add Expert / Account'); ?></h4>

        <form action="<?php echo e(route('admin.addExpert')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label"><?php echo e(is_urdu() ? 'نام' : 'Name'); ?></label>
                <input type="text" name="name" class="form-control" required value="<?php echo e(old('name')); ?>">
            </div>

            <div class="mb-3">
                <label class="form-label"><?php echo e(is_urdu() ? 'ای میل' : 'Email'); ?></label>
                <input type="email" name="email" class="form-control" required value="<?php echo e(old('email')); ?>">
            </div>

            <div class="mb-3">
                <label class="form-label"><?php echo e(is_urdu() ? 'پاس ورڈ' : 'Password'); ?></label>
                <div class="password-field-wrap">
                    <input type="password" name="password" id="adminAddPassword" class="form-control" required>
                    <button type="button" class="password-eye" onclick="toggleAdminPassword('adminAddPassword', this)" aria-label="Show password"><i class="bi bi-eye"></i></button>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label"><?php echo e(is_urdu() ? 'پاس ورڈ کی تصدیق' : 'Confirm Password'); ?></label>
                <div class="password-field-wrap">
                    <input type="password" name="password_confirmation" id="adminAddPasswordConfirmation" class="form-control" required>
                    <button type="button" class="password-eye" onclick="toggleAdminPassword('adminAddPasswordConfirmation', this)" aria-label="Show password"><i class="bi bi-eye"></i></button>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label"><?php echo e(is_urdu() ? 'کردار منتخب کریں' : 'Select Role'); ?></label>
                <select name="role" class="form-select" required>
                    <option value="expert" <?php echo e(old('role','expert') === 'expert' ? 'selected' : ''); ?>>
                        <?php echo e(is_urdu() ? 'ماہر' : 'Expert'); ?>

                    </option>
                    <option value="admin" <?php echo e(old('role') === 'admin' ? 'selected' : ''); ?>>
                        <?php echo e(is_urdu() ? 'منتظم' : 'Admin'); ?>

                    </option>
                    <option value="user" <?php echo e(old('role') === 'user' ? 'selected' : ''); ?>>
                        <?php echo e(is_urdu() ? 'صارف' : 'User'); ?>

                    </option>
                </select>
            </div>

            <div class="add-expert-actions">
                <button type="button" class="cancel-add" id="closeAddExpert">
                    <?php echo e(is_urdu() ? 'منسوخ' : 'Cancel'); ?>

                </button>
                <button type="submit" class="save-add">
                    <?php echo e(is_urdu() ? 'شامل کریں' : 'Add'); ?>

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

    <?php if($errors->any()): ?>
        modal.classList.add('show');
    <?php endif; ?>
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>