<?php

include __DIR__ . '/classes/User.php';

session_start();

$user = new User;

if ( isset($_GET['logout']) ){
    $user->logout();
}

if (
    isset($_POST['login'], $_POST['password'])
    &&
    $user->checkPassword($_POST['login'], $_POST['password'])
)
{
    $_SESSION['username'] = $_POST['login'];
}

if ( $user->getCurrentUser() ){
    header( 'Location: /homework6/gallery/index.php' );
}
else { ?>
    <form  action="/homework6/login.php" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <button>войти</button>
    </form>

<?php } ?>