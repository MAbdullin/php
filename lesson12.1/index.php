<?php
    require_once './database.php'
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table>
    <?php foreach (getAll() as $product): ?>
    <tr>
        <td><?php echo $product[0] ?></td>
        <td><?php echo $product[1] ?></td>
        <td><?php echo $product[2] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<form action="/lesson12.1/index.php" method="post"><!--
    <input type="text" name="time" placeholder="Время">-->
    <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,}$" name="username" placeholder="Имя" value="<?=isset($_POST['username'])?htmlspecialchars($_POST['username']):'';?>">
    <input type="text" name="message" placeholder="Сообщение">
    <button type="submit" name="submit">Отправить</button>
</form>

</body>
</html>