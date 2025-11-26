<?php

use Core\Sessions;

view("session/create.view.php", [
    'errors' => Sessions::get('errors') ?? []
]);