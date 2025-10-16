<?php

// To unset all exist routers sat at the bottom layers
\_::$Aseq->Reset();

/**
 * Use your routers by below formats
 * \_::$Aseq->On("A Part Of Path?")->Default("Route Name");
 */

// To route all requests to the DefaultRouteName
\_::$Aseq->On()->Default(\_::$Config->DefaultRouteName);
?>