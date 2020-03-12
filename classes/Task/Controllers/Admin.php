<?php

namespace Task\Controllers;

use Generic\DatabaseTable;

class Admin {
    private $commentsTable;

    public function __construct(DatabaseTable $commentsTable)
    {
        $this->commentsTable = $commentsTable;
    }
    public function update()
    {
        if(isset($_SESSION['email'])){
            $fields = [
                'id' => $_POST['id'],
                'approved' => 1
            ];
            $this->commentsTable->update($fields);
            header('location: /admin');
        }
        

        header('location: /admin');
    }

    public function delete(){
        $this->commentsTable->delete($_POST['id']);

        header('location: /admin');
    }
}