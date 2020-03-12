<?php

namespace Task;

class TaskRoutes implements \Generic\Routes {
    private $usersTable;
    private $authentication;
    private $commentsTable;
    private $productsTable;

    public function __construct()
    {
        include __DIR__. '/../../includes/DatabaseConnection.php';
        $this->usersTable = new \Generic\DatabaseTable($pdo,'users','id','\Task\Entity\User',[$this->usersTable]);
        $this->authentication = new \Generic\Authentication($this->usersTable,'email','password');
        $this->commentsTable = new \Generic\DatabaseTable($pdo,'comments','id','\Task\Entity\Comment',[$this->commentsTable]);
        $this->productsTable = new \Generic\DatabaseTable($pdo,'product','id','\Task\Entity\Product',[$this->productsTable]);
    }

    public function getRoutes(): array
    {
        $loginController = new \Task\Controllers\Login($this->authentication,$this->commentsTable);
        $homeController = new \Task\Controllers\Home($this->commentsTable,$this->productsTable);
        $adminController = new \Task\Controllers\Admin($this->commentsTable);

        $routes = [
            'login' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'loginForm'
                ],
                'POST' => [
                    'controller' => $loginController,
                    'action' => 'processLogin'
                ]
            ],
            'admin' => [
                'GET' =>[
                    'controller' => $loginController,
                    'action' => 'success'
                ]
            ],
            'logout' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'logout'
                ]
            ],
            'deleteComment' => [
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'delete'
                ]
            ],
            'updatecomment' => [
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'update'
                ]
            ],
            'leavecomment' => [
                'POST' => [
                    'controller' => $homeController,
                    'action' => 'insert'
                ]
            ],
            '' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'home'
                ]
            ]


        ];

        return $routes;
    }
    public function getAuthentication(): \Generic\Authentication
    {
        return $this->authentication;
    }

    public function checkPermission($permission): bool
    {
        $user = $this->authentication->getUser();

		if ($user && $user->hasPermission($permission)) {
			return true;
		} else {
			return false;
		}
    }
}