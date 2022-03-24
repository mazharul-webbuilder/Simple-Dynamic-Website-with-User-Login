<?php


namespace App\classes;
use App\classes\User;



class Auth
{
    private $email;
    private $password;
    private $user;
    private $users;

    public function login()
    {
        header('Location: action.php?page=login');
    }
    public function __construct($post = null)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        foreach ($this->users as $user)
        {
            if ($this->email == $user['email'] && $this->password == $user['password'])
            {
                session_start();
                $_SESSION['userId'] = $user['userId'];
                $_SESSION['name']   = $user['name'];
                header('Location: action.php?page=home');
            }
        }
        return "Sorry! Invalid Email or Password";
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['userId']);
        unset($_SESSION['name']);
        header('Location: action.php?page=login');
    }




}