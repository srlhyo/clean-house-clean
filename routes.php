<?php

$router->get('/', 'controllers/index.php');
$router->get('/leaderboard', 'controllers/leaderboard.php');

$router->get('/tasks', 'controllers/tasks/index.php');
$router->get('/task', 'controllers/tasks/show.php');
$router->delete('/task', 'controllers/tasks/destroy.php');

$router->get('/tasks/create', 'controllers/tasks/create.php');
$router->post('/tasks', 'controllers/tasks/store.php');

$router->get('/task/edit', 'controllers/tasks/edit.php');
$router->patch('/task', 'controllers/tasks/update.php');