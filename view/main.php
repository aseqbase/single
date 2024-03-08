<?php
TEMPLATE("General");
// Create an instance of the regular and basic template
$template = new \MiMFa\Template\General();
$template->Initial = function() use($template) {
    $templ->DrawInitial();
    // Draw Head Tags
};
$template->Header = function() use($template) {
    $templ->DrawHeader();
    // Draw Page Header
};
$template->Content = function() use($template) {
    $templ->DrawContent();
    // Draw Page Content
};
$template->Footer = function() use($template) {
    $templ->DrawFooter();
    // Draw Page Footer
};
$template->Final = function() use($template) {
    $templ->DrawFinal();
    // Draw Final Tags
};
$template->Draw();
?>
