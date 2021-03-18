<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

<!--    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">-->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <!-- Bootstrap core CSS -->


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/singin.css" rel="stylesheet">
</head>
<body >
<?include_once __DIR__."/header_.php";?>
<div>
<form class="form-signin" method="GET" action="./singintry.php">

    <h1 class="h3 mb-3 font-weight-normal">Вход в личный кабинет</h1>
<!--    <label for="inputEmail" class="sr-only">Email address</label>-->
    <input name="inputEmail" type="email" id="inputEmail" class="form-control" placeholder="Адрес электронной почты" required="" autofocus="">
<!--    <label for="inputPassword" class="sr-only">Password</label>-->
    <input name="inputPassword" type="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Запомнить логин
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Войти</button>
    <p class="mt-5 mb-3 text-muted">© 2015-2021</p>
</form>
</div>
</body>
</html>