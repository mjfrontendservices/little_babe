<?php

/**
 *---------------------
 * DEFAULT INDEX PAGE *
 * --------------------
 */

Route::set('index.php', function (){
    Generate::get('welcome');
});

/**
 *---------------------
 * DOCUMENTATION PAGE *
 * --------------------
 */

Route::set('docs', function (){
    Generate::docs('docs');
});

/**
 *---------------------
 * INSTALLATION PAGE  *
 * --------------------
 */

Route::set('appinstall', function (){
    Generate::install('installpage');
});

/**
 *---------------------
 * GET REQUESTS PAGES *
 * --------------------
 */

Route::set('welcome', function (){
    Generate::get('welcome');
});

/**
 *-----------------------
 * POSTS REQUESTS PAGES *
 * ----------------------
 */



/**
 *----------------------
 * AJAX REQUESTS PAGES *
 * ---------------------
 */