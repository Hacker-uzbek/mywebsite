<?php
// CORS ruxsatlari
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

// GET parametrdan name olish
$name = isset($_GET['name']) ? $_GET['name'] : '';
?>

<div class="container mt-5">
    <h1 class="text-center">PHP DOM-based XSS Demonstration</h1>

    <div class="alert alert-info mt-4">
        Welcome! Add <code>?name=YourName</code> to the URL to see your name below.
    </div>

    <div id="greeting" class="mt-4">
        <?= $name ?>
    </div>
</div>
