<?php

class Autoload
{
    public function run()
    {
        $url = './app/views/main.php';
        header("Location: " . $url);
        die();
    }
}
