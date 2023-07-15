<?php
// Entry point for our application.
// Retrieve the controller and action from the URL (e.g., index.php?controller=user&action=index)



// Retrieve the Controller and Action Names from the URL:
// In the URL, the controller and action parameters define which controller and method (also known as an action) to use. For example, in index.php?controller=user&action=index, the user controller and the index action are specified.
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// If no controller or action is provided in the URL, the default controller will be user and the default action will be index.


// Create the controller class name based on the URL parameter
// Construct the Controller Class Name:
// It constructs the controller class name based on the controller parameter from the URL. If the controller is user, then the class name would be UserController.

// The ucfirst() function is a built-in PHP function that makes the first character of a string uppercase.
$controllerClassName = ucfirst($controller) . 'Controller';

// Check if the controller file exists

// Check if the Controller File Exists:

// It constructs the path to the PHP file that should define the controller class. The script then checks if that file exists. If it does, it includes that file, so the class defined in it can be used.
$controllerFile = 'controllers/' . $controllerClassName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    // Instantiate the Controller: Create an instance of the controller
    $controllerInstance = new $controllerClassName();

    // Check if the action method exists in the controller
// Check if the Action Method Exists:

// The script checks if the method (or action) that corresponds to the action URL parameter exists in the controller class.

    if (method_exists($controllerInstance, $action)) {
        // Call the action method
        $controllerInstance->$action();
    } else {
        die('Invalid action');


    }
// If the method exists, it's called, otherwise, an "Invalid action" message is shown and the script execution stops.

// If the controller file does not exist, an "Invalid controller" message is shown and the script execution stops.

} 

else {
    die('Invalid controller');
}