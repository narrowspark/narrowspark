<?php
return function ($method, $uri) {
    if($uri === '') {
        return [0];
    } elseif ($uri[0] !== '/') {
        throw new \RuntimeException("Cannot match route: non-empty uri must be prefixed with '/', '{$uri}' given");
    }
    $segments = explode('/', substr($uri, 1));
    switch (count($segments)) {
        case 1:
            list($s0) = $segments;
            if ($s0 === '') {
                switch ($method) {
                    case 'GET':
                    case 'HEAD':
                        return [1, 'GET|HEAD/', []];
                    default:
                        $allowedHttpMethods[] = 'GET';
                        $allowedHttpMethods[] = 'HEAD';
                        break;
                }
            }
            return isset($allowedHttpMethods) ? [2, $allowedHttpMethods] : [0];
            break;
        
        default:
            return [0];
    }
};