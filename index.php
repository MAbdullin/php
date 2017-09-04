<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="form-group">
    <div class="container">
    <h2>Регистрация</h2>
    </div>
</div>
<form action="index.php" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3" for="lastName">Имя в игре:</label>
        <div class="col-xs-3">
            <input type="text" class="form-control" id="lastName" placeholder="Придумайте ник" name="username" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="lastName">Фамилия:</label>
        <div class="col-xs-3">
            <input type="text" class="form-control" id="lastName" placeholder="Введите фамилию" name="lastname" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="firstName">Имя:</label>
        <div class="col-xs-3">
            <input type="text" class="form-control" id="firstName" placeholder="Введите имя" name="firstname" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Дата рождения:</label>
        <div class="col-xs-1">
            <select class="form-control">
                <option>Дата</option>
            </select>
        </div>
        <div class="col-xs-1">
            <select class="form-control">
                <option>Месяц</option>
            </select>
        </div>
        <div class="col-xs-1">
            <select class="form-control">
                <option>Год</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="inputEmail">Email:</label>
        <div class="col-xs-3">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="inputPassword">Пароль:</label>
        <div class="col-xs-3">
            <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль" name="password" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="confirmPassword">Подтвердите пароль:</label>
        <div class="col-xs-3">
            <input type="password" class="form-control" id="confirmPassword" placeholder="Введите пароль ещё раз"  name="repassword" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Телефон:</label>
        <div class="col-xs-3">
            <input type="tel" class="form-control" id="phoneNumber" placeholder="Введите номер телефона" name="phone" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Пол:</label>
        <div class="col-xs-1">
            <label class="radio-inline">
                <input type="radio" name="gender" value="male" checked> Мужской
            </label>
        </div>
        <div class="col-xs-1">
            <label class="radio-inline">
                <input type="radio" name="gender" value="female"> Женский
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-3">
            <label class="checkbox-inline">
                <input type="checkbox" value="agree" required>  Я согласен с <a href="#">условиями</a>.
            </label>
        </div>
    </div>
    <br />
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-3">
            <input type="submit" class="btn btn-primary" value="Регистрация" name="submit">
            <input type="reset" class="btn btn-default" value="Очистить форму" name="reset">
        </div>
    </div>
</form>


</body>
</html>

<?php
function usermaneCorrect ($username){
    if (strlen($username)<=3){
        print_r ('Количество символов должно быть более 3');
    } else {
        print_r ('Количество символов более 3');
    }

}


function fieldIsset($field) {
    if (isset($field) && !empty($field)) {
        return true;
    }
    return false;
}
function emailCorrect ($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail ($email) указан верно.\n";
    } else {
        echo 'E-mail указан неверно.';
    }

}
function ageCorrect($age){
    if ($age >=18 && $age <=200){
        print_r('Возраст корректный');
    } else {
        print_r('Возраст некорректный');

    }
}
function aboutCorrect($about){
    if ( strlen($about) < 10 || strlen($about) >30){
        print_r('О себе слишком мало или много!');
    } else {
        print_r('О себе правильно!!');

    }
}


function phoneCorrect($phone){
    if(preg_match('/^[0-9]{11}$/', $phone)) {
        print_r ('Введено 11 цифр');
    } else {
        print_r ('Некорректный номер телефона');
    }
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    if (fieldIsset($firstname)) {
        print_r('Имя задано ');
    }
    emailCorrect($email);
    phoneCorrect($phone);
    usermaneCorrect($username);

}