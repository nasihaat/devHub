<?php $__env->startSection('content'); ?>
<div class="py-8 px-4 max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Welcome, <?php echo e($user->name); ?></h1>

    <!-- Profile Card -->
    <div class="bg-white shadow-md rounded-2xl p-6 mb-8 flex items-center space-x-6">
        <img src="<?php echo e($profile->photo ? asset('storage/' . $profile->photo) : 'https://picsum.photos/200'); ?>" alt="Profile Photo" class="w-24 h-24 rounded-full object-cover">
        <div>
            <h2 class="text-xl font-bold"><?php echo e($user->name); ?></h2>
            <p class="text-gray-600"><?php echo e($profile->location ?? 'Unknown Location'); ?></p>
            <p class="mt-2 text-sm text-gray-500"><?php echo e($profile->bio ?? 'No bio added yet.'); ?></p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
        <div class="bg-indigo-100 text-indigo-700 p-6 rounded-xl shadow-sm">
            <h3 class="text-lg font-semibold">Skills</h3>
            <p class="text-3xl"><?php echo e($profile->skills->count()); ?></p>
        </div>
        <div class="bg-green-100 text-green-700 p-6 rounded-xl shadow-sm">
            <h3 class="text-lg font-semibold">Projects</h3>
            <p class="text-3xl"><?php echo e($profile->portfolios->count()); ?></p>
        </div>
        <div class="bg-yellow-100 text-yellow-700 p-6 rounded-xl shadow-sm">
            <h3 class="text-lg font-semibold">Products</h3>
            <p class="text-3xl"><?php echo e($profile->products->count()); ?></p>
        </div>
    </div>

    <!-- Portfolios List -->
    <div>
        <h2 class="text-2xl font-bold mb-4 text-gray-700">My Portfolios</h2>
        <div class="space-y-4">
            <?php $__empty_1 = true; $__currentLoopData = $profile->portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-4 bg-white rounded-xl shadow flex justify-between items-center">
                    <div>
                        <h3 class="font-semibold text-lg"><?php echo e($portfolio->title); ?></h3>
                        <p class="text-sm text-gray-500"><?php echo e(Str::limit($portfolio->description, 100)); ?></p>
                    </div>
                    <a href="<?php echo e($portfolio->live_link); ?>" target="_blank" class="text-blue-600 hover:underline">Live</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-gray-500">No portfolios added yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\devHub\resources\views/dashboard/index.blade.php ENDPATH**/ ?>