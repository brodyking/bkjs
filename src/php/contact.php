<?php

if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['content'])) {
    if (file_exists('contact/' . $_POST['subject'])) {
        $_POST['subject'] = $_POST['subject'] . '[D]';
    }
    fopen("contact/" . $_POST['subject'] . ".md", "w");
    file_put_contents("contact/" . $_POST['subject'] . ".md", '# ' . $_POST['subject'] . PHP_EOL . 'Sender: ' . $_POST['email'] . PHP_EOL . PHP_EOL . $_POST['content']);
    header("Location: /page.php?p=contact-confirmed");
    die();
}