<?php

namespace Application;

use Application\Controller\ApplicationController;

require_once __DIR__ . '/../vendor/autoload.php';

// Check to see if the form has been submitted.
if (isset($_POST['submit'])) {

    $controller = new ApplicationController();
    $response = $controller->processRequest($_POST, $_SERVER);

    // Output the response from the API call.
    print_r($response);

    // End the script so we can just see response.
    die;
}

// Display HTML form.
require_once __DIR__ . '/../view/index-form.php';

