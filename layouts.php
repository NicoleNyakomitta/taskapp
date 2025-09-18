<?php
class layouts {
    public function heading() {
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Task App</title>
            <meta charset='UTF-8'>
        </head>
        <body>";
    }

    public function welcome() {
        echo "<h1>Welcome to Task App</h1>";
    }

    public function footer() {
        echo "</body></html>";
    }
}
