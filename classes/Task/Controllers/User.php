<?php

namespace Task\Controllers;

use Generic\DatabaseTable;

class User{
    private $usersTable;

    public function __construct(DatabaseTable $usersTable)
    {
        $this->usersTable = $usersTable;
    }
}