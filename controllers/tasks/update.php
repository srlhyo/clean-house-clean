<?php

use Core\App;
use Core\Database;
use Core\Validation;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = App::resolve(Database::class);
$task = $db->query("select * from tasks where id = :id", ["id" => $_POST['id']])->findOrFail();

$currentId = 4;

authorize($task['user_id'] == $currentId);

$errors = [];

if(! Validation::str($_POST['description'], 1, 20)) {
    $errors['description'] = 'Description is no more than 20 characters';
}

if(count($errors)) {
    return view('tasks/edit.view.   php', [
        'errors' => $errors,
        'heading' => 'Edit Task',
        'task' => $task,

    ]);
}
 
$db->query("update tasks set description = :description where id = :id", [
    "description" => $_POST["description"],
    "id" => $_POST["id"]  
]);

header('location: /tasks');
die();
