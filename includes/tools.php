<?php
/**
 * renderizar encabezado o pie de pagina
 */
function render($template, $data = [])
{
    $path = VIEW_PATH . $template . ".php";
    if (file_exists($path))
    {
      extract($data);
      require($path);
    }
}

?>
