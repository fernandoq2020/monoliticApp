<?php 
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$current_user = 4;
    
$note = $db->query('select * from notes where id =?', [$_POST['id']])->findOrFail();

authorize($note['user_id']  === $current_user);

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
