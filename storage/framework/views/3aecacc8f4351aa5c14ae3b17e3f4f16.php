<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Add Portfolio')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12 max-w-3xl mx-auto">
        <form action="<?php echo e(route('portfolio.store')); ?>" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 p-6 rounded shadow">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" name="title" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Description</label>
                <textarea name="description" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Live Link</label>
                <input type="url" name="live_link" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">GitHub Link</label>
                <input type="url" name="github_link" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Image</label>
                <input type="file" name="image" class="w-full text-gray-700 dark:text-white">
            </div>

            <div class="text-right">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                    Add Portfolio
                </button>
            </div>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\devHub\resources\views/portfolio/create.blade.php ENDPATH**/ ?>