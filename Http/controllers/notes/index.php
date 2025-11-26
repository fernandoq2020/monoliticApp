<?php 

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = "My Notes";

$notes = $db->query('select * from notes')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);