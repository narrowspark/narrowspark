<?php

/**
 * Narrowspark - Framework for Creative People.
 *
 * @author   Daniel Bannert <d.bannert@anolilab.de>
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$paths = require __DIR__.'/bootstrap/paths.php';

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server.
if ($uri !== '/' and file_exists($paths['public'].$uri)) {
    return false;
}

require_once $paths['public'].'/index.php';
