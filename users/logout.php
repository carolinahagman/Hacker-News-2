<?php

declare(strict_types=1);

require __DIR__ . '/../app/autoload.php';

unset($_SESSION['user']);

redirect('/index.php');
