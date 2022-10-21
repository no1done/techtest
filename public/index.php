<?php

namespace Application;

use Application\Controller\ApplicationController;

require_once __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['submit'])) {

    $controller = new ApplicationController();
    $response = $controller->processRequest($_POST, $_SERVER);

    print_r($response);

}

// Display HTML form
require_once __DIR__ . '/../view/index-form.php';

