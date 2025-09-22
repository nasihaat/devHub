<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DevHub Dashboard</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 border-r">
            <div class="p-6 text-2xl font-bold text-indigo-600">DevHub</div>
            <nav class="space-y-1 px-4">
                <a href="<?php echo e(route('dashboard')); ?>" class="block py-2 px-3 rounded hover:bg-indigo-100 dark:hover:bg-gray-700">
                    🏠 Dashboard
                </a>
                <a href="<?php echo e(route('profile.edit')); ?>" class="block py-2 px-3 rounded hover:bg-indigo-100 dark:hover:bg-gray-700">
                    👤 Edit Profile
                </a>
                <a href="<?php echo e(route('portfolio.create')); ?>" class="block py-2 px-3 rounded hover:bg-indigo-100 dark:hover:bg-gray-700">
                    🎨 Add Portfolio
                </a>
                
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="w-full text-left py-2 px-3 rounded hover:bg-red-100 text-red-600">
                        🚪 Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\devHub\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>