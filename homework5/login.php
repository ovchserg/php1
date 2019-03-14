<?php

include __DIR__ . '/functions.php';

session_start();

if (
    isset($_POST['login'], $_POST['password'])
    &&
    checkPassword($_POST['login'], $_POST['password'])
)
{
    $_SESSION['username'] = $_POST['login'];
}

if ( null !== getCurrentUser() ){
    header( 'Location: /homework5/index.php' );
    exit;
}
else { ?>
    <form  action="/homework5/login.php" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <button>войти</button>
    </form>

<?php } ?>