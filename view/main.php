<?php
TEMPLATE("General");
$templ = new \MiMFa\Template\General();
$templ->Initial = function() use($templ) {
    $templ->DrawInitial();
    //Head Tags
};
$templ->Header = function() use($templ) {
    $templ->DrawHeader();
    //Page Header
};
$templ->Content = function() use($templ) {
    $templ->DrawContent();
    //Page Content
};
$templ->Footer = function() use($templ) {
    $templ->DrawFooter();
    //Page Footer
};
$templ->Final = function() use($templ) {
    $templ->DrawFinal();
    //Final Tags
};
$templ->Draw();
?>