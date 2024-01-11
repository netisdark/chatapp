<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    if (!empty($message)) {
        // Save the message to a file, database, or another storage method
        // Adjust this part based on your needs
        $file = fopen("messages.txt", "a");
        fwrite($file, "<br>User: " . $message . "\n");
        fclose($file);
    }
}
