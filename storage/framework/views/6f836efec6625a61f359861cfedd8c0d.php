<?php if($profile && $skills): ?>
<form method="POST" action="<?php echo e(route('profile.update.dev')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>

    <!-- Profile Photo -->
    <div class="mb-4">
        <label for="photo" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Profile Photo</label>
        <input type="file" name="photo" class="mt-2 text-white">
    </div>
    <!-- Bio -->
    <div class="mb-4">
        <label for="bio" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Bio</label>
        <textarea name="bio" class="w-full rounded"><?php echo e(old('bio', $profile->bio)); ?></textarea>
    </div>

    <!-- Location -->
    <div class="mb-4">
        <label for="location" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Location</label>
        <input type="text" name="location" value="<?php echo e(old('location', $profile->location)); ?>" class="w-full rounded" />
    </div>

    <!-- Skills -->
    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Skills</label>
        <div class="grid grid-cols-2 gap-2">
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label>
                    <input type="checkbox" name="skills[]" value="<?php echo e($skill->id); ?>"
                        <?php echo e($profile->skills->contains($skill->id) ? 'checked' : ''); ?>>
                    <?php echo e($skill->name); ?>

                </label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="flex justify-end">
        <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
            Update Developer Profile
        </button>
    </div>
</form>
<?php else: ?>
    <div class="bg-red-100 text-red-700 p-4">
        Developer profile data not loaded.
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\devHub\resources\views/profile/partials/update-developer-profile-form.blade.php ENDPATH**/ ?>