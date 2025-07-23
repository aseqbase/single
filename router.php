<?php

// To unset all exist routers sat at the bottom layers
\_::$Back->Router->Reset();

/**
 * Use your routers by below formats
 * \_::$Back->Router->On("A Part Of Path?")->Default("Route Name");
 */

// To route all requests to the DefaultRouteName
\_::$Back->Router->On()->Default(\_::$Config->DefaultRouteName);
?>