<?php

/*
 * Function to set header
 */

if(!function_exists("set_header")) {
    
    function set_header(string $path = null)
    {
        include BASE_PATH . ($path ?? '/views/header.php');
    }
}

/*
 * Function to set footer
 */

if(!function_exists("set_footer")) {
    
    function set_footer(string $path = null)
    {	
        include BASE_PATH .  ($path ?? '/views/footer.php');
    }
}

