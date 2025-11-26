<?php 
use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id =?', [$_POST['id']])->findOrFail();

$current_user = 4;

authorize($note['user_id']  === $current_user);

$errors = [];
if(!Validator::string($_POST['body'], 1, 1000)){
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if(!empty($errors)){
    return view("notes/edit.view.php", [
                'heading' => 'Edit Note',
                'note' => $note,
                'errors' => $errors
            ]);
}

if(empty($errors)){
    $db->query('UPDATE notes set body = :body where id = :id', [
        'body' => $_POST['body'],
        'id' => $_POST['id']
    ]);

    header('location: /notes');
    die();
}
