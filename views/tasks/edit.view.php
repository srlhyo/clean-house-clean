<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<!-- Main content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
   <div class="bg-white p-8 rounded-lg shadow-md w-96 m-10">
      <div class="flex justify-center mb-6">
         <img src="/placeholder.svg?height=40&width=40" alt="BEROOMIES Logo" class="h-10">
      </div>
      <form class="space-y-4" method="POST" action="/task">
         <input type="hidden" name="_method" value="PATCH">
         <input type="hidden" name="id" value="<?= $task['id'] ?>">
         <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea 
               id="description" 
               name="description" 
               placeholder="write your task here..." 
               class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
            ><?= $task['description']?></textarea>
         </div>
         <a href="/tasks" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Cancel
         </a>
         <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Update Task
         </button>
      </form>
      <div class="mt-1">
         <?php if(! empty($errors)) : ?>
            <p class="text-xs text-red-500"><?= $errors['description'] ?></p>
         <?php endif; ?>
      </div>
   </div>
</main>

<?php require base_path('views/partials/nav-profile.php') ?>
<?php require base_path('views/partials/footer.php') ?>