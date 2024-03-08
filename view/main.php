<?php
TEMPLATE("General");
// Create an instance of the regular and basic template
$template = new \MiMFa\Template\General();
$template->Initial = function() use($template) {
    $template->DrawInitial();
    // Draw Head Tags
};
$template->Header = function() use($template) {
    $template->DrawHeader();
    // Draw Page Header
};
$template->Content = function() use($template) {
    $template->DrawContent();
    // Draw Page Content
};
$template->Footer = function() use($template) {
    $template->DrawFooter();
    // Draw Page Footer
};
$template->Final = function() use($template) {
    $template->DrawFinal();
    // Draw Final Tags
};
$template->Draw();
?>
