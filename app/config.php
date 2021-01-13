<?php

declare(strict_types=1);

// This file contains a list of global configuration settings.
return [
    'title' => 'Hacker News',
    'database_path' => sprintf('sqlite:%s/database/newsdatabase.db', __DIR__),
];
