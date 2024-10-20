<?php

use Core\App;
use Core\Database;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = App::resolve(Database::class);

$currentId = 3;

$task = $db->query("select * from tasks where id = :id", ["id" => $_GET["id"]])->findOrFail();

authorize($task['user_id'] == $currentId);

$db->query("delete from tasks where id = :id", [
    "id" => $_POST['id'],
]);

header('location: /tasks');
exit();
