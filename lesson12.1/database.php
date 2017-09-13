<?php



if (isset($_POST['submit'])) {
    add($_POST);
    echo 'Сообщение отправлено';
}

/*echo '<pre>';*/
/*print_r(getAll());*/

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

    $username= $data['username'];
    $message= $data['message'];
    $time = date("H:i");

    $row = "[" . $time . "]" . "\t" . $username . ":"  . "\t" . $message . PHP_EOL;

    file_put_contents('./products.csv', $row, FILE_APPEND);
}