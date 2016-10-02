<?php

require __DIR__ . '/../bootstrap/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

(new \Dotenv\Dotenv(base_path() . '/../', '.env'))->overload();
