<?php

function getUsersList()
{
    return [
        'ivan' => '$2y$10$eTYzPO2E4lHRMtDhb4NJtu.pSVdk0BW6bW6Eh2BzCtnFz0veRufrO', // 111
        'petr' => '$2y$10$HW.MwGe/n9ZALFMxIxEqBOpiMDMvv9rHtosuuGB5HE8CtNUFjvOIe', // 222
        'user1' => '$2y$10$p4tcuNC6k0fN/1znWk2hg.GSEdVCgcGIlyaS7gwjBkczmSwTbTHnC', // 333
        'user2' => '$2y$10$g3SQpyj9qSkepSwbm94dPOoXevv6WQguO/uDJvQ.43acWllPIb0xS', // 444
    ];
}

function existsUser($login)
{
    $users = getUsersList();

    if (isset($users[$login])){
        return true;
    } else {
        return false;
    }
}

function checkPassword($login, $password)
{
    $users = getUsersList();

    if (
        existsUser($login)
        &&
        password_verify($password, $users[$login])
    )
    {
        return true;
    } else {
        return false;
    }
}

function getCurrentUser()
{
    if (isset($_SESSION['username']) && existsUser($_SESSION['username'])){
        return $_SESSION['username'];
    } else {
        return null;
    }
}

function getFiles($dirname)
{
    return array_diff( scandir( $dirname, SCANDIR_SORT_NONE ), ['.', '..'] );
}

function uploadImage()
{
    if (0 == $_FILES['img']['error']) {
        if ( in_array( $_FILES['img']['type'], ['image/png', 'image/jpeg'] ) ) {
            if ( move_uploaded_file( $_FILES['img']['tmp_name'], __DIR__ . '/images/' . $_FILES['img']['name'] )) {
                setLog($_FILES['img']['name']); // запись в лог
                return true;
            }
            return false;
        }
        return false;
    }
}

function setLog($filename)
{
    $str = date('Y-m-d H:i:s') . '  ' . $_SESSION['username'] . '   ' . $filename . "\n";
    file_put_contents(__DIR__ . '/log.txt', $str, FILE_APPEND);
}