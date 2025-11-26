<?php
use Core\Validator;
use Core\Database;
use Core\App;

$mail = $_POST['email'];
$password = $_POST['password'];


$errors = [];

//Validate the form inputs
if(!Validator::email($mail)){
    $errors['email'] = 'Please provide a valid email address';
}

if(!Validator::string($password, 7, 255)){
    $errors['password'] = 'Please provide a valid password';
}


if(!empty($errors)){
    return view('/registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
//Check if the email alredy exists
$user = $db->query("select * from users where email = :email", ['email' => $mail])->find();

if($user){
    header('location: /');
    exit();
}else{
    $db->query("INSERT INTO users(email, password) VALUES (:email, :password)", [
        'email' => $mail,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    login(['email' => $mail]);

    header('location: /');
    exit();
}
