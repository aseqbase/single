<?php

// To unset all exist routers sat at the bottom layers
\_::$Back->Router->Reset();

/**
 * Use your routers by below formats
 * \_::$Back->Router->Route("A Part Of Path?")->Default("Route Name");
 */

// To route all requests to the DefaultRouteName
\_::$Back->Router->Route->Default(\_::$Config->DefaultRouteName);
?>