
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Дипломатия</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>Добро пожаловать!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Узнать больше »</a></p>
    </div>
</div>
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