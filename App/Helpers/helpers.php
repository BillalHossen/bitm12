<?php
function view($view, $data=[], $print = True){
    $output = "View file not found!";
    $filePath = "Views/".$view.".php";
    if(file_exists($filePath)){
        ob_start();
        extract($data);
        include $filePath;
        $output = ob_get_clean();
    }
    if($print){
        print $output;
    }
}
