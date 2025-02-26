<?php
template("General");
// Create an instance of the regular and basic template
$template = new \MiMFa\Template\General();
$template->Initial = function() use($template) {
    $template->RenderInitial();
    // Draw Head Tags
};
$template->Header = function() use($template) {
    $template->RenderHeader();
    // Draw Page Header
};
$template->Content = function() use($template) {
    $template->RenderContent();
    // Draw Page Content
};
$template->Footer = function() use($template) {
    $template->RenderFooter();
    // Draw Page Footer
};
$template->Final = function() use($template) {
    $template->RenderFinal();
    // Draw Final Tags
};
$template->Render();
?>
