<?php

class User
{
    public function getUsersList()
    {
        return [
            'ivan' => '$2y$10$eTYzPO2E4lHRMtDhb4NJtu.pSVdk0BW6bW6Eh2BzCtnFz0veRufrO', // 111
            'petr' => '$2y$10$HW.MwGe/n9ZALFMxIxEqBOpiMDMvv9rHtosuuGB5HE8CtNUFjvOIe', // 222
            'user1' => '$2y$10$p4tcuNC6k0fN/1znWk2hg.GSEdVCgcGIlyaS7gwjBkczmSwTbTHnC', // 333
            'user2' => '$2y$10$g3SQpyj9qSkepSwbm94dPOoXevv6WQguO/uDJvQ.43acWllPIb0xS', // 444
        ];
    }

    public function existsUser($login)
    {
        $users = $this->getUsersList();

        if(isset($users[$login])){
            return true;
        }
    }

    public function checkPassword($login, $password)
    {
        $users = $this->getUsersList();

        if(
            isset($users[$login])
            &&
            $password == password_verify($password, $users[$login])
        )
        {
            return true;
        }
    }

    public function getCurrentUser()
    {
        if(isset($_SESSION['username'])){
            return true;
        }
    }

    public function logout()
    {
        session_destroy();
    }
}