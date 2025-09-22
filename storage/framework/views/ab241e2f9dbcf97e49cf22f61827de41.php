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
<div class="bg-white">
    <section class="text-center py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <h1 class="text-5xl font-bold mb-4">Build & Showcase Your Developer Profile</h1>
        <p class="text-xl mb-6">Join a platform made for web developers to share skills, experience, and products.</p>
        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('register')); ?>" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded-lg shadow-md hover:bg-gray-100 transition"> 
                Get Started
            </a>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('profile.edit')); ?>" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded-lg shadow-md hover:bg-gray-100 transition">
                Get Started
            </a>
        <?php endif; ?>      
            
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-10">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">🧑‍💻 Developer Profiles</h3>
                    <p>Create detailed profiles with bio, skills, experience, and portfolio links.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">🎨 Showcase Work</h3>
                    <p>Add live project demos and GitHub links. Inspire and connect with others.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-2">💰 Sell Products</h3>
                    <p>Upload and sell digital products like templates or code snippets.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 text-center">
        <h2 class="text-2xl font-bold mb-6">Ready to get started?</h2>
        <a href="<?php echo e(route('register')); ?>" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
            Create Your Profile
        </a>
    </section>

    <footer class="bg-gray-900 text-gray-300 text-center py-6">
        <p>&copy; <?php echo e(date('Y')); ?> DeveloperHub. Made by Nasiha ✨</p>
        <div class="mt-2">
            <a href="https://github.com" target="_blank" class="underline hover:text-white">GitHub</a> |
            <a href="#" class="underline hover:text-white">Contact</a>
        </div>
    </footer>
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
<?php /**PATH C:\xampp\htdocs\laravel\devHub\resources\views/landing.blade.php ENDPATH**/ ?>