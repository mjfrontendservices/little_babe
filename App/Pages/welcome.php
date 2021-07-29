<?php

$title = "Little Babe | Welcome";
require './Includes/head.php';
require './Assets/little_babe/all.php';

?>

<header>
    <div class="container">
        <h1>Welcome to Little Babe</h1>
    </div>
</header>

<section class="desc">
    <div class="container">
        <h2>Version 1.0</h2>
        <div class="content">
        <p>Little Babe is a small PHP framework for hybrid PWA development. Unlike other PHP frameworks with MVC
                (Model, View and Controller)
                pattern, Little Babe is designed for
                building hybrid progressive web applications
                (installable in cross-platform and multiple devices from mobile, tablets and desktop) with
                built-in functions for accessing localstorage browser API (for data persistency in the browser using
                Javascript), JSON
                file C.R.U.D (Create, Read, Update, Delete)
                operations and file uploads in PHP.</p>
        </div>
        <a href="<?php echo $base_url ?>docs">
            <button class="docs">Documentation</button>
        </a>
    </div>
</section>

<?php

require './Includes/foot.php';