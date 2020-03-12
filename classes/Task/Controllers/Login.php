<?php

namespace Task\Controllers;

use Generic\DatabaseTable;

class Login{
    private $authentication;
    private $commentsTable;

    public function __construct(\Generic\Authentication $authentication,DatabaseTable $commentsTable)
    {
        $this->authentication = $authentication;
        $this->commentsTable = $commentsTable;
    }

    public function loginForm()
    {
        return ['template' => 'login.html.php','title' => 'Login'];
    }

    public function processLogin()
    {
        if($this->authentication->login($_POST['email'],$_POST['password'])){
            header('location: /admin');
        }else{
            return ['template' => 'login.html.php',
                    'title' => 'Login',
                    'variables' => [
                        'error' => 'Invalid username/password'
                    ]];
        }
    }
    public function success() 
    {
        if(isset($_SESSION['email'])){
            $comments = $this->commentsTable->find('approved',0);
            return ['template' => 'admin.html.php',
            'title' => 'Login successfull',
            'variables' => [
                'comments' => $comments
            ]];
        }
        header('location: /login');
    }
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        header('location: /login');
    }

    
}