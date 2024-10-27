<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>  
<?php require base_path('views/partials/banner.php') ?> 

<!-- Main content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <a href="/tasks" class="underline text-blue-500">Go back...</a>
        <p class="py-6"><?= htmlspecialchars($task['description']) ?></p>
        <!-- <form action="" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value=<?= $task['id']?>>
            <button type="submit" class="text-xs text-red-500">Delete</button>
        </form> -->
        <div class="mt-6">
            <a href="/task/edit?id=<?= $task['id'] ?>" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Edit Task</a>
        </div>
    </div>
</main>

<?php require base_path('views/partials/nav-profile.php') ?>
<?php require base_path('views/partials/footer.php') ?>               
