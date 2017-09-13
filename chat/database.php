<?php



if (isset($_POST['submit'])) {
    add($_POST);
}

function getAll()
{
    $elements = [];
    foreach (file('./products.csv') as $row)
    {
        $element = explode("\t", $row);
        $elements[] = $element;
    }
    return $elements;
}


function add($data)
{

    $username = addslashes($data['username']);
    $username = strip_tags ($username);
    $username = htmlspecialchars($username);
    $username = trim($username);
    $message = addslashes($data['message']);
    $message = strip_tags ($message);
    $message = htmlspecialchars($message);
    $message = trim($message);

    $time = date("H:i");

    $row = "[" . $time . "]" . "\t" . $username . ":"  . "\t" . $message . PHP_EOL;

    file_put_contents('./products.csv', $row, FILE_APPEND);
}