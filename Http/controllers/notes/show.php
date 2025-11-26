<?php 
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$current_user = 4;

$note = $db->query('select * from notes where id =?', [$_GET['id']])->findOrFail();

authorize($note['user_id']  === $current_user);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
