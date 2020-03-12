<?php

namespace Task\Controllers;

use \Generic\DatabaseTable;

class Home{
    private $commentsTable;
    private $productsTable;
    public function __construct(DatabaseTable $commentsTable,DatabaseTable $productsTable)
    {
        $this->commentsTable = $commentsTable;
        $this->productsTable = $productsTable;
    }

    public function home()
    {
        $products = $this->productsTable->findAll();
        $comments = $this->commentsTable->find('approved',1);

        return ['template' => 'home.html.php',
                'title' => 'Home page',
                'variables' => [
                    'products' => $products,
                    'comments' => $comments
                ]];
    }
    public function insert()
    {
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['description'])){
            $fields = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'description' => $_POST['description'],
                'approved' => 0
            ];
            $this->commentsTable->insert($fields);
        }
        
        header('location: /');
    }


}