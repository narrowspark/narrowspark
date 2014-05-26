<?php
/*
|--------------------------------------------------------------------------
| Set mode for brainwave and cresk
|--------------------------------------------------------------------------
| enable debug mode for template development or bugfixing
|
| -1 = monolog catch all errors
|  0 = off
|  1 = debug bar*
|  2 = whoops error handler
|  3 = redbean debug for sql
|  4 = twig debug for all tpls
|  5 = readbean(3) + twig(4)
|  6 = swiftmailer
|  7 = readbean(3) + twig(4) + swiftmailer(6)
|
*/

$config = array(
    'app.cresk.mode' => -1
);
