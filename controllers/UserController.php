<?php
require_once 'models/User.php';

class UserController {

    public function index()
    {
        // Retrieve data from the model 
        // The static method getAll() of the class User is being called. This does not require an instance of the class to be created before calling the method.

       $users = User::getAll();

        // load the view 
    require_once 'views/index.php';
    }

   


}